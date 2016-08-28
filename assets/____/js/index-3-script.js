
$(function() {

    'use strict';

/*--------------------------------------------------------------
    Rev slider
--------------------------------------------------------------*/
    jQuery("#main-slider").revolution({
        sliderType:"standard",
        sliderLayout:"fullwidth",
        delay:9000,
        navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                },

                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: ''
                }
            },  
        disableProgressBar: "on",       
        responsiveLevels:[4096,1199,991,767,700,600,500,470, 320],
        gridwidth:[1170,970,750,650,500,450,430,320,280],
        gridheight:[720,650,650,650, 650,550,550,550,500]      
    });     



/*--------------------------------------------------------------
    Event-slider
--------------------------------------------------------------*/
    $(".event-slider").owlCarousel({
        items:4,
        loop:false,
        center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 2,
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
    Why choose us section left coloumn height setting
--------------------------------------------------------------*/
    function calculateHeight(mainCol, whichCol) {
        var mainColHeight = mainCol.innerHeight();
        whichCol.css({
            'height': mainColHeight + 'px'
        })
    }

    calculateHeight($('.why-choose-us .right-col'), $('.why-choose-us .left-col'));
    $(window).resize(function() {
        calculateHeight($('.why-choose-us .right-col'), $('.why-choose-us .left-col'))
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