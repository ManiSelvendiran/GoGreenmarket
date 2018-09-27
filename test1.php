<?php
session_start();
if(isset($_POST["pay"])){	 
if(isset($_POST["name"]))
        $name=$_POST["name"];		
if(isset($_POST["mobile"])) 
	$mobile=$_POST["mobile"];		
if(isset($_POST["houseno"])) 
	$houseno=$_POST["houseno"];		
if(isset($_POST["apartment"])) 
	$apartment=$_POST["apartment"];	
	if(isset($_POST["street"])) 
	$street=$_POST["street"];
if(isset($_POST["landmark"])) 
	$landmark=$_POST["landmark"];	
if(isset($_POST["city"])) 
	$city=$_POST["city"];	
if(isset($_POST["pincode"])) 
	$pincode=$_POST["pincode"];
if(isset($_POST["paymentway"])) 
	$paymentway=$_POST["paymentway"];
	echo $_SESSION['uname'];
	echo $name;
	echo $mobile;
	echo $houseno;
	echo $apartment;
	echo $street;
	echo $landmark;
	echo $city;
	echo $pincode;
	echo $_SESSION['tamount'];
	echo $paymentway;
	
	$amount=$_SESSION['tamount'];
	$uname=$_SESSION['uname'];
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');


		
	 
			
		if($paymentway=="bank account"){
		//$sql="insert into orderdetails values ('$uname','$name',$mobile,$houseno, '$apartment','$street','$landmark','$city',$pincode,$amount,'$paymentway')";
		
		$sql="INSERT INTO `orderdetail` (`accname`, `receiver`, `mobile`, `houseno`,`apartment` `street`, `landmark`, `city`, `pincode`, `totalamount`, `paymentway`) VALUES ('".$uname."', '".$name."', ".$mobile.", ".$houseno.",'".$apartment."','".$street."','".$landmark."' , '".$city."',".$pincode.",".$amount.", '".$paymentway."');";
			
		$check=mysqli_query($conn,$sql);
	if($check){
			 echo '<script>alert("fill the following details")</script>';  
                     echo '<script>window.location="test.html"</script>';  
			}
			else{
				echo "not saved";
			}
			}
		
		
	elseif( $paymentway=="cash on delivary"){
				
	//$sql="insert into orderdetails values ('$_SESSION['uname']','$name',$mobile,$houseno, '$apartment','$street',$aadhars,'$landmark','$city',$pincode,'$paymentway','not paid')";
	$notpaid="not paid";
	$sql="INSERT INTO `orderdetail` (`accname`, `receiver`, `mobile`, `houseno`,`apartment` `street`, `landmark`, `city`, `pincode`, `totalamount`, `paymentway`) VALUES ('".$uname."', '".$name."', ".$mobile.", ".$houseno.",'".$apartment."','".$street."','".$landmark."' , '".$city."',".$pincode.",".$amount.", '".$paymentway."');";
			mysqli_query($conn,$sql);
				
				
			 echo '<script>alert("Your product will be reach your doorstep with in 12hours..thank you for visit ..please come again")</script>';  
                     echo '<script>window.location="index.php"</script>';  
			
			}
}
	



?>






























<!DOCTYPE html>
<html>
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
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <!--link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /-->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				 
				<a  href="farmerregister.html" ><span class="icon-edit"></span> Farmer Register </a> 
				<a  href="farmerlogin.html" class="active"> <span class="icon-lock"></span> Farmer Login</a> 
				<a href="checkout.php"><span class="icon-shopping-cart"></span> Checkout<span class="badge badge-warning"></span></a>				

				<a href="#"><span class="icon-envelope"></span> Contact us</a>
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
				

			<h4>   GoGreen Market<h4>
	

	</div>
	<div class="span4 alignR">
	<p> <strong> Support 24x7 :  9444922839 </strong><br><br></p>
	
	</div>
</div>
</header>
	


<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active">Payment</li>
			
			
		  </div>
		</div>
	  </div>
	</div>












<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>