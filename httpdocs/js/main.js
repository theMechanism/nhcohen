/*global Origami */

"use strict";

jQuery(document).ready(function($) {
	
	$(".ss").mask("999-99-9999");
	$(".date").mask("99/99/9999");
	$(".phone").mask("999-999-9999");


	Origami.fastclick(document.body);

	$("#menu-trigger").click(function(e) {
		e.preventDefault();
		$("body").toggleClass("menu-active");
		$(".main").on("touchstart click", function(e) {
			var $target = $(e.target);
			if ($target.attr("id") === "menu-trigger" || $target.parents("#menu-trigger").length) return;
			$(this).off();
			$("body").removeClass("menu-active");
		});
	});
	$("a[rel=external]").each(function() {
		$(this).attr("target", "_blank");
	});
});
