
$(function() {

    'use strict';


/*--------------------------------------------------------------
    Who we are section right coloumn height setting
--------------------------------------------------------------*/
    function calculateHeight(mainCol, whichCol) {
        var mainColHeight = mainCol.innerHeight();
        whichCol.css({
            'height': mainColHeight + 'px'
        })
    }

    calculateHeight($('#about-us .who-we-are .left-col'), $('#about-us .who-we-are .right-col'));
    $(window).resize(function() {
        calculateHeight($('#about-us .who-we-are .left-col'), $('#about-us .who-we-are .right-col'));
    });



/*--------------------------------------------------------------
    Testimonial-slider
--------------------------------------------------------------*/
    $(".testimonial-slider").owlCarousel({
        loop:true,
        stagePadding: 5,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            650:{
                items:2
            },
            767:{
                items:2
            },
            991:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });



/*--------------------------------------------------------------
   Statistics section counting
--------------------------------------------------------------*/
    $('.statistics').each(function () {
        var $this = $(this);
        var myVal = $(this).data("value");

        $this.appear(function() {
            $('#speakers').animateNumber({ number: 244 }, 2000);
            $('#successfull-events').animateNumber({ number: 54344 }, 2000);
            $('#event-planers').animateNumber({ number: 183 }, 2000);
            $('#registrated-members').animateNumber({ number: 245740 }, 2000);
        });
    });
    



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
    
}); // end of document.ready