<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fivent.thblockquoteexriver.com/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 19:11:04 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HTML Tblockquoteplate for conference, meeting and event">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="thblockquoteexriver">

    <!-- Page Title -->
    <title>Nysc Diary|experiences</title>

   <?php echo $css; ?>
   <style type="text/css">
       .main-blog .blog-content .post .info {
    margin-bottom: 10px;
    margin-top: 20px;
}
.main-blog .blog-content .post p {
    color: #3a3a3a;
    line-height: 32px;
    margin-bottom: 10px;
}
div.stars 
  {
  width: 270px;
  display: inline-block;
  position:relative;
  float: right;
}
input.star
 { 
display: none; 
}
label.star 
{
  float: right;
  padding: 10px;
  font-size: 18px;
color: #FF464F;
  transition: all .2s;
}
#no-star{
   transition: none;
   color:#; 
}
input.star:checked ~ label.star:before 
{
  content: '\f005';
  color: #F62;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before 
{
  color: #fd2;
  text-shadow: 0 0 10px #952;
}
input.star-1:checked ~ label.star:before 
{ 
color: red; 
}
label.star:hover 
{ 
transform: rotate(-15deg) scale(1.3); 
}
label#no-star:hover 
{ 
transform:none; 
}
label.star:before
{
  content: '\f006';
  font-family: FontAwesome;
}
label#no-star:before
{
    content: none;
}
.read-more{
    position: relative;
    float: right;
}
blockquote {
    font-size: 14px;
    padding: 0 0 0 10px;
    margin: 0 0 0 5px;
}

#experience-thumb{
    padding-top: 18px;
}
   </style>


</head>

<body id="blog" class="main-blog">

    <!-- pre-loder -->
    <div class="pre-loder">
        <div class="circle"></div>
    </div>
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
                    <h2>Experiences</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Nysc</a></li>
                        <li class="active">Experience</li>
                    </ol>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of banar -->


    <!-- blog-content -->
    <section class="blog-content section-padding">
        <h2 class="hidden">Blog content</h2>
        <div class="container">
            <div class="row">
                <div class="blog-posts col col-md-9">
                    <div class="post">
                       <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                             <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-1" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-1"></label>
                                        <input class="star star-4" id="star-4-1" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-1"></label>
                                        <input class="star star-3" id="star-3-1" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-1"></label>
                                        <input class="star star-2" id="star-2-1" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-1"></label>
                                        <input class="star star-1" id="star-1-1" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-1"></label>
                                  </form>
                            </div>

                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                               <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                           </div>
                           <div class="row">
                                <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div>                           
                           <div class="col col-md-9">
                                <p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p>
                           </div>
                           </div>
                            <div class="row">   
                                <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">                                        
                                            <input class="star star-5" id="star-5-2" type="radio" name="star"/>
                                            <label class="star star-5" for="star-5-2"></label>
                                            <input class="star star-4" id="star-4-2" type="radio" name="star"/>
                                            <label class="star star-4" for="star-4-2"></label>
                                            <input class="star star-3" id="star-3-2" type="radio" name="star"/>
                                            <label class="star star-3" for="star-3-2"></label>
                                            <input class="star star-2" id="star-2-2" type="radio" name="star"/>
                                            <label class="star star-2" for="star-2-2"></label>
                                            <input class="star star-1" id="star-1-2" type="radio" name="star"/>
                                            <label class="star star-1" for="star-1-2"></label>
                                      </form>
                                </div>
                            </div>

                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                       <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-3" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-3"></label>
                                        <input class="star star-4" id="star-4-3" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-3"></label>
                                        <input class="star star-3" id="star-3-3" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-3"></label>
                                        <input class="star star-2" id="star-2-3" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-3"></label>
                                        <input class="star star-1" id="star-1-3" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-3"></label>
                                  </form>
                            </div>

                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-4" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-4"></label>
                                        <input class="star star-4" id="star-4-4" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-4"></label>
                                        <input class="star star-3" id="star-3-4" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-4"></label>
                                        <input class="star star-2" id="star-2-4" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-4"></label>
                                        <input class="star star-1" id="star-1-4" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-4"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                       <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-5" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-5"></label>
                                        <input class="star star-4" id="star-4-5" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-5"></label>
                                        <input class="star star-3" id="star-3-5" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-5"></label>
                                        <input class="star star-2" id="star-2-5" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-5"></label>
                                        <input class="star star-1" id="star-1-5" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-5"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-6" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-6"></label>
                                        <input class="star star-4" id="star-4-6" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-6"></label>
                                        <input class="star star-3" id="star-3-6" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-6"></label>
                                        <input class="star star-2" id="star-2-6" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-6"></label>
                                        <input class="star star-1" id="star-1-6" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-6"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                       <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-7" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-7"></label>
                                        <input class="star star-4" id="star-4-7" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-7"></label>
                                        <input class="star star-3" id="star-3-7" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-7"></label>
                                        <input class="star star-2" id="star-2-7" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-7"></label>
                                        <input class="star star-1" id="star-1-7" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-7"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-8" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-8"></label>
                                        <input class="star star-4" id="star-4-8" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-8"></label>
                                        <input class="star star-3" id="star-3-8" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-8"></label>
                                        <input class="star star-2" id="star-2-8" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-8"></label>
                                        <input class="star star-1" id="star-1-8" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-8"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                       <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                                                        <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-9" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-9"></label>
                                        <input class="star star-4" id="star-4-9" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-9"></label>
                                        <input class="star star-3" id="star-3-9" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-9"></label>
                                        <input class="star star-2" id="star-2-9" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-9"></label>
                                        <input class="star star-1" id="star-1-9" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-9"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info">
                                <span><i class="flaticon-calendar"></i> 14th Jan, 2016</span>
                                <span><i class="flaticon-people"></i> Jonathan Doe</span>
                            </div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2"  id = "experience-thumb">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt class = "img-responsive"></a>
                            </div><div class="col col-md-9"><p><blockquote>Lorblockquote ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed te</blockquote></p></div>
                            <div class="stars">
                                      <form action="#"><label class="star" id="no-star">(1000)</label></form>
                                      <form action="">
                                        <input class="star star-5" id="star-5-10" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5-10"></label>
                                        <input class="star star-4" id="star-4-10" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4-10"></label>
                                        <input class="star star-3" id="star-3-10" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3-10"></label>
                                        <input class="star star-2" id="star-2-10" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2-10"></label>
                                        <input class="star star-1" id="star-1-10" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1-10"></label>
                                  </form>
                            </div>
                            <div class="read-more">
                                <a href="#" class="more">rate this experience</a>&nbsp;&nbsp;&nbsp;<a href="#" class="more"><i class="flaticon-arrows"></i>view this user</a>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination">
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li class="active"><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div> <!-- end of blog-postes -->

                <div class="sidebar col col-md-3">
                    <div class="widget search-widget">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search for something">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div> 

                    <div class="widget populer-category">
                        <h3>Popular Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Internet Marketing  <span class="badge">05</span></a>
                            </li>
                            <li>
                                <a href="#">Search Engine Optimization  <span class="badge">08</span></a>
                            </li>
                            <li>
                                <a href="#">Webdevelopblockquoteent<span class="badge">04</span></a>
                            </li>
                            <li>
                                <a href="#">Creative Strategies<span class="badge">12</span></a>
                            </li>
                            <li>
                                <a href="#">Webhosting Services<span class="badge">07</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget latest-news">
                        <h3>Latest news</h3>
                        <div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-1.jpg'; ?>" alt></a>
                            </div>
                            <div class="text col col-md-9 col-sm-11 col-xs-10">
                                <h4>
                                    <a href="#">Stet clita ea et gubergren, kasd magna no rebum</a>
                                </h4>
                                <div class="date">
                                    <span>14th Jan, 2016 <i class="flaticon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-2.jpg'; ?>" alt></a>
                            </div>
                            <div class="text col col-md-9 col-sm-11 col-xs-10">
                                <h4>
                                    <a href="#">Lorblockquote ipsum dolor sit at, consetetur sadipscing </a>
                                </h4>
                                <div class="date">
                                    <span>14th Jan, 2016 <i class="flaticon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="pic col col-md-3 col-sm-1 col-xs-2">
                                <a href="#"><img src="<?php echo base_url().'assets/images/news-widget/img-3.jpg'; ?>" alt></a>
                            </div>
                            <div class="text col col-md-9 col-sm-11 col-xs-10">
                                <h4>
                                    <a href="#">Stet clita ea et gubergren, kasd magna no rebum</a>
                                </h4>
                                <div class="date">
                                    <span>14th Jan, 2016 <i class="flaticon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget flickr">
                        <h3>Flickr Gallery</h3>
                        <div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-1.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-2.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-3.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-4.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-5.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-6.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-7.jpg'; ?>" alt></a>
                            </div>
                            <div class="col col-xs-3">
                                <a href="#"><img src="<?php echo base_url().'assets/images/flickr/img-8.jpg'; ?>" alt></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of slidebar -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of blog-content -->


  <!-- footer -->
  <?php echo $footer; ?>

 <!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url().'assets/js/jquery-1.11.3.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>

    <!-- Plugins for this tblockquoteplate -->
    <script src="<?php echo base_url().'assets/js/jquery.lwtCountdown-1.0.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/classie.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'; ?>"></script>

    <!-- Custom script for this tblockquoteplate -->
    <script src="<?php echo base_url().'assets/js/blog-script.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/common-script.js'; ?>"></script>
   
</body>

<!-- Mirrored from fivent.thblockquoteexriver.com/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2016 19:11:21 GMT -->
</html>
