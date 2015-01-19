/*global Origami */

"use strict";

jQuery(document).ready(function($) {

	if (window.addEventListener) {
		// wrapped in an if statement to protect against IE8 — no addEventListener
		Origami.fastclick(document.body);
	}

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

	$(".maskss").mask("999-99-9999");
	$(".maskdate").mask("99/99/9999");
	$(".maskphone").mask("999-999-9999");

	$(".accredited-investor#submit").on("click",function(e) {
		if (!$("#checkForm").hasClass("active")) {
			e.preventDefault();

			$(e.target).css("background","#56B3E0").attr("value", "YES, IT IS ACCURATE");
			$("#checkForm").addClass("active");
		}
	});

	$("#contact-form").submit(function(e) {
		if ($("#email").val() !== $("#emailConf").val()) {
			e.preventDefault();
			$("#emailConfError").text("The emails provided do not match.");
			$("html body").scrollTop($("#email").offset().top - 30);
		}
	});

	if (($("input[name=chkIndorTrust]:checked").val() == "Individual")) {
		$("#trustNameRow").hide();
	} else if (($("input[name=chkIndorTrust]:checked").val() == "Trust")) {
		$(".maskss").mask("99-9999999");
	}

	$("input[name=chkIndorTrust]").change(function() {
		if (this.value === "Individual") {
			$("#trustNameRow").slideUp();
			$(".maskss").mask("999-99-9999");
		} else {
			$("#trustNameRow").slideDown();
			$(".maskss").mask("99-9999999");
		}
	});

});
