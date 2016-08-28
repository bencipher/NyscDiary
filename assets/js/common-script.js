
$(function() {

    'use strict';

/*--------------------------------------------------------------
   Preloder
--------------------------------------------------------------*/
$(window).load(function() {
    $(".pre-loder").delay(100).fadeOut('slow');
})



/*--------------------------------------------------------------
   Add class to the header when scrolling
--------------------------------------------------------------*/
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 500,
            header = document.querySelector("header .navbar");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}

window.onload = init();



/*--------------------------------------------------------------
    Next event clock
--------------------------------------------------------------*/
	$('#clock').countDown({  
        targetDate: {
            'day'   : 1,
            'month' : 7,
            'year'  : 2016,
            'hour'  : 0,
            'min'   : 0,
            'sec'   : 0
        },
        omitWeeks: true
    });



/*--------------------------------------------------------------
    Back to top
--------------------------------------------------------------*/
    $('body').prepend('<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>');
    var amountScrolled = 300;

    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });
    
    $('a.back-to-top').click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });    

}); // end of document.ready