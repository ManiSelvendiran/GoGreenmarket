<?php   
 session_start();  
 $conn = mysqli_connect('localhost', 'root','','gogreenmarket');
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
 
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				
				<a href="order.php" class="active"><span class="icon-shopping-cart"></span> Order<span class="badge badge-warning"></span></a>				
				<!--a href="#"><span class="icon-envelope"></span> Contact us</a-->
				
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
		<li><a href="index.php">Home</a> <span class="divider"></span></li>
    </ul>
	<h3>DELIVERY DETAILS</h3>	
	<hr class="soft"/>
	<div class="well">
	<form action="order.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<h3>Personal Details</h3>		
			<div class="control-group">
			<label class="control-label" for="name">Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="name" placeholder="First Name"  title="give input correctly" value="<?php echo $_SESSION['uname']; ?>" required >
			</div>
		 </div>
			 
			
		 		
		
		 	
		 <div class="control-group">
			<label class="control-label" for="mobile">Mobile Number<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="mobile"  title="give input correctly" maxlength="10"/>
			</div>
		 </div>
		 
		 <h3>Address Details</h3>
		 
		 <div class="control-group">
			<label class="control-label" for="address">House No<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="houseno"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Apartment Name<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="apartment"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Street<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="street"/>
			</div>
		</div>
		 <div class="control-group">
			<label class="control-label" for="address">Landmark<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="landmark"/>
			</div>
		</div>
		
		 <div class="control-group">
			<label class="control-label" for="pincode">City<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="city" value="madurai" readonly />
			</div>
		</div>
		 
		 <div class="control-group">
			<label class="control-label" for="pincode">PinCode<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="pincode" />
			</div>
		</div>
		
		<div class="control-group">
		<label class="control-label" for="paymetway">Payment way<sup>*</sup></label>
		<div class="controls">
		 <input type="radio" name="paymentway" value="cash on delivery" checked> &nbsp;&nbsp;&nbsp;Cash On Delivary <br><br>
		 <!--input type="radio" name="paymentway" value="bank account"> &nbsp;&nbsp;&nbsp; Bank Account<br-->
		 </div>
		</div>
		
		<div class="control-group">
		<div class="controls">
		 <input type="submit" name="pay" value="Place Order" class="exclusive shopBtn">
		
		</div>
	</div>
		
		
	</form>
</div>




</div>
</div>

</div>	 
         <!--        <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="35%">Total</th>  
                                 
                          </tr>  
                          <?php   
                          //if(!empty($_SESSION["shopping_cart"]))  
                          //{  
                               //$total = 0;  
                               //foreach($_SESSION["shopping_cart"] as $keys => $values)  
                              // {  
                          ?>  
                          <tr>  
                               <td><strong><font color="green"><?php //echo $values["item_name"]; ?></strong></font></td>  
                               <td><?php //echo " ".$values["item_quantity"]."Kgs"; ?></td>  
                               <td>Rs <?php// echo $values["item_price"]; ?></td>  
                               <td>Rs <?php //echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                 
                          </tr>  
                          <?php  
                                    //$total = $total + ($values["item_quantity"] * $values["item_price"]);  
                              // }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Net Amount</td>  
                               <td align="left">Rs <?php //echo number_format($total, 2); ?></td>  
                                
                          </tr>  
						  <tr>  
                               <td colspan="3" align="right">Service charge</td>  
                               <td align="left">Rs <?php



								//if($total<500)
									//	$charge= number_format($total/10, 2); 
								//elseif($total>500 && $total<1000)
								//		$charge=number_format($total/15, 2);
							//	elseif($total>1000 && $total<2000)
									//	$charge=number_format($total/20, 2);
								//else
								//		$charge=number_format($total/30,2);
							//		echo $charge;
							  // ?></td>  
                                 
                          </tr>
						  <tr>  <form method="post" action="checkout.php">
							   <td colspan="1" align="left"><a href="order.php?action=delete"><span class="defaultBtn">Cancel Shopping</span></a></td>
								</form>
                               <td colspan="2" align="right">Total</td>  
							   
                               <td align="left"><font color="voilet"><strong>Rs <?php// $totalamount=$total+$charge; $_SESSION["tamount"]=$totalamount; echo number_format($totalamount, 2); ?></strong></font></td>  
                              
						 </tr>
                          <?php  
                         // }  
                          ?>  
                     </table>  
					 -->
					 
		

	  

<?php
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
            
             
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Your Cart Cleared")</script>';  
                     echo '<script>window.location="checkout.php"</script>';  
              
           }  
      }  
 }			
	?>
	</div>
	</div>
	</div>
</div>




</div>
</div>

</div>


<!--
login Section 
-->






<?php

if(isset($_POST["pay"]))
{
	
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
	$date=date("Y-m-d");
	
	
	
	

	
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');

	 $staus="not paid";
			
		if($paymentway=="bank account"){
		
		$sql="INSERT INTO `orderdetails` (`accname`,`receiver`,`mobile`,`item`,`houseno`,`apartment`,`street`,`landmark`,`city`,`pincode`,`totalamount`,`paymentway`,`paidstatus`) VALUES ('".$_SESSION['uname']."', '".$name."', ".$mobile.",'".$_SESSION['purchased']."', ".$houseno.",'".$apartment."','".$street."','".$landmark."' ,'".$city."',".$pincode.",".$_SESSION['tamount'].",'".$paymentway."','".$status."');";
			
		$check=mysqli_query($conn,$sql);
		if($check){
			 echo '<script>alert("fill the following details")</script>';  
                     echo '<script>window.location="payment.php"</script>';  
			}
			else{
				echo "not saved";
			}
			}
		
		
	if($paymentway=="cash on delivery")
	{
		
		
		foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
							   $query = "SELECT todaystock FROM productlist where name='".$values["item_name"]."'";
							   $temp=mysqli_fetch_array(mysqli_query($conn,$query));
							   
									$s=$temp[0];
								$a=$s-$values["item_quantity"];
								$sql1="UPDATE `productlist` SET todaystock=".$a." where name='".$values["item_name"]."' ";
							   mysqli_query($conn,$sql1);
							   }
		$sql="INSERT INTO `orderdetails` (`date`,`accname`,`receiver`,`mobile`,`item`,`houseno`,`apartment`,`street`,`landmark`,`city`,`pincode`,`totalamount`,`paymentway`,`paidstatus`) VALUES ('".$date."','".$_SESSION['uname']."', '".$name."', ".$mobile.",'".$_SESSION['purchased']."', ".$houseno.",'".$apartment."','".$street."','".$landmark."' ,'".$city."',".$pincode.",".$_SESSION['tamount'].",'".$paymentway."','not paid');";
			
		$check=mysqli_query($conn,$sql);
		if($check){
			
			
			
			
			 echo '<script>alert("your order will be reach your door step within 12 hours")</script>';  
                     echo '<script>window.location="index.php"</script>';  
			}
			else{
				echo "not saved";
			}
			
		//clear the cart	
			foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
            
             
                     unset($_SESSION["shopping_cart"][$keys]);  
                    
              
           }
			
			
			
			
	}
}
	



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
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
 
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script-->
  </body>
</html>