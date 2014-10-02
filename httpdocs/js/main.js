/*global Origami */

"use strict";

jQuery(document).ready(function($) {

	Origami.fastclick(document.body);

	$("#menu-trigger").click(function(e) {
		e.preventDefault();
		$("body").toggleClass("menu-active");
		$(".main").on("touchstart click", function(e) {
			var $target = $(e.target);
			if ($target.attr("id") === "menu-trigger" || $target.parent().attr("id") === "menu-trigger") return;
			$(this).off();
			$("body").removeClass("menu-active");
		});
	});
});
