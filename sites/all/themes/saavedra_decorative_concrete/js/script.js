$(document).ready(function(){
	var a = $('#logo').height();
	$('.headerLine').css({
		height:a+5,
	});
	$('.headerLine2').css({
		height:a+5,
	});
	$('.headerLine3').css({
		height:a+5,
	});
	var b = $('#sidebar-first').height();
	$('.two-sidebars #content').css({
		height:b,
	});
	$('.one-sidebar #content').css({
		height:b,
	});
});