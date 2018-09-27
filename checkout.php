<?php   
 session_start();  
 
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
				
				
				<a href="index.php" > <span class="icon-home"></span> Home</a> 
				 
				<a  href="farmerregister.html" ><span class="icon-edit"></span> Farmer Register </a> 
				<a  href="farmerlogin.html" > <span class="icon-lock"></span> Farmer Login</a>
				<a href="checkout.php" class="active"><span class="icon-shopping-cart"></span> Checkout<span class="badge badge-warning"></span></a>				
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="admin.php"><span class="icon-user"></span>Admin</a>

				
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
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Home	</a></li>
			 
			</ul>
						
		  </div>
		</div>
	  </div>
	</div>
	
	
<div class="row">
<div id="sidebar" class="span3">

</div>

			  
	</div>
	<div class="span9">
 
	<h3> CHECK OUT YOUR PURCHASE</h3>	
	<hr class="soft"/>
	<div class="well">
	<div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><strong><font color="#f33940"><?php echo $values["item_name"]; ?></strong></font></td>  
                               <td><?php echo " ".$values["item_quantity"]."Kgs"; ?></td>  
                               <td>Rs <?php echo $values["item_price"]; ?></td>  
                               <td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="defaultBtn">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Net Amount</td>  
                               <td align="left">Rs <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
						  <tr>  
                               <td colspan="3" align="right">Service charge</td>  
                               <td align="left">Rs <?php



								if($total<500)
										$charge= number_format($total/10, 2); 
								elseif($total>500 && $total<1000)
										$charge=number_format($total/15, 2);
								elseif($total>1000 && $total<2000)
										$charge=number_format($total/20, 2);
								else
										$charge=number_format($total/30,2);
									echo $charge;
							   ?></td>  
                               <td></td>  
                          </tr>
						  <tr>  <td colspan="1" align="left"><a href="index.php"><span class="defaultBtn">Purchase More</span></a>
						  
						  
						  
							   <a href="order.php?action=delete"><span class="defaultBtn">Clear Cart</span></a>
							
						  
						  </td>
                               <td colspan="2" align="right">Total</td>  
							   
                               <td align="left"><font color="voilet"><strong>Rs <?php $totalamount=$total+$charge; $_SESSION["tamount"]=$totalamount; echo number_format($totalamount, 2); ?></strong></font></td>  
                               <form method="post" action="checkout.php">
							   <td colspan="1" align="left"><input type="submit" name="buynow" style="margin-top:5px;"  class="btn btn-success" value="Buy Now" /></span></td>
								</form>
						 </tr>
                          <?php  
                          }  
                          ?>  
						  
						  
						  <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;
								$item="";
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          
                            
                                $item.=$values["item_name"]." ";  
                              $item.=$values["item_quantity"]."Kg ";  
                                $item.=number_format($values["item_quantity"] * $values["item_price"], 2)."Rs";
								$_SESSION['purchased']=$item;	
								}
								$item="";
						  }
						   
						   
						  ?>

						  
						  
						  
						  
                     </table>  
					
                </div>  	
	
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
if(isset($_POST["buynow"])){ ?> 
		  
<div class="container">
	<div class="span9">
  <h3> Existing User Login</h3>	
	<hr class="soft"/>
	<div class="well">
	<form action="checkout.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
		<h3>Enter Details</h3>
		
	   <div class="control-group">
			<label class="control-label" for="email">Email Id<sup>*</sup></label>
			<div class="controls">
			  <input type="email" name="email" placeholder="Enter Email Id" required>
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
		 <input type="submit" name="signin" value="Sign In" class="exclusive shopBtn">
		 </form>
				</div>
	</div>	
	

	
	<div class="control-group">
	<div class="controls">
		 <form action="checkout.php" method="POST" enctype="multipart/form-data">
		 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="submit" name="signup" value="Sign Up" class="exclusive shopBtn">
		 </form>
		 </div>
	</div>
	

	
	
</div>
</div>
</div>

</div>
</div>
<?php } ?>


<!--
new user Section 
-->

<?php
if(isset($_POST["signup"])){ ?> 
		  
<div class="container">
	<div class="span9">
  <h3>Sign Up</h3>	
	<hr class="soft"/>
	<div class="well">
	<form action="checkout.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
		<h3>Enter Details</h3>
		
	   <div class="control-group">
			<label class="control-label" for="uname">Name<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="uname" placeholder="Enter Name" required>
			</div>
		 </div>
		
		
	   <div class="control-group">
			<label class="control-label" for="email">Email Id<sup>*</sup></label>
			<div class="controls">
			  <input type="email" name="email" placeholder="Enter Email Id" required>
			</div>
		 </div>
		 
		 
		 <div class="control-group">
			<label class="control-label" for="district">District<sup>*</sup></label>
			<div class="controls">
			  <input type="text" value="madurai" name="district" placeholder="Available only in Madurai city"></textarea>
			</div>
		</div>
		 
		 <div class="control-group">
			<label class="control-label" for="address">Address<sup>*</sup></label>
			<div class="controls">
			  <textarea name="address" placeholder="Address" required></textarea>
			</div>
		</div>
		
		 <div class="control-group">
			<label class="control-label" for="pincode">PinCode<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="pincode" placeholder="Pincode" required></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Number<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="mobile" placeholder="Mobile Number" required>
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="psw">Password<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="psw" placeholder="Password" required>
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="psw_repeat">repeat Password<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="psw_repeat" placeholder="repeat password" required>
			</div>
		 </div>
		
		 
		 
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="signup1" value="Sign Up" class="exclusive shopBtn">
		 </form>
				</div>
	</div>	
	

	
	

	
</div>
</div>
</div>

</div>
</div>
<?php } ?>



<!--
new user data adding in database
-->






<?php 

if(isset($_POST["uname"]))
        $uname=$_POST["uname"];


if(isset($_POST["email"])) 
	$email=$_POST["email"];
if(isset($_POST["district"])) 
	$district=$_POST["district"];
if(isset($_POST["address"])) 
	$address=$_POST["address"];
if(isset($_POST["pincode"])) 
	$pincode=$_POST["pincode"];
		
if(isset($_POST["mobile"])) 
	$mobile=$_POST["mobile"];		
if(isset($_POST["psw"])) 
	$psws=$_POST["psw"];	
if(isset($_POST["psw_repeat"])) 
	$psw_repeats=$_POST["psw_repeat"];

	
	


$flag=0;


		$conn = mysqli_connect('localhost', 'root','','gogreenmarket');

			
if(isset($_POST['signup1'])) 
{
	
	
//	$x = mysqli_query($conn,"select * from buyerdata");

	//while($result = mysqli_fetch_array($x))
	//{
	//if(($result['email']==$email)
	//{
			//  echo '<script>alert("existing email account please give different email")</script>';  
              //echo '<script>window.location="checkout.php"</script>';  
					// $flag=1;
		
		
	//}
	//}
	
	

	if($psws==$psw_repeats && $district=="madurai") 
		{
		 
			$sql="insert into buyerdata values ('$uname','$email','$district', '$address', $pincode, $mobile,'$psws')";
			mysqli_query($conn,$sql);
			 echo '<script>alert("signup Successfully")</script>';  
                     echo '<script>window.location="checkout.php"</script>';  
		
		}
		else{
			 echo '<script>alert("Use same password or dont change the District ")</script>';  
                     echo '<script>window.location="checkout.php"</script>';  
			
			
			}

}

		
		mysqli_close($conn);






?>


<!--
signup validation
-->


<?php

if(isset($_POST["uname"])) 
	$email=$_POST["uname"];
if(isset($_POST["psw"])) 
	$psw=$_POST["psw"];

$flag = 0;
try{
// Create connection
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');
if(isset($_POST["signin"])){ 
// Check connection
if ($conn) 
{		
	session_start();
   

	$x = mysqli_query($conn,"select * from buyerdata");

	while($result = mysqli_fetch_array($x))
	{
		if(($result['email'] == $email) && ($result['password'] == $psw))
		{
			 $_SESSION['email'] = "$email"; 
			$_SESSION['uname'] = $result['uname'];
			$flag = 1;
		
		}
	}
		if($flag==1){

	session_write_close();
	echo '<script>alert("Successfully Logged in")</script>'; 
		
                     echo '<script>window.location="order.php"</script>';
	//include('order.php');
	
		}
		else{
			
			 echo '<script>alert("Invalid Login")</script>';  
                     echo '<script>window.location="checkout.php"</script>';
		}
	
	}
}
mysqli_close($conn);
}catch(Exception $e){
echo $e;
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