<!DOCTYPE html>

<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Nysc Diary|login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <?php echo $css; ?> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/forms/css/login_styles.css'; ?>"/>
<!--[if lt IE 7 ]> <html lang="en" class="innerpage no-js ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="innerpage no-js ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="innerpage no-js ie8"> <![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/forms/css/trouble.css'; ?>" />
<!--<![endif]--> 
<style type="text/css">body{background:url("<?php echo base_url().'assets/images/welcome/nysc-login.jpg'?>");</style>

</head>
<body>
<div class="form">
<div class="header"><h2>Sign In</h2></div>
  <div class="login">
   <h4> <?php echo isset($message) ? $message : ""; ?></h4>
   <?php echo $this->session->flashdata('success') ? getAlertMessage($this->session->flashdata('success'), 'info') : '' ?>
   <?php echo $this->session->flashdata('error') ? getAlertMessage($this->session->flashdata('error'), 'danger') : '' ?>
						
  <form action="<?= site_url('user/index'); ?>" method="POST">
	<ul class="boxes">
	<li>
	<input type="text" required class="text" placeholder="User Name Or Email" name="username">
	</li>
	<li>
	<input type="password" required class="text" placeholder="User Password" name="password">
	</li>
	<li>
	<input type="submit" value="LOGIN" class="btn" name="submit">
	</li>
	<li><div class="span"><span class="ch"><input type="checkbox" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><a href="#" class="link">Forgot Password?</a></span></div></li>
	</ul>
  </form>
  
	  <div class="social">
		<a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
		<a href="#"><div class="tw"><i class="fa fa-twitter"></i> &nbsp;  Login With Twitter</div></a>
	 </div>
	 
	</div><br/>
	<div class="sign">
	<div class="up"><a href="<?php echo site_url('register'); ?>">Sign Up</a></div>
	<div class="need">Need new account ?</div>
	</div>
	</div>
</body>



</html>