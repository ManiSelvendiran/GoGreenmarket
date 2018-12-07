
<?php
session_start();?>
<?php
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');
if($_SESSION['mobile']==''){
	include('index.php');
}

if ($conn) 
{		
	
	$x = mysqli_query($conn,"SELECT * FROM farmerdata where mobile=".$_SESSION['mobile']." && password='".$_SESSION['psw']."'");

	while($result = mysqli_fetch_array($x))
	{
		$_SESSION['name']=$result['name']; 
				
		$_SESSION['dob']=$result['dob'];
		$_SESSION['address']=$result['address'];
		$_SESSION['pincode']=$result['pincode'];
		$_SESSION['aadhar']=$result['aadhar'];
		$_SESSION['fieldid']=$result['fieldid'];
		$_SESSION['fieldsize']=$result['fieldsize'];
		$_SESSION['producttype']=$result['producttype'];
		$_SESSION['productname']=$result['productname'];
		
		?>
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
				
				
				
				<a href="myprofile.php" class="active"><span class="icon-user"></span> My Account</a> 
				<a  href="todayupload.html" ><span class="icon-circle-arrow-up"></span>Today Upload</a>
				<a  href="logout.php" > <span class="icon-off"></span> Logout</a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				
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



	
<div class="row">
<div id="sidebar" class="span3">

</div>

			  
	</div>
	<div class="span9">
    <ul class="breadcrumb">
		
		<li class="active">Farmer Profile</li>
    </ul>
	<h3> Profile</h3>	
	<hr class="soft"/>
	<div class="well">
	
	
		
		
		<?php 

		echo '<img align="right" height="150" width="150" src="data:image;base64,'.$result['image'].'">';
		?> 
		
		 <div class="control-group">
			<label class="control-label" for="name">Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>">
			</div>
		 </div>			
		
		 	
		 <div class="control-group">
			<label class="control-label" for="dob">Date of Birth <sup>*</sup></label>
			<div class="controls">
			  <input type="date" name="dob" value="<?php echo $_SESSION['dob']; ?>">
			</div>
		 </div>
		 
		 
		 <div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="address" value="<?php echo $_SESSION['address']; ?>">
			</div>
		</div>
		 
		 <div class="control-group">
			<label class="control-label" for="pincode">PinCode<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="pincode" value="<?php echo $_SESSION['pincode']; ?>"></textarea>
			</div>
		</div>
		 
		 
		 
		<div class="control-group">
			<label class="control-label" for="aadhar">Aadhar Number <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="aadhar" value="<?php echo $_SESSION['aadhar']; ?>">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="mobile">Mobile Number<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>">
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="fieldid">Field id<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="fieldid" value="<?php echo $_SESSION['fieldid']; ?>">
			</div>
		 </div>
		 
		 <div class="control-group">
			<label class="control-label" for="fieldsize">Field Size(in acres)<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="fieldsize" value="<?php echo $_SESSION['fieldsize']; ?>">
			</div>
		 </div>
		
		 <div class="control-group">
			<label class="control-label" for="producttype">Product Type<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="producttype" value="<?php echo $_SESSION['producttype']; ?>">
			</div>
		 </div>
		  <div class="control-group">
			<label class="control-label" for="productname">Product Name<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="productname" value="<?php echo $_SESSION['productname']; ?>">
			</div>
		
		
		
		
		  
			
	
	
</div>
			
			
			
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
</div-->
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
 
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
		
		
		
		<?php
	}
}
session_write_close();


?>
