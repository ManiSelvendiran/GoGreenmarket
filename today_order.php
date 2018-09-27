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
 
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				
				<a href="adminwork.php" class="active"><span class="icon-user"></span>Admin</a>
				<a  href="logout.php" > <span class="icon-off"></span> Logout</a>
				
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
		<li class="active">Registration</li>
    </ul>
	<h3> Admin</h3>	
	<hr class="soft"/>
	<div class="well">
	
				
	<!--
Admin Navigation Bar Section 
-->

				
					<div class="topNav">
						<div class="container">
							<div class="alignL">
				
				
				
				
				
			
				
				
				</div>
				</div>
				</div>
			
				
		<div class="topNav">
						<div class="container">
							<div class="alignL">
				
				
				
				
				
			
				<!--a  href="#admin_add_product.php" ><span class="icon-edit"></span> Add New Product </a--> 
				<a  href="admin_update_price.php" > <span class="icon-edit"></span> Update product Price</a>
				<a  href="today_order.php" class="active"> <span class="icon-shopping-cart"></span>Today order</a>	
				
				
				</div>
				</div>
				</div>		
				
				
				 <div class="table-responsive">  
				 <br>
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">Acc Name</th>  
                               <th width="10%">Receiver</th>  
                               <th width="25%">Address</th>  
                               <th width="40%">Products</th>
							   <th width="5%">Total amount</th>
							   <th width="5%">Payment Status</th> 
							   <th width="5%">update</th>
							   
                          </tr>  
                          <?php   
                           $x = mysqli_query($conn,"SELECT * FROM orderdetails");

					while($result = mysqli_fetch_array($x))
						{
							 
							
							$address=$result['houseno']."  ".$result['apartment']."  ".$result['street']."  ".$result['landmark']." ".$result['city'];
							
							
		
		?>

                         
                          <tr>  
                               <td><strong><font color="#f33940"><?php echo $result['accname']; ?></strong></font></td>  
                               <td><?php echo $result['receiver']; ?></td>  
                               <td><?php echo $address; ?></td>  
                               <td><?php echo $result['item'];  ?></td>  
							   <td>Rs <?php echo $result['totalamount'];  ?></td>
							   <?php 
							   if($result['paidstatus']=="not paid"){ ?>
							   <td><strong><font color="red"><?php echo $result['paidstatus']; ?></td>
							   <?php 
							   }
							   else{ ?>
								   <td><strong><font color="green"><?php echo $result['paidstatus']; ?></td>
								   <?php
							   }
							   ?><?php 
							   if($result['paidstatus']=="not paid"){ ?>
                               <td><a href="today_order.php?action=delivered&recv=<?php echo $result["totalamount"];?>"><span class="defaultBtn">Not Delivered</span></a></td>  
                              <?php 
							   }
							   else{ ?>
							   <td><font color="#58ac18">Delivered</td>
							      <?php
							   }
							   ?>
						 </tr>  
                          <?php  
                                    
                               }  
                          ?>  
                          
						 
						  
						  
						  

						  
						  
						  
						  
                     </table>  
					
                </div>  
<?php 

if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delivered")  
      {  
           
                $pay="paid"; 
                
			
			$query="UPDATE `orderdetails` SET `paidstatus`='".$pay."' WHERE `totalamount`=".$_GET["recv"]." ";
			mysqli_query($conn,$query);
			
			
           
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