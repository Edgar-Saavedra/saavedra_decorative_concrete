jQuery(document).ready(function($) {
	/*
		============================== Helpers
	*/		
	function sameHeight (element) {
		var finalArray= [];
		jQuery(element).each(function() {
		  finalArray.push(jQuery(this).height());
		});
		var tallestEl = finalArray.sort(function(a, b) { return a - b })[finalArray.length-1];
		jQuery(element).css({
			'height': tallestEl+"px",
			'display' : 'inline-block'
		});
		
	}
	sameHeight('.front .recent .span4 .view-content .views-row .views-field-body .field-content p');
	sameHeight('.page-node-46 .views-row .views-field-body');
	jQuery(window).resize(function(){
		 sameHeight('.front .recent .span4 .view-content .views-row .views-field-body .field-content p');
	});
	/*
		============================== Home Page
	*/	
		var bgImages = [themePath+'/images/highlight-bg-1.png',themePath+'/images/highlight-bg-2.png'];

		jQuery(".front .row-highlighted").css('backgroundImage', "url("+bgImages[Math.floor(Math.random()*bgImages.length)]+")");
});
