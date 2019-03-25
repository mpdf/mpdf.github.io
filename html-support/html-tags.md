---
layout: page
title: HTML Tags
parent_title: HTML support
permalink: /html-support/html-tags.html
modification_time: 2015-08-05T11:59:41+00:00
---

# HTML tags supported

The following HTML tags/elements are recognised and supported (to some extent) by mPDF. All HTML elements are
hard-coded in mPDF to be treated as block or in-line elements (e.g. equivalent to CSS `display:block` or `display:inline`).
This cannot be changed using CSS.

<table class="table">
    <tbody>
        <tr>
            <th>Tag</th>
            <th>mPDF</th>
            <th>Display type</th>
            <th>CSS</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>&lt;!--...--&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines a comment</td>
        </tr>
        <tr>
            <td>&lt;!DOCTYPE&gt; </td>
            <td>

            </td>
            <td> </td>
            <td> </td>
            <td>Defines the document type</td>
        </tr>
        <tr>
            <td>&lt;a&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a hyperlink</td>
        </tr>
        <tr>
            <td>&lt;abbr&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an abbreviation</td>
        </tr>
        <tr>
            <td>&lt;acronym&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span>

            </td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines an acronym</td>
        </tr>
        <tr>
            <td>&lt;address&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines contact information for the author/owner of a document</td>
        </tr>
        <tr>
            <td>&lt;applet&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5. </span>Defines an embedded applet</td>
        </tr>
        <tr>
            <td>&lt;area&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an area inside an image-map</td>
        </tr>
        <tr>
            <td>&lt;article&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines an article</td>
        </tr>
        <tr>
            <td>&lt;aside&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines content aside from the page content</td>
        </tr>
        <tr>
            <td>&lt;audio&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines sound content</td>
        </tr>
        <tr>
            <td>&lt;b&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines bold text</td>
        </tr>
        <tr>
            <td>&lt;base&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Specifies the base URL/target for all relative URLs in a document</td>
        </tr>
        <tr>
            <td>&lt;basefont&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5. </span>Specifies a default color, size, and font for all text in a document</td>
        </tr>
        <tr>
            <td>&lt;bdi&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td> </td>
            <td>Isolates a part of text that might be formatted in a different direction from other text outside it. mPDF&ge;6.0

            </td>
        </tr>
        <tr>
            <td>&lt;bdo&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td> </td>
            <td>Overrides the current text direction</td>
        </tr>
        <tr>
            <td>&lt;big&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines big text</td>
        </tr>
        <tr>
            <td>&lt;blockquote&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a section that is quoted from another source</td>
        </tr>
        <tr>
            <td>&lt;body&gt;</td>
            <td>✓</td>
            <td> </td>
            <td>✓</td>
            <td>Defines the document's body</td>
        </tr>
        <tr>
            <td>&lt;br&gt;</td>
            <td>✓</td>
            <td> </td>
            <td>✓</td>
            <td>Defines a single line break</td>
        </tr>
        <tr>
            <td>&lt;button&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a clickable button</td>
        </tr>
        <tr>
            <td>&lt;canvas&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Used to draw graphics, on the fly, via scripting (usually JavaScript)</td>
        </tr>
        <tr>
            <td>&lt;caption&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK/TABLE</span></td>
            <td>✓</td>
            <td>Defines a table caption</td>
        </tr>
        <tr>
            <td>&lt;center&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5. </span>Defines centered text</td>
        </tr>
        <tr>
            <td>&lt;cite&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines the title of a work</td>
        </tr>
        <tr>
            <td>&lt;code&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a piece of computer code</td>
        </tr>
        <tr>
            <td>&lt;col&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Specifies column properties for each column within a &lt;colgroup&gt; element </td>
        </tr>
        <tr>
            <td>&lt;colgroup&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Specifies a group of one or more columns in a table for formatting</td>
        </tr>
        <tr>
            <td>&lt;command&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a command button that a user can invoke</td>
        </tr>
        <tr>
            <td>&lt;datalist&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Specifies a list of pre-defined options for input controls</td>
        </tr>
        <tr>
            <td>&lt;dd&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a description of an item in a definition list</td>
        </tr>
        <tr>
            <td>&lt;del&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines text that has been deleted from a document</td>
        </tr>
        <tr>
            <td>&lt;details&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines additional details that the user can view or hide</td>
        </tr>
        <tr>
            <td>&lt;dfn&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a definition term</td>
        </tr>
        <tr>
            <td>&lt;dir&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5. </span>Defines a directory list</td>
        </tr>
        <tr>
            <td>&lt;div&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a section in a document</td>
        </tr>
        <tr>
            <td>&lt;dl&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a definition list</td>
        </tr>
        <tr>
            <td>&lt;dt&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a term (an item) in a definition list</td>
        </tr>
        <tr>
            <td>&lt;em&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines emphasized text </td>
        </tr>
        <tr>
            <td>&lt;embed&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a container for an external (non-HTML) application</td>
        </tr>
        <tr>
            <td>&lt;fieldset&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMS</span></td>
            <td>✓</td>
            <td>Groups related elements in a form</td>
        </tr>
        <tr>
            <td>&lt;figcaption&gt;<span class="new"> </span></td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a caption for a &lt;figure&gt; element</td>
        </tr>
        <tr>
            <td>&lt;figure&gt;<span class="new"> </span></td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Specifies self-contained content</td>
        </tr>
        <tr>
            <td>&lt;font&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5. </span>Defines font, color, and size for text</td>
        </tr>
        <tr>
            <td>&lt;footer&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a footer for a document or section</td>
        </tr>
        <tr>
            <td>&lt;form&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMS</span></td>
            <td>✓</td>
            <td>Defines an HTML form for user input</td>
        </tr>
        <tr>
            <td>&lt;frame&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines a window (a frame) in a frameset</td>
        </tr>
        <tr>
            <td>&lt;frameset&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines a set of frames</td>
        </tr>
        <tr>
            <td>&lt;h1&gt; to &lt;h6&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines HTML headings</td>
        </tr>
        <tr>
            <td>&lt;head&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines information about the document</td>
        </tr>
        <tr>
            <td>&lt;header&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a header for a document or section</td>
        </tr>
        <tr>
            <td>&lt;hgroup&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Groups heading (&lt;h1&gt; to &lt;h6&gt;) elements</td>
        </tr>
        <tr>
            <td>&lt;hr&gt;</td>
            <td>✓</td>
            <td> </td>
            <td>✓</td>
            <td>Defines a thematic change in the content</td>
        </tr>
        <tr>
            <td>&lt;html&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines the root of an HTML document</td>
        </tr>
        <tr>
            <td>&lt;i&gt;</td>
            <td>✓

            </td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a part of text in an alternate voice or mood</td>
        </tr>
        <tr>
            <td>&lt;iframe&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an inline frame</td>
        </tr>
        <tr>
            <td>&lt;img&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines an image</td>
        </tr>
        <tr>
            <td>&lt;input&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMFIELD</span></td>
            <td>✓</td>
            <td>Defines an input control</td>
        </tr>
        <tr>
            <td>&lt;ins&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a text that has been inserted into a document</td>
        </tr>
        <tr>
            <td>&lt;kbd&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines keyboard input</td>
        </tr>
        <tr>
            <td>&lt;keygen&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a key-pair generator field (for forms)</td>
        </tr>
        <tr>
            <td>&lt;label&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a label for an &lt;input&gt; element</td>
        </tr>
        <tr>
            <td>&lt;legend&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMFIELD</span></td>
            <td><span class="smallblock"> </span></td>
            <td>Defines a caption for a &lt;fieldset&gt;, &lt; figure&gt;, or &lt;details&gt; element</td>
        </tr>
        <tr>
            <td>&lt;li&gt;</td>
            <td>✓</td>
            <td><span class="smallblock"> </span><span class="smallblock">BLOCK</span></td>
            <td class="pmhTopCenter">✓</td>
            <td>Defines a list item</td>
        </tr>
        <tr>
            <td>&lt;link&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines the relationship between a document and an external resource</td>
        </tr>
        <tr>
            <td>&lt;main&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a main section

            </td>
        </tr>
        <tr>
            <td>&lt;map&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a client-side image-map</td>
        </tr>
        <tr>
            <td>&lt;mark&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines marked/highlighted text</td>
        </tr>
        <tr>
            <td>&lt;menu&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a list/menu of commands</td>
        </tr>
        <tr>
            <td>&lt;meta&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines metadata about an HTML document</td>
        </tr>
        <tr>
            <td>&lt;meter&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td> </td>
            <td>Defines a scalar measurement within a known range (a gauge)</td>
        </tr>
        <tr>
            <td>&lt;nav&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines navigation links</td>
        </tr>
        <tr>
            <td>&lt;noframes&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines an alternate content for users that do not support frames</td>
        </tr>
        <tr>
            <td>&lt;noscript&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an alternate content for users that do not support client-side scripts</td>
        </tr>
        <tr>
            <td>&lt;object&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an embedded object</td>
        </tr>
        <tr>
            <td>&lt;ol&gt;</td>
            <td>✓</td>
            <td><span class="smallblock"> </span><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines an ordered list</td>
        </tr>
        <tr>
            <td>&lt;optgroup&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a group of related options in a drop-down list</td>
        </tr>
        <tr>
            <td>&lt;option&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMFIELD</span></td>
            <td><span class="smallblock"> </span></td>
            <td>Defines an option in a drop-down list</td>
        </tr>
        <tr>
            <td>&lt;output&gt;</td>
            <td>

            </td>
            <td> </td>
            <td> </td>
            <td>Defines the result of a calculation</td>
        </tr>
        <tr>
            <td>&lt;p&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a paragraph</td>
        </tr>
        <tr>
            <td>&lt;param&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a parameter for an object</td>
        </tr>
        <tr>
            <td>&lt;pre&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td> </td>
            <td>Defines preformatted text</td>
        </tr>
        <tr>
            <td>&lt;progress&gt;</td>
            <td>✓</td>
            <td>

            </td>
            <td> </td>
            <td>Represents the progress of a task</td>
        </tr>
        <tr>
            <td>&lt;q&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a short quotation</td>
        </tr>
        <tr>
            <td>&lt;rp&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines what to show in browsers that do not support ruby annotations</td>
        </tr>
        <tr>
            <td>&lt;rt&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines an explanation/pronunciation of characters (for East Asian typography)</td>
        </tr>
        <tr>
            <td>&lt;ruby&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a ruby annotation (for East Asian typography)</td>
        </tr>
        <tr>
            <td>&lt;s&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines text that is no longer correct</td>
        </tr>
        <tr>
            <td>&lt;samp&gt;</td>
            <td>✓

            </td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines sample output from a computer program</td>
        </tr>
        <tr>
            <td>&lt;script&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a client-side script</td>
        </tr>
        <tr>
            <td>&lt;section&gt;</td>
            <td>✓

            </td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a section in a document</td>
        </tr>
        <tr>
            <td>&lt;select&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMFIELD</span></td>
            <td>✓</td>
            <td>Defines a drop-down list</td>
        </tr>
        <tr>
            <td>&lt;small&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines smaller text</td>
        </tr>
        <tr>
            <td>&lt;source&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines multiple media resources for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
        </tr>
        <tr>
            <td>&lt;span&gt;</td>
            <td>✓

            </td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a section in a document</td>
        </tr>
        <tr>
            <td>&lt;strike&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5. </span>Defines strikethrough text</td>
        </tr>
        <tr>
            <td>&lt;strong&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines important text</td>
        </tr>
        <tr>
            <td>&lt;style&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines style information for a document</td>
        </tr>
        <tr>
            <td>&lt;sub&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines subscripted text</td>
        </tr>
        <tr>
            <td>&lt;summary&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines a visible heading for a &lt;details&gt; element</td>
        </tr>
        <tr>
            <td>&lt;sup&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines superscripted text</td>
        </tr>
        <tr>
            <td>&lt;table&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Defines a table</td>
        </tr>
        <tr>
            <td>&lt;tbody&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td> </td>
            <td>Groups the body content in a table</td>
        </tr>
        <tr>
            <td>&lt;td&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Defines a cell in a table</td>
        </tr>
        <tr>
            <td>&lt;textarea&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">FORMFIELD</span></td>
            <td>✓</td>
            <td>Defines a multiline input control (text area)</td>
        </tr>
        <tr>
            <td>&lt;tfoot&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Groups the footer content in a table</td>
        </tr>
        <tr>
            <td>&lt;th&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Defines a header cell in a table</td>
        </tr>
        <tr>
            <td>&lt;thead&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Groups the header content in a table</td>
        </tr>
        <tr>
            <td>&lt;time&gt;</td>
            <td>✓

            </td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a date/time</td>
        </tr>
        <tr>
            <td>&lt;title&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a title for the document</td>
        </tr>
        <tr>
            <td>&lt;tr&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">TABLE</span></td>
            <td>✓</td>
            <td>Defines a row in a table</td>
        </tr>
        <tr>
            <td>&lt;track&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines text tracks for media elements (&lt;video&gt; and &lt;audio&gt;)</td>
        </tr>
        <tr>
            <td>&lt;tt&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td><span class="deprecated">Not supported in HTML5.</span> Defines teletype text</td>
        </tr>
        <tr>
            <td>&lt;u&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines text that should be stylistically different from normal text</td>
        </tr>
        <tr>
            <td>&lt;ul&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">BLOCK</span></td>
            <td>✓</td>
            <td>Defines an unordered list</td>
        </tr>
        <tr>
            <td>&lt;var&gt;</td>
            <td>✓</td>
            <td><span class="smallblock">INLINE</span></td>
            <td>✓</td>
            <td>Defines a variable</td>
        </tr>
        <tr>
            <td>&lt;video&gt;</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Defines a video or movie</td>
        </tr>
        <tr>
            <td>&lt;wbr&gt;</td>
            <td>✓</td>
            <td> </td>
            <td> </td>
            <td>Defines a possible line-break (treated as identical to soft-hyphen) mPDF &ge;5.7

            </td>
        </tr>
    </tbody>
</table>

XHTML compatible forms are recognised e.g. `<br />`

