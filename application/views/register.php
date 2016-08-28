
<!DOCTYPE html>
<html>
<!-- Mirrored from p.w3layouts.com/demos/signup_form/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2016 16:03:42 GMT -->
<head>
<title>Nysc Diary|create account</title>
<meta charset="utf-8">

<link href="<?php echo base_url().'assets/forms/css/style.css'; ?>" rel='stylesheet' type='text/css' />
<style type="text/css">background:url("<?php echo base_url().'assets/images/welcome/nysc-login.jpg'?>") #294072;


.modal-box {
  display: none;
  position: absolute;
  z-index: 1000;
  width: 98%;
  background: white;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
</style>
<!--//webfonts-->
</head>
<body>


  



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
		<form action="<?php echo site_url('/registerNewMember');?>" method="post" autocomplete = "on">
		   <div class="lable">
		        <div class="col_1_of_2 span_1_of_2">	
		        	<input type="text" class="text" id="firstName" name="firstName" placeholder="First Name" id="active" required></div>
                <div class="col_1_of_2 span_1_of_2">
                	<input type="text" class="text" id="lastName" name="lastName" placeholder="Last Name" required></div>
                <div class="clear"> </div>
		   </div>

		    <div class="lable">
		        <div class="col_1_of_2 span_1_of_2"><span class="ch"><input type="radio" name="gender" placeholder = "male" id="male" checked> <label for="male">Male</label> </span> </div>
                <div class="col_1_of_2 span_1_of_2"><span class="ch"><input type="radio" name="gender"placeholder = "female" id="female"> <label for="female">Female</label> </span> </div>
                <div class="clear"> </div>
		   </div>

		   <div class="lable-2">
			        <input type="email" id="email" class="text" name="email" placeholder="your@email.com " {this.placeholder = 'your@email.com ';}" required="">
			       <input type="tel" class="text" id="phone" name="phone" placeholder="phone number" required>
			       <input type="date" class="text" id="dob" name="dob" placeholder="date of birth " required>
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
              <select name="batch" id="batch">
                <option value="" selected disabled>Your posting batch</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>  
			       <input type="month" class="text" id="yearOfService" name="yearOfService" >
			      <br class = "clear"><h2>Now enter your login credentials for Nysc Diary</h2>
			        <input type="text" class="text" id="username" name="username" placeholder="username(use your call-up no, it won't appear on your profile)" required>
			         <input type="password" class="text" id="password" name="password" placeholder="Password" required>
		   </div>

		   <h3 class = "main_one">By creating an account, you agree to our <span class="term"><a href="#">Terms & Conditions</a></span></h3>
		   <div class="submit">
			  <input type="submit" id="btn_submit" name="btn_submit" value="Create account" >
		   </div>
		   <div class="clear"> </div>
		</form>

	
</body>




</html>