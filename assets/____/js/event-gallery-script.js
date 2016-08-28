
$(function() {

	'use strict';

/*--------------------------------------------------------------
   Activate wow.js
--------------------------------------------------------------*/
    var wow = new WOW ({
        boxClass:     'wow',     
        animateClass: 'animated',
        offset:       0,         
        mobile:       false,      
        live:         true
    });

    $(window).on('load', function() {
        wow.init();
    });
    
}); //end of document.ready
