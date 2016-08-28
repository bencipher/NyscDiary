
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
        // gridwidth:1170,
        // gridheight:720       
    });     




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
    $('.gallery .thumb-gallery a').nivoLightbox({
         effect: 'fall'
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