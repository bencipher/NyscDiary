$(function() {

	'use strict';

/*--------------------------------------------------------------
	jQuery ui select box
--------------------------------------------------------------*/
    $('#select-day').selectmenu();



/*--------------------------------------------------------------
	Fill all blank table data with gray color
--------------------------------------------------------------*/
    var allTd = $('.table td');

    for (var i = 0; i < allTd.length; i++) {
        if (allTd[i].children.length === 0) {
            allTd[i].style.backgroundColor = '#f1f1f1';
        }
    }



/*--------------------------------------------------------------
	Schedule slider
--------------------------------------------------------------*/
	$('.event-planner-slider').owlCarousel({
		items: 1,
		nav: true,
		navText: ["<i class='fa fa-angle-left'><i>","<i class='fa fa-angle-right'><i>"],
		navSpeed: 1000

	});


}); // end of document.ready