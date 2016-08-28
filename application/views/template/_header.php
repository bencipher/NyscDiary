<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from fivent.themexriver.com/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 19:10:51 GMT -->
   <head>
   
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="HTML Template for conference, meeting and event">
		<meta name="keyword" content="your keyword goes to here">
		<meta name="author" content="themexriver">
		
		<?= $style; ?>
		
		<?= isset($page_style)? $page_style: ''; ?>
		
		<!-- Page Title -->
		<title>Nysc Diary|about us</title>

	<!-- Favicon -->
		<link rel="icon" href="<?= base_url('assets/images/favicon.png'); ?>">

		<style type="text/css">
			a.site-links
				{
					color: #FF464F !important;
					font-weight: 300;
				}
			a.site-links:hover
				{
					color: #eee !important;
					text-decoration: underline !important;
				}
			.well 
				  {
					min-height: 20px;
					padding: 19px;
					margin-bottom: 20px;
					background-color: #fff; 
					border: none;
				  }
			.thumb-profile
				  {
					padding-top: 5%;
				  }
			   
			   
				 /*@media screen and (min-width: 0px) and (max-width: 390px)
				{
				
				}*/

				 @media screen and (min-width: 391px) and (max-width: 768px)
				{
					#navbar .dropdown:hover .dropdown-menu 
						{
							display: block;
							color: green;
						}
				}

			  /*  @media only screen 
					  and (min-device-width: 320px) 
					  and (max-device-width: 480px)
					  and (-webkit-min-device-pixel-ratio: 2)
					  and (orientation: landscape) 
					  {

							.container,html
						   {
							background-color: black;
							font-size: 10px;
						   }

						   .status 
						  {
							bottom: 40%;
							right: 6%;
						  }
					}*/
		</style>
		<!-- header -->
		
		</head>

	<body>

    <!-- pre-loder -->
    <div class="pre-loder">
        <div class="circle"></div>
    </div>
    <!-- end of pre-loder -->

        <header>
            <div class="topbar row">
                <div class="container">
                    <div class="col col-sm-2 col-md-2 col-lg-3">
                        <div class="logo">
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url().'assets/images/logos.png'; ?>" alt></a>
                        </div>
                    </div><!-- end of logo -->

                    <div class="next-event col col-sm-6 col-md-6 col-lg-5">
                        <p>Next event starts in</p>
                        <div id="clock">
                            <div class="col">
                                <div class='dash days_dash' data-vp-add-class="visible bounceIn" data-vp-offset="0">
                                    <div class="wrapper-digit">
                                        <div class='digit'></div>
                                        <div class='digit'></div>
                                        <div class="dot"><span>:</span></div>
                                        <p class='note dash_title'>Days</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class='dash hours_dash' data-vp-add-class="visible bounceIn" data-vp-offset="0">
                                    <div class="wrapper-digit">
                                        <div class='digit'></div>
                                        <div class='digit'></div>
                                        <div class="dot"><span>:</span></div>
                                        <p class='note dash_title'>Hours</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class='dash minutes_dash' data-vp-add-class="visible bounceIn" data-vp-offset="0">
                                    <div class="wrapper-digit">
                                        <div class=' digit'></div>
                                        <div class=' digit'></div>
                                        <p class='note dash_title'>Minutes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div> <!-- end of clock -->
                    </div> <!-- end of count down -->

                    <div class="login-register col col-sm-4 col-md-4 col-lg-4">
                        <a href="<?php echo site_url('user'); ?>" class="theme-btn">Login <i class="fa fa-angle-right"></i></a>
                        <a href="<?php echo site_url('register'); ?>" class="theme-btn">Register <i class="fa fa-angle-right"></i></a>
                    </div> <!-- end of login-register -->
                   <div class="col col-sm-4 col-md-4 col-lg-4 pull-right text-right">
                      <div class="btn-toolbar-* pull-right" role="toolbar">
                        <div class="btn-group">                    
                            <span>Welcome <?php //echo $_SESSION['upagename']; ?>, view <a href="<?php echo site_url('profile'); ?>" class = "site-links">Your profile <i class=""></i></a> or <a href="<?php echo site_url('user/logoutMethod'); ?>" class = "site-links"><strong>Logout</strong></a></span>
                        </div> <!-- end of login-register -->
                        </div>
                    </div>
                </div>
            </div> <!-- end of top-bar -->

            <div class="navigation row">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                       <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                               <li><a href="<?php echo site_url('about'); ?>">About Us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('services'); ?>">what we offer</a></li>
                                        <li><a href="<?php echo site_url('services/gain'); ?>">what you gain</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo site_url('blog'); ?>">Blog and Adverts</span></a></li>
                                <li class="dropdown">
                                <a href="<?php echo site_url('experience'); ?>">Experience <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('experience'); ?>">Experience</a></li>
                                        <li><a href="<?php echo site_url('gallery'); ?>">Photo Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="<?php echo site_url('/contact'); ?>" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('contact'); ?>">Join our team</a></li>
                                        <li><a href="<?php echo site_url('contact'); ?>">Become our Event Correspondent</a></li>
                                        <li><a href="<?php echo site_url('contact'); ?>">Give us a review</a></li>
                                        <li><a href="<?php echo site_url('contact'); ?>">Send us a mail</a></li>
                                    </ul>
                                </li>   
                            </ul>

                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                <a href="<?php echo site_url('addNewPost'); ?>"><strong>Create a blog</strong></a>
                                <input type="text" class="form-control" placeholder="Search for someone">
                                </div>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- end of navbar -->

                    </div> <!-- end of container -->
                </nav> <!-- end of nav -->
            </div> <!-- end of navigation -->
        </header>

        <!-- end of header -->
