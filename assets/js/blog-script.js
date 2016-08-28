$(function() {

	'use strict';
	
/*--------------------------------------------------------------
	Blog slider
--------------------------------------------------------------*/
    $(".blog-slider").owlCarousel({
        items:1,
        loop:true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        navSpeed: 500
    });

}); //end of document.ready