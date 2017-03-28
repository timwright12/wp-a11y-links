WP A11y Links
=======================
Search a content block (string or object) with PHP to look for any links that open in a new window which need a "new window" icon to be accessible

**Research about why this is important**: [WebAIM Link Text](http://webaim.org/techniques/hypertext/hypertext_links)

**3rd Party Libraries**: [Simple HTML DOM](http://simplehtmldom.sourceforge.net/)

All this plugin does is search through an HTML block for links with target="_blank" an appends an SVG icon with alt text reading, "This link opens in a new window".

**TO DO:**
Replace Simple HTML DOM with http://php.net/manual/en/class.domdocument.php
