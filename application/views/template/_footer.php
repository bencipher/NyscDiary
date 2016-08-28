   <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-info row">
                <div class="about col col-sm-6 col-md-6 col-lg-3">
                    <h3>Creators' Speech</h3>
                    <p>I conceived this idea about two years ago, December 2014 precisely, I am so glad that it is finally a reality and I want to implore everybody to share this platform with our peers, thanks.</p>
                </div>
                <div class="links col col-sm-6 col-md-6 col-lg-3">
                    <h3>Quicklinks</h3>
                    <ul class="pull-left">
                        <li><a href="<?php echo site_url('/home/about');?>">Our Company</a></li>
                        <li><a href="<?php echo site_url('/home/about');?>">Our Philosophy</a></li>
                        <li><a href="<?php echo site_url('/#stats');?>">Monthly Statistics</a></li>
                        <li><a href="#">Marketing Strategies</a></li>
                        <li><a href="<?php echo site_url('/home/offer');?>">Our Services</a></li>
                    </ul>
                    <ul class="pull-right">
                        <li><a href="<?php echo site_url('/home/FAQ');?>">FAQs</a></li>
                        <li><a href="#">Current work</a></li>
                        <li><a href="<?php echo site_url('/#stats');?>">Monthly Statistics</a></li>
                        <li><a href="<?php echo site_url('/home/gain');?>">Benefits</a></li>
                        <li><a href="<?php echo site_url('/home/status');?>">Project Status</a></li>
                    </ul>
                </div>
                <div class="twitter-feed col-sm-6 col col-md-6 col-lg-3">
                    <h3>Twitter Feed</h3>
                    <ul>
                        <li><a class="twitter-timeline" href="https://twitter.com/Femolak" data-widget-id="538244525945544704"  data-chrome="noheader">@Femolak</a></li>                       
                    </ul>
                </div>
                <div class="newsletter col col-sm-6 col-md-6 col-lg-3">
                    <h3>Subscirbe Newsletter</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="enter your email">
                        </div>
                        <button type="submit" class="btn btn-default theme-btn btn-with-icon">Subscribe Now <i class="fa fa-angle-right"></i></button>
                    </form>                
                </div>
            </div> <!-- end of footer-info -->

            <div class="copyright row">
                <div class="col">
                    <div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube-play"></i>
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="<?php echo base_url().'assets/images/logo.png'; ?>" alt>
                            </a>
                        </div>
                        <p>Copyright 2016 &copy; Nysc Diary | All Rights Reserved</p>
                    </div>
                </div>
            </div> <!-- end of copyright -->
        </div> <!-- end of container -->
    </footer>
    <!-- end of footer -->
	
	
  <?= $script; ?>
		
  <?= isset($page_script)? $page_style: ''; ?>
	
</html>