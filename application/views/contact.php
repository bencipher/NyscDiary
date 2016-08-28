<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fivent.themexriver.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 19:11:22 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HTML Template for conference, meeting and event">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title>Nysc Diary|contact us</title>
   
    <?php echo $css; ?>
    <!-- For google map -->
    
    <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
</head>

<body id="contact">

    <!-- pre-loder -->
    <!-- <div class="pre-loder">
        <div class="circle"></div>
    </div> -->
    <!-- end of pre-loder -->


    <!-- header -->
    <?php echo $header; ?>
    <!-- end of header -->


    <!-- banar -->
    <section class="banar">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Contact us</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of banar -->


    <!-- google-map -->
    <section class="google-map section-padding">
        <h2 class="hidden">Google Map</h2>
        <div class="container">
            <div class="row">
                <div class="col map" id="map"></div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of google-map -->


    <!-- contact-form -->
    <section class="contact-form">
        <h2 class="hidden">Contact form</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form class="form-inline" action="email/send">
                        <div class="col col-lg-3 col-sm-6 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="enter your name">
                        </div>
                        <div class="col col-lg-3 col-sm-6 form-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" placeholder="enter your email">
                        </div>
                        <div class="col col-lg-3 col-sm-6 form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" placeholder="enter your phone number">
                        </div>
                        <div class="col col-lg-3 col-sm-6 form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="subject">
                        </div>
                        <div class="col col-xs-12 form-group">
                            <label for="message">Message</label>
                            <textarea id="message" placeholder="type in your message"></textarea>
                        </div>
                        <div class="submit-btn col col-xs-12">
                            <button type="submit" class="theme-btn">Send Message <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of contact form -->


<!-- footer -->
  <?php echo $footer; ?>


 <!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>

    <!-- Plugins for this template -->
    <script src="<?php echo base_url().'assets/js/jquery.lwtCountdown-1.0.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/classie.js'; ?>"></script>

    <!-- Custom script for this template -->
    <script src="<?php echo base_url().'assets/js/contact-script.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/common-script.js'; ?>"></script>
</body>

<!-- Mirrored from fivent.themexriver.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 19:11:23 GMT -->
</html>
