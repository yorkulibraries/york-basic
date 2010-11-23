// Slider Styling
$(document).ready(function() {
	$('#slider_images ul li').hide();

	$('#slider_images ul li:first').show();

	$('#slider_navigation li:first').addClass('current').stop().css({ background: 'white', cursor: 'default' }).animate({ paddingLeft: "10px" }, 300);

	$('#slider_navigation ul li:last-child').css({ border: 'none'});


	var i = 1;
	var j = 1;
	
	$("#slider_images ul li").each(function() { 
		$(this).attr("id", "slider-image-" + j); 
		j++; 
	});
	
	$("#slider_navigation ul li").each(function() {
		var el = this;
		$(this).attr("id", "slider-thumb-" + i);
		$(this).attr("data-index", i);		
		
		$(this).click(function() {
			if($(el).attr('class') != 'current') {
		   		$('#slider_images ul li').fadeOut();				
				var index = $(el).attr("data-index");
		   		$('#slider-image-' + index).fadeIn();	
			}	
		});
		i++;
	});


	// Image animation

	$('#slider_images img').hover(function(){
	    $(this).stop().animate({ opacity: .9 }, 250);
	}, function(){
	    $(this).stop().animate({ opacity: 1 }, 350);
	});

	// Navigation animation

	$('#slider_navigation li').click(function(){

	   $(this).stop().css({ background: 'white', cursor: 'default' }).animate({ paddingLeft: "10px" }, 300);

	   if($(this).attr('class') != 'current') {
	    	$('.current').stop().css({ background: 'none', cursor: 'pointer' }).animate({ paddingLeft: "1px" }, 150);
	    	$('.current').removeClass('current');
		}

	  $(this).addClass('current');

	});

	$('#slider_navigation li').hover(function(){

	   	if($(this).attr('class') != 'current') {
	  		$(this).stop().animate({ paddingLeft: "10px" }, 300);
		}	

	}, function(){

	 	if($(this).attr('class') != 'current') {
	    	$(this).stop().animate({ paddingLeft: "1px" }, 150);
	 	}
	});

});