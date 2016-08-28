$(function() {
    
    'use strict';
/*--------------------------------------------------------------
   Gallery
--------------------------------------------------------------*/
    $(".our-gallery-slider").owlCarousel({
        items:4,
        loop:false,
        margin:10,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
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
                items:4
            }
        }
    });


    $('.our-gallery-slider a').nivoLightbox({
         effect: 'fall'
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
    progerss skill
--------------------------------------------------------------*/
    $('.why-choose-us-with-skill .skill').each(function () {
        var $this = $(this);
        var myVal = $(this).data("value");

        $this.appear(function() {
            function progress(percent, $element) {
            var myItem = $element.children('div');
            myItem.append('<span></sapn>');


                var progressBarWidth = percent * $element.width() / 100;
                $element.find('div').animate({ width: progressBarWidth }, 1000).find('span').html(percent + "% ");
            }
            progress(90, $('#smm'));
            progress(92, $('#seo'));
            progress(72, $('#web'));
            progress(84, $('#wordpress'));
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