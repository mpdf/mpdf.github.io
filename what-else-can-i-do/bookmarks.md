---
layout: page
title: Bookmarks
parent_title: What Else Can I Do
permalink: /what-else-can-i-do/bookmarks.html
modification_time: 2015-08-05T12:00:12+00:00
---

PDF document Bookmarks can be set in two ways:

```html
<bookmark content="Buffalo" level="0" />
```
or
```php
<?php
$mpdf->Bookmark("Buffalo", 0);

```

**Bookmark**(string <span class="parameter">$content</span> [, integer <span class="parameter">$level</span>])

- <span class="parameter">$content</span> Text string (utf-8 encoded)
- <span class="parameter">$level</span> Specify the level of this entry i.e. like heading1,2,3; but starts at level 0 
  
  Default: `0`

NB: Bookmarks use system fonts, therefore any Unicode text can be used, even if a unibyte codepage is being used for the document.

See:
- <a href="{{ "/reference/mpdf-functions/bookmark.html" | prepend: site.baseurl }}">Bookmark()</a>
- &lt;<a href="{{ "/reference/html-control-tags/bookmark.html" | prepend: site.baseurl }}">bookmark</a>&gt;
- <a href="{{ "/reference/mpdf-variables/bookmarkstyles.html" | prepend: site.baseurl }}">bookmarkStyles</a>

