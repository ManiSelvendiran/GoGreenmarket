<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GoGreen Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    
    <link href="style.css" rel="stylesheet"/>
 
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				 
				<a  href="farmerregister.html" ><span class="icon-edit"></span> Farmer Register </a> 
				<a  href="farmerlogin.html" > <span class="icon-lock"></span> Farmer Login</a> 
				<a href="checkout.php"><span class="icon-shopping-cart"></span> Checkout<span class="badge badge-warning"></span></a>				

				<a href="contact.php" class="active"><span class="icon-envelope"></span> Contact us</a>
				<a href="admin.php"><span class="icon-user"></span>Admin</a>

				
			</div>
		</div>
	</div>
</div>

<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">

	<a class="logo" href="index.php"><span></span> 
		<img align=top; src="assets/img/logo.png" height=150px; width=150px; alt="GoGreen Market"> 
	</a>
	
	</div>
	<div class="span4">
				<br>
				<br>
				<br>

			<h3>   GoGreen Market<h3>
	

	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support 24x7 :  9444922839 </strong><br><br></p>
	
	</div>
</div>
</header>
<!--
Navigation Bar Section 
-->
	
	
<div class="row">
<div id="sidebar" class="span3">

</div>

			  
	</div>
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Contact</li>
    </ul>
	<h3> Contact</h3>	
	<hr class="soften">
	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<!--iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps/place/Mattuthavani+Integrated+Bus+Terminus/@9.9441093,78.1539058,17z/data=!3m1!4b1!4m5!3m4!1s0x3b00c5ccd3ad4a7d:0xb0edd8e712fadaa3!8m2!3d9.9441093!4d78.1560945https://www.google.co.in/maps/place/Mattuthavani+Integrated+Bus+Terminus/@9.9441093,78.1539058,17z/data=!3m1!4b1!4m5!3m4!1s0x3b00c5ccd3ad4a7d:0xb0edd8e712fadaa3!8m2!3d9.9441093!4d78.1560945"></iframe-->

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
			3/60 Naachiyappan St.<br/>
			Sethupathi School Opposite,<br/>
			Madurai 625001<br/><br/>
			 
			gogreen@market.com<br/>
			﻿Tel 0452-263987<br/>
			<br/>
			web:www.gogreenmarket.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Email Us</h4>
		<form action="contact.php" method="POST" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" name="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" name="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name="message" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" name="send" type="submit">Send email</button>

        </fieldset>
      </form>
		</div>
	</div>

	
</div>
<br><br><br><br><br>






<?php
if(isset($_POST['send']))
{
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'manivannan.selvendiran@gmail.com';//replace with your email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain; charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From:'. $name . "\r\n";
$headers .= 'Cc:'. $to . "\r\n";

/*
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();
*/
mail($to, $subject, $message, $headers);
}
die;
?>
<!--div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2018<br>manivannan own businees</span>
</div>
</div-->

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
 
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>