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
			
				<a  href="farmerregister.html"><span class="icon-edit"></span> Farmer Register </a> 
				<a  href="farmerlogin.html" > <span class="icon-lock"></span> Farmer Login</a> 
				<a href="checkout.php"><span class="icon-shopping-cart"></span> Checkout<span class="badge badge-warning"></span></a>				

				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="admin.php" class="active"><span class="icon-user"></span>Admin</a>
				
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
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
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Admin</li>
    </ul>
	<h3> Admin</h3>	
	<hr class="soft"/>
	<div class="well">
	
				<form action="adminwork.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
		<h3>Enter Details</h3>
		
	   <div class="control-group">
			<label class="control-label" for="uname">User Id<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="uname" placeholder="Enter Admin ID" required>
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="psw">Password<sup>*</sup></label>
			<div class="controls">
			  <input type="password" name="psw" placeholder="Enter Password" required>
			</div>
		 </div>
		
		 
		 
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submit" value="Log In" class="exclusive shopBtn">
		</div>
	</div>
	</form>
	
	<!--
Admin Navigation Bar Section 
-->
<?php


if(isset($_POST["submit"])){

if(isset($_POST["uname"])) 
	$uname=$_POST["uname"];
if(isset($_POST["psw"])) 
	$pass=$_POST["psw"];
				
				
				if($uname="admin" && $pass=="super"){ 
				?>
				
					<div class="topNav">
						<div class="container">
							<div class="alignL">
				
				
				
				
				
			
				
				
				
				</div>
				</div>
				</div>
				<?php
				}
}
				?>
	
	<!--
Admin Navigation Bar close Section 
-->


</div>
</div>

</div>
</div>
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
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
 
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script-->
  </body>
</html>