
<!DOCTYPE html>
<html>
<!-- Mirrored from p.w3layouts.com/demos/signup_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2016 16:03:42 GMT -->
<head>
<title>Nysc Diary|edit profile</title>
<meta charset="utf-8">
<link href="<?php echo base_url().'assets/forms/css/style.css'; ?>" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">background:url("<?php echo base_url().'assets/images/welcome/nysc-login.jpg'?>") #294072;</style>
<!--//webfonts-->
</head>
<body>

<script async type='text/javascript' src='../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>



<br class="clear">
<div class="main">
	<div class="social-icons">
		 <div class="col_1_of_f span_1_of_f"><a href="#">
		
		    <ul class='facebook'>
		    	<i class="fb"> </i>
		    	<li>Connect with Facebook</li>
		    	<div class='clear'> </div>
		    </ul>
		    </a>
		 </div>	
		 <div class="col_1_of_f span_1_of_f"><a href="#">
		    <ul class='twitter'>
		      <i class="tw"> </i>
		      <li>Connect with Twitter</li>
		      <div class='clear'> </div>
		    </ul>
		    </a>
		</div>
		<div class="clear"> </div>	
      </div>
	  
      <h2>Or Register Manually</h2>
		<form action="<?php echo site_url('home/insertRegister');?>" method="post">
		   <div class="lable">
		        <div class="col_1_of_2 span_1_of_2">	
		        	<input type="text" class="text" id="firstName" name="firstName" placeholder="First Name" id="active" required></div>
                <div class="col_1_of_2 span_1_of_2">
                	<input type="text" class="text" id="lastName" name="lastName" placeholder="Last Name" required></div>
                <div class="clear"> </div>
		   </div>
		    <div class="lable">
		        <div class="col_1_of_2 span_1_of_2"><span class="ch"><input type="radio" name="gender" placeholder = "male" id="gender" checked> <label for="male">Male</label> </span> </div>
                <div class="col_1_of_2 span_1_of_2"><span class="ch"><input type="radio" name="gender"placeholder = "female" id="gender"> <label for="female">Female</label> </span> </div>
                <div class="clear"> </div>
		   </div>
		   <div class="lable-2">
			        <input type="email" id="email" class="text" name="email" placeholder="your@email.com " {this.placeholder = 'your@email.com ';}" required="">
			       <input type="tel" class="text" id="phone" name="phone" placeholder="phone number" required>
			       <input type="datetime" class="text" id="dob" name="dob" placeholder="date of birth " required>
			       <br class = "clear"><h2>Your posting information</h2>
			       <select name="stateOfDeployment" class="text" id="stateOfDeployment" required> 
			       <option value="" selected disabled>Your State of deployment</option>
			       <?php  
                          foreach($state->result() as $row) 
                          {
                          	 echo '<option value="'.$row->id.'">'.$row->state.' </option>';
                          }
			       
			         ?>
			       </select>
			       <input type="text" class="text" id="batch" name="batch" placeholder="batch" required>
			       <input type="date" class="text" id="yearOfService" name="yearOfService" placeholder="year of service ">
			      <br class = "clear"><h2>Now enter your login credentials for Nysc Diary</h2>
			        <input type="text" class="text" id="username" name="username" placeholder="username(use your call-up no, it will not appear on your profile)" required>
			         <input type="password" class="text" id="password" name="password" placeholder="Password" required>
		   </div>
		   <h3 class = "main_one">By creating an account, you agree to our <span class="term"><a href="#">Terms & Conditions</a></span></h3>
		   <div class="submit">
			  <input type="submit" id="btn_submit" name="btn_submit" value="Create account" >
		   </div>
		   <div class="clear"> </div>
		</form>
		
		</div>
	
		 <!-----start-copyright---->
		 <div class="copy-right">
			<p> &copy; 2016 Nysc Diary. All rights reserved | If you already have an account, then <a href="<?php echo site_url('/home/login'); ?>">login</a></p>

		</div>
		 <br class="clear">


</body>




</html>