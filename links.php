<?php

require_once __DIR__ . '/vendor/autoload.php';

Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT, __DIR__);
Tracy\Debugger::$maxDepth = 6;

class Links
{

	public $categories = [];

	public $links = [];
	public $replacements = [];

	private $dest = __DIR__ . '/../doc';

	public function parseMenu()
	{
		$handle = fopen('menu-new.html', 'r');

		$a = -1;
		$b = -1;
		$parent = '';
		$title = '';

		while (($line = fgets($handle)) !== false) {
			if (preg_match("/(\t*)(.*)\tindex(.*)\.html\?tid=(.*)/", $line, $matches)) {
				$c++;

				$array = [
					'title' => $matches[2],
					'url' => 'index' . $matches[3] . '.html',
					'permalink' => '/' . ($parent ? $parent . '/' : '') . $matches[4] . '.html',
					'slug' => $matches[4],
					'parent_title' => $title,
				];

				$this->links[] = '/' . $array['url'] . '\?tid=([0-9]+)' . '/';
				$this->replacements[] = "{{ \"{$array['permalink']}\" | prepend: site.baseurl }}";

				if ($level === 0) {
					$this->categories[$a]['items'][$c] = $array;
				} elseif ($level === 1) {
					$this->categories[$a]['items'][$b]['items'][$c] = $array;
				}

				continue;
			}

			if (preg_match("/^(\w+)/", $line)) {
				$level = 0;
				$a++;
				$b = -1;
				$c = -1;
				$title = trim($line);
				$topparent = $parent = Nette\Utils\Strings::webalize(trim($line));
				$this->categories[$a] = [
					'title' => trim($line),
					'slug' => Nette\Utils\Strings::webalize(trim($line)),
					'items' => [],
				];
				continue;
			}

			if (preg_match("/^\t(\w+)/", $line)) {
				$level = 1;
				$b++;
				$c = -1;
				$title = trim($line);
				$parent = $topparent . '/' . Nette\Utils\Strings::webalize(trim($line));
				$this->categories[$a]['items'][$b] = [
					'title' => trim($line),
					'slug' => Nette\Utils\Strings::webalize(trim($line)),
					'items' => [],
				];
				continue;
			}

			//echo $line;
		}
		fclose($handle);
	}

	function processCategory(&$category, $parent = NULL)
	{
		foreach ($category as &$item) {
			$slug = $item['slug'];
			if (array_key_exists('items', $item)) {
				$this->processCategory($item['items'], $parent ? $parent . '/' . $slug : $slug);
			} else {
				$this->cleanAndMoveFile($item, $parent ?: $slug);
			}
		}
	}

	private function cleanAndMoveFile(&$item, $parent)
	{
		if (!file_exists($this->dest . '/' . $parent)) {
			mkdir($this->dest . '/' . $parent, 0775, TRUE);
		}

		$content = file_get_contents(__DIR__ . '/'. $item['url']);

		$time = new DateTime();
		if (preg_match('@<div class="right">(.*) \(DST\)@', $content, $matches)) {
			$time = new DateTime($matches[1]);
		}

		$content = preg_replace('/(?:.*?)<div (class|id)="bpmbook"/sm', '<div id="bpmbook"', $content);

		$content = preg_replace('/<div id="bpmbook"(.*?)>/sm', '', $content);
		$content = preg_replace('/<div class="topic_user_field">/sm', '', $content);
		$content = preg_replace('/<div id="U0">/sm', '', $content);

		$content = preg_replace('/(?:.*?)<!-- START CONTENTS -->[\s]+/sm', '', $content);
		$content = preg_replace('/<\/div><!-- END INNERCONTENTS -->(?:.*)$/sm', '', $content);
		$content = preg_replace('/<\/div><!-- END CONTENTS -->(?:.*)$/sm', '', $content);
		$content = preg_replace('/<!-- END BPMBOOK -->(?:.*)$/sm', '', $content);
		$content = preg_replace('/<!--(.*?)-->$/sm', '', $content);


		$content = preg_replace('/<(\/?)h5>/', '<\\1h2>', $content);
		$content = preg_replace('/<(\/?)h6>/', '<\\1h3>', $content);
		$content = preg_replace('/<br ?\/?>/', "\n", $content);
		$content = str_replace('<p>&nbsp;</p>', '', $content);

		$content = preg_replace('/\s*<h2>\s*(.*?)\s*<\/h2>/sm', "\n\n" . '# \\1' . "\n", $content);
		$content = preg_replace('/\s*<h3>\s*(.*?)\s*<\/h3>/sm', "\n\n" . '## \\1' . "\n", $content);

		//$content = preg_replace('/<p class="examplecode">(.*?)\$(.*?)<\/p>/sm', "\n{% highlight php %}\n<?php\n\n\\1$\\2\n{% endhighlight %}\n", $content);
		//$content = preg_replace('/<p class="examplecode">(.*?)&lt;(.*?)<\/p>/sm', "\n{% highlight html %}\n\\1&lt;\\2\n{% endhighlight %}\n", $content);

		$content = preg_replace_callback('/<p class="manual_block"><b>Note:? ?<\/b>:? ?(.*?)<\/p>/sm', function ($matches) {
			$text = "\n" . '<div class="alert alert-info" role="alert"><strong>Note:</strong> ' . $matches[1] . '</div>';
			return $text;
		}, $content);

		$content = preg_replace_callback('/<p class="manual_block"><b>Tip:<\/b>(.*?)<\/p>/sm', function ($matches) {
			$text = "\n" . '<div class="alert alert-success" role="alert"><strong>Tip:</strong>' . $matches[1] . '</div>';
			return $text;
		}, $content);

		$content = preg_replace('/<span class="code">(.*?)<\/span>/sm', "<code>\\1</code>", $content);
		$content = preg_replace('/<table(.*?)>/sm', '<table class="table">', $content);

		$content = preg_replace('/<p class="examplecode">(.*?)<\/p>/sm', "\n{% highlight php %}\n\\1\n{% endhighlight %}\n", $content);

		$content = preg_replace_callback('/{% highlight php %}(.*?){% endhighlight %}/sm', function ($matches) {
			$text = $matches[0];
			$text = strip_tags($text);
			$text = str_replace(['&gt;', '&lt;', '&nbsp;'], ['>', '<', ' '], $text);

			$text = preg_replace('/\s*<\?php\s*/sm', '', $text);
			if (preg_match('/\s+\$/', $matches[1])) {
				$text = str_replace('{% highlight php %}', "{% highlight php %}\n<?php\n\n", $text);
			}

			return $text;
		}, $content);


		$content = preg_replace('/<\/ ?div>\s+<\/ ?div>\s+$/sm', '', $content);

		$content = preg_replace($this->links, $this->replacements, $content);

		$content = preg_replace('/<p.*?>(.*?)<\/p>/sm', "\n\\1\n", $content);

		$content = preg_replace('/[\n|\r\n]{2,}/sm', "\n\n", $content);

		$content = "---
layout: page
title: {$item['title']}
parent_title: {$item['parent_title']}
permalink: {$item['permalink']}
modification_time: {$time->format('c')}
---" . $content;

		file_put_contents($this->dest . '/' . $parent . '/' . $item['slug'] . '.md', $content);
	}

	public function generateNavYml()
	{
		$dumper = new Symfony\Component\Yaml\Dumper();

		$yaml = $dumper->dump($this->categories, 6);
		file_put_contents($this->dest . '/_data/nav.yml', $yaml);
	}

}

$links = new Links();

$links->parseMenu();

$links->processCategory($links->categories);
$links->generateNavYml($links->categories);
