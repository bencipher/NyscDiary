<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nysc Diary|profile</title>

    <!-- styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/profiler.css'; ?>">
	<?php echo $css; ?> 
  
  </head>
  <body>
    <?php echo $header; ?>
<div class="container">  

<div class="row">
  <div class="col-lg-2">
    <section class="navbar">
    <!--   <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profile-nav" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
    		 <div id="profile-nav" class = "btn-group-vertical" id = "btn-links">
    		   <button type = "button" class = "btn btn-default navbar">Back Home</button>
    		   <button type = "button" class = "btn btn-default navbar"><span>37 </span>New Activities</button>  
    		   <button type = "button" class = "btn btn-default navbar">My profile</button>
    		   <button type = "button" class = "btn btn-default navbar">Account Settings</button>  
    		</div>
      </div> -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profile-navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
           <div id="profile-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   <li class="profile-links btn"><a href="http://localhost/nysc/">Home</a></li>
                   <li class="profile-links btn"><a href="#">Back home</a></li>
                   <li class="profile-links btn"><a href="#">My activities</a></li>
                   <li class="profile-links btn"><a href="#">New Experiences</a></li>
                   <li class="profile-links btn"><a href="#">Account Details</a></li>
                   <li class="profile-links btn"><a href="#">Change Password</a></li>  
                </ul>                            
            </div> <!-- end of navbar -->
      </section>
	</div> <!-- end menu div -->


<div class="col-lg-7 profile">
  <div class="row">
    <div>
      <div class="panel panel-default">
        <div class="panel-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#shareExperience" data-toggle="tab">Type Experience</a></li>
                      <li class=""><a href="#sharePicture" data-toggle="tab">Share Picture</a></li>
                    </ul>
          <div class="tabbable">
            <div class="tab-content">
               <span class="col-lg-2 text-center thumb-profile"><img src="<?php echo base_url().'assets/images/profile/thumb.png'; ?>" alt="Smiley face" height="auto" width="auto"><br class="clear"></span>
              <div class="tab-pane active" id="shareExperience">
                <div class="well well-sm"> 
                  <div class="col-lg-10">
                    <form class="static-profile-form" action="<?php echo site_url('home/uploadImage');?>" method="post"   enctype="multipart/form-data">
                       <!-- Uploading of Picture -->                     
                        <div class="input-group hidden-xs hidden-sm hidden-md hidden-lg">
                          <label class="input-group-btn">
                            <span class="btn btn-primary hidden-xs hidden-sm hidden-md hidden-lg">
                            Click here to upload pictures&hellip; <input type="file" class="upload form-control" name="userfile" accept="image/*" class="uploader" style="display: none; cursor:default;">
                            </span>
                          </label>
                          <input value= "" type="text" class="form-control" readonly>
                        </div>  
                        <!--     Posting of Experience -->
                       <div id="text_area_example" class="error">
                         <textarea class="form-control input-lg" id="postExperience" name="postExperience" placeholder="Type your experience of 140 characters" maxlength="140"></textarea>
                         <span class='status pull-right'>40 more text</span>
                       </div>
                       <br>
                       <input class="btn btn-primary pull-right" type="submit" value="Share Experience" name="upload">                           
                    </form>
                   </div>               
                </div>
              </div>
              <div class="tab-pane" id="sharePicture">
                <div class="well well-sm">
                  <div class="col-lg-10">
                    <form class="static-profile-form" action="<?php echo site_url('home/uploadImage');?>" method="post"   enctype="multipart/form-data">
                         <!-- Uploading of Picture -->                     
                          <div class="input-group">
                            <label class="input-group-btn">
                              <span class="btn btn-primary">
                              Click here to upload pictures&hellip; <input type="file" class="upload thumb-profile" title="Choose a file to upload" name="userfile" accept="image/*" multiple aria-label="Upload Photos" class="uploader" style="display: none;">
                              </span>
                            </label>
                            <input value= "" type="text" class="form-control" readonly>
                          </div>  
                          <!--     Posting of Experience -->
                         <textarea class="form-control input-lg" id="postCaption" name="postCaption" placeholder="Not avaiable for picture upload" readonly></textarea><br>
                         <input class="btn btn-primary pull-right" type="submit" value="Post Picture" name="upload">                           
                    </form>
                    </div>
                </div>
              </div>                   
            </div>
          </div> <!-- /tabbable -->
        </div>
      </div> 
    </div>
</div>
<div class="row">
  <div class="col-lg-2 text-center"><img src="<?php echo base_url().'assets/images/profile/thumb.png' ?>" alt="Smiley face" height="auto" width="auto"></div>
  <div class="col-lg-10 experience">
     <p>Now I would never diss my broda just to gain recognition, take a second to listen to who this record is dissing</p>
     <!-- rating widget start -->
     <?php echo $ratings ?> 
    <!-- widget ends -->
  </div>
  </div> 
     <?php   

        if($experienceData->num_rows() > 0)
        {

            //   foreach ($experienceData->result() as $row)
            //   {
                     
            //          if(!empty($row->shortText) )
            //          {
            //           echo '<div class="row">
            //               <div class="col-lg-2 text-center"><img src="'.base_url().'assets/images/profile/thumb.png" alt="Smiley face" height="auto" width="auto"></div>
            //               <div class="col-lg-10 experience">
            //                  <p>'.$row->shortText.' </p>
            //                  <!-- rating widget start -->
            //                  '.$ratings.' 
            //                 <!-- widget ends -->
            //               </div>
            //             </div> ';
            //            }
            //           if(!empty($row->pictureText))
            //           {
            //              $image  = array('src' =>'image/photos/'.$row->pictureText ,'width'=>'70', 'height'=>'70');
            //              $image_1 = img($image) ;
            //             echo '<div class="row">
            //                <div class="col-lg-2 text-center"><img src="'.base_url().'assets/images/profile/thumb.png" alt="Smiley face" height="auto" width="auto"></div>
            //                  <div class="col-lg-10">
            //                    '.$image_1.'
            //                    <!-- rating widget start -->
            //                    '.$ratings_2.'
            //                    <!-- widget ends -->
            //                 </div>
            //              </div>';
            //          }
            // }
    }
  ?>
</div>
     

    <div class="col-lg-3 about-profile">
      <div class="profile-picture text-center">      
         <img src="<?php echo base_url().'assets/images/profile/profile-picture.png'; ?>" alt="Smiley face" height="auto" width="auto">
         <h4 id = "corper_id">Name: Hillary McBrough</h4>
         <p>Am a gentle, easy going girl who loves to explore</p>
         <h4>NYSC SERVICE YEAR:</h4> <h2>2013</h2>
         <p>Batch</p>
         <h2>A</h2>
         <h4>State of Deployment</h4>
         <h2>Kebbi State</h2>
         <div class="">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-flask mgr-10 profile-icon"></i> SKILL</h3>
            <div class="skill-list">
              <div class="skill-name text-left"> Photoshop </div>
              <div class="progress  progress-sm">
                <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">90%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name text-left"> Illustrator </div>
              <div class="progress  progress-sm">
                <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-danger "> <span class="sr-only">20%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name text-left"> Communication </div>
              <div class="progress  progress-sm">
                <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">95% Complete</span> </div>
              </div>
            </div> 
            <div class="skill-list">
              <div class="skill-name text-left"> Writing </div>
              <div class="progress  progress-sm">
                <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">45% Complete</span> </div>
              </div>
            </div>                                 
          </div>
           <a class="btn pull-left site-links"> <i class="fa fa-pencil append-icon"></i>Edit password</a>
          <a class="btn vd_btn btn-xs vd_bg-yellow pull-right"> <i class="fa fa-pencil append-icon"></i> Edit Profile</a>
      </div>
    </div>
</div> <!-- end wrapper row -->
<!-- <footer class = "footer">
<br class = "clear">
</footer> -->
  </div>  <!-- end html container -->  
    <?php echo $footer; ?>
    <?php echo $js; ?>   
   </body>
</html>