$(document).ready(function(){
	
	function headerHeight(){
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
	}
	headerHeight();

	function mainContentHeight(){
		var b = $('#sidebar-first').height();
		var ownHeight1 =$('.one-sidebar #content .section').height();
		var ownHeight2 =$('.two-sidebars #content').height();
		
		if (ownHeight1 > b) {
			$('.one-sidebar #content .section').css({
				height: ownHeight1+'px',
			});
		}else{
			$('.one-sidebar #content .section').css({
				height: b+'px',
			});
		};
		if (ownHeight2 > b) {
			$('.two-sidebars #content').css({
				height: ownHeight1+'px',
			});
		}else{
			$('.two-sidebars #content').css({
				height: b+'px',
			});
		};
	}
	mainContentHeight();
	
	function showChildren(){
		var a = document.getElementsByClassName('menuparent')[0].childNodes[0];
		var b = document.getElementsByClassName('menu-path-projects-business')[0].childNodes[0];
		var c = document.getElementsByClassName('menu-path-projects-residential')[0].childNodes[0];
		if(a.className == 'active'){
			$('.menuparent ul, .menu-path-projects-business').css({
				'display':'block',
				'visibility':'visible',
			});	
		}
		if(b.className == 'active'){
			$('.menuparent ul, .menu-path-projects-business').css({
				'display':'block',
				'visibility':'visible',
			});	
		}
		if(c.className == 'active'){
			$('.menuparent ul, .menu-path-projects-business').css({
				'display':'block',
				'visibility':'visible',
			});	
		}
	}
	showChildren();
	function overLay(){
		$('.views-field-field-project-gallery img, .field-name-field-news-entry-images img').each(function() {  
     	$(this).wrap('<div class="tint"></div>')});
	}
	overLay()
	
	$('#ano').html(new Date().getFullYear()+"")

});