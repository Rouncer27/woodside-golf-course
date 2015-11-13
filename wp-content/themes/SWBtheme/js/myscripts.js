 jQuery(document).ready(function($){
 		"use strict";
        // $(".flexy-menu").flexymenu({
         //	indicator: true,
         //	scrollable: true,
         //});//Flexy Menu

         /* $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1200);
		        return false;
		      }
		    }
		  });// End of the scroll down function*/


 		$('section.oursection div.reveal').hide(); 
 		$('section.oursection a.readmore').click(function() { 
 			$(this).prev().slideToggle('fast');
 			if ($(this).text() === 'Read More') {
		         $(this).text('Read Less');
		    }
		    else {
		        $(this).text('Read More');
		    }
 		}); // End of the read more show less section on the about page.
 
    
    	$('#grid').mediaBoxes({

    		horizontalSpaceBetweenBoxes : 5,
    		columns : 4,
    		overlayEffect: 'direction-aware-fade',


    	}); //End of the media boxes

});