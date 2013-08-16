// JavaScript Document

$(document).ready(function(e) {
	$("#images > div").hover(function () {
		$(this).children(".fading").fadeTo( 250, 1);
	}, function() {
		$(this).children(".fading").fadeTo( 250, 0.5);
	});
});