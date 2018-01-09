 jQuery(document).ready(function($){
 		"use strict";
        // $(".flexy-menu").flexymenu({
         //	indicator: true,
         //	scrollable: true,
         //});//Flexy Menu
 
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