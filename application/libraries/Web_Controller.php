<?php

class Web_Controller extends CI_Controller{

    function __construct() {
		
    parent::__construct();
		
	// All JavaScript files

  
    $this->data['script'] = '<script src="'.getasset('js/jquery-1.11.3.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/bootstrap.min.js') . '"> </script>';

    // Revolution Slider -->
    $this->data['script'] .= '<script src="'.getasset('rev-slider/js/jquery.themepunch.tools.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('rev-slider/js/jquery.themepunch.revolution.min.js') . '"> </script>';

    // Plugins for this template -->
    $this->data['script'] .= '<script src="'.getasset('js/jquery.lwtCountdown-1.0.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/classie.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/jquery.appear.js') . '"> </script>';
    $this->data['script'].= '<script src="'.getasset('js/owl.carousel.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/nivo-lightbox.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/jquery.animateNumber.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('js/wow.min.js') . '"> </script>';

   //Custom script for this template -->
    $this->data['script'] .= '<script src="'.getasset('js/index-script.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('js/common-script.js') . '"> </script>';

  // Revolution slider extentions lode only local file system -->
    $this->data['script'] .= '<script src="'.getasset('rev-slider/js/extensions/revolution.extension.actions.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.getasset('rev-slider/js/extensions/revolution.extension.carousel.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.kenburn.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.layeranimation.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.migration.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.navigation.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.parallax.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.slideanims.min.js') . '"> </script>';
    $this->data['script'] .= '<script src="'.  getasset('rev-slider/js/extensions/revolution.extension.video.min.js') . '"> </script>';

    // popup js -->
    $this->data['script'] .= '<script src="'.  getasset('js/popup.js') . '"> </script>';

    //Tour js -->
    $this->data['script'] .= '<script src="'.  getasset('js/mootools-impromptu.js') . '"> </script>';

	
		$this->data['style'] = '<link href="' .  getasset("css/bootstrap.min.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("stylesheets/unsemantic-grid-responsive-rtl.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("flat-icon/flaticon.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("font-awesome/css/font-awesome.min.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("rev-slider/css/settings.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("rev-slider/css/layers.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("rev-slider/css/navigation.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/owl.carousel.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/nivo-lightbox.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/nivo-default.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/animate.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/custom-animation.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/style.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/responsive.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/custom-popup.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/popup.css") . '" rel="stylesheet" type="text/css">';
        $this->data['style'] .= '<link href="' . getasset("css/tour-style.css") . '" rel="stylesheet" type="text/css">';

    }


}
