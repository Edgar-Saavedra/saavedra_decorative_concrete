$(document).ready(function() {
	
	function fillHeight(){//make the footer fill the rest of the height of the viewport
		var topHeight = $('#container').height(); //topHeight equals the height of #continer
		if ( topHeight > 0 ){ //if topHeight is greater than 0
			$('footer').css({ 
				'top' : topHeight + 'px', // add the height of #container to the top of the footer
			});
		}
		else{
			$('footer').css({
				'position': 'relative',//else just place it below the container
			});
		}
	}
	
	fillHeight();//call and end fillHeight

 }); // end ready