---
---
'use strict';

var anchorForId = function (id) {
	var anchor = document.createElement("a");
	anchor.className = "header-link";
	anchor.href      = "#" + id;
	anchor.innerHTML = "<span class=\"sr-only\">Permalink</span><i>¶</i>";
	anchor.title = "Permalink";
	return anchor;
};

var linkifyAnchors = function (level, containingElement) {
	var headers = containingElement.getElementsByTagName("h" + level);
	for (var h = 0; h < headers.length; h++) {
		var header = headers[h];
		if (typeof header.id !== "undefined" && header.id !== "") {
			header.appendChild(anchorForId(header.id));
		}
	}
};

document.onreadystatechange = function () {
	if (this.readyState === "complete") {
		var contentBlock = document.getElementById('content');
		if (!contentBlock) {
			return;
		}
		for (var level = 1; level <= 6; level++) {
			linkifyAnchors(level, contentBlock);
		}
	}
};

var navHeadingClick = function (event) {

	event.preventDefault();
	var el = event.target.parentNode;

	if (el.classList) {
		el.classList.toggle('open');
	} else {
		if (!el.className.indexOf(' open') !== -1) {
			el.className += el.className.replace(' open', '');
		} else {
			el.className += ' open';
		}

	}
}

var headings = document.querySelectorAll('nav a.heading');
[].forEach.call(headings, function(el) {
	el.addEventListener('click', navHeadingClick);
});
