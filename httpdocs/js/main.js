/*global Origami */

"use strict";

jQuery(document).ready(function($) {

	Origami.fastclick(document.body);

	$("#menu-trigger").click(function(e) {
		e.preventDefault();
		$("body").toggleClass("menu-active");
	});
});
