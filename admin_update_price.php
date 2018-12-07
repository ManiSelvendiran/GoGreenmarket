<?php
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
	<div class="span12">
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
				
				
				
				
				
			
				<!--a  href="#admin_add_product.php"><span class="icon-edit"></span> Add New Product </a--> 
				<a  href="admin_update_price.php" class="active" > <span class="icon-edit"></span> Update product Price</a> 
				<a  href="today_order.php"> <span class="icon-shopping-cart"></span>Today order</a>
				<a  href="today_upload.php"> <span class="icon-circle-arrow-up"></span>Today Farmer Upload</a>
				
				</div>
				</div>
				</div>
				
				<div class="table-responsive">  
				 <br>
                     <table class="table table-bordered">  
                          <tr>  
                                
                               <th width="40%">product Name</th>  
                               <th width="10%">Old Stock</th>
								<th width="10%">Today Stock</th>
								<th width="10%">Update</th>								
                               <th width="10%">Yesterday price</th>
							   <th width="5%">Today Expectation</th>
							   <th width="10%">Update</th>
							   
                          </tr>  
                          <?php   
                           $x = mysqli_query($conn,"SELECT * FROM productlist");

					while($result = mysqli_fetch_array($x))
						{
							 ?>

                         
                          <tr>  
								<form action="admin_update_price.php" method="POST">
                               <td><strong><font color="#f33940"><?php echo $result['name']; ?></strong></font></td>
							   <input type="hidden" name="name" value="<?php echo $result['name']; ?>" />
                               <td><?php echo $result['yesterdaystock'];  ?> kgs</td>  
							    <td><input class="span1" style="max-width:34px"  id="appendedInputButtons" size="16" type="text" name="stock" value="<?php echo $result['todaystock'];?>"/>kgs </td>
								<td> <input type="submit" name="updatestock" style="margin-top:5px;" onclick="JavaScript:Auto(1000)" class="exclusive shopBtn" class="btn btn-success" value="update" />
								</form></td>
								
								<form action="admin_update_price.php" method="POST">
								<input type="hidden" name="name" value="<?php echo $result["name"]; ?>" />
							   <td>Rs <?php echo $result['yesterdayprice'];  ?></td>
							   <td>Rs <input class="span1" style="max-width:34px"  id="appendedInputButtons" size="16" type="text" name="price" value="<?php echo $result['expectprice'];?>" /></td>
							   <td> <input type="submit" name="updateprice" style="margin-top:5px;" onclick="JavaScript:Auto(1000)" class="exclusive shopBtn" class="btn btn-success" value="update" />
								</form></td>
							     
							     
                          <?php  
                                    
                               }  
                          ?>  
                          
						 
						  	  
                     </table>  

				
				<?php
				if(isset($_POST["updatestock"])) {
					
					$name=$_POST["name"];	
					
					$stock=$_POST["stock"];
					echo $name;
					echo $stock;
					
					$sql1="UPDATE `productlist` SET todaystock=".$stock." WHERE name='".$name."'";
		
					$i=mysqli_query($conn,$sql1);
					if($i){
					echo '<script>alert("Updated")</script>';  
                    echo '<script>window.location="admin_update_price.php"</script>'; 
					}
				}
				?>
				<?php
				if(isset($_POST["updateprice"])) {
					
				
					$name=$_POST["name"];	
					
					$price=$_POST["price"];
					
					$sql2="UPDATE `productlist` SET `expectprice`=".$price." WHERE `name`='".$name."'";
		
					$j=mysqli_query($conn,$sql2);
					if($j){
					echo '<script>alert("Updated")</script>';  
                     echo '<script>window.location="admin_update_price.php"</script>'; 
					}
				}
				?>
				
		<div class="topNav">
						<div class="container">
							<div class="alignL">
				
				
				
				
				
			
				

				
				
				</div>
				</div>
				</div>		
				
			
	
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
</div-->
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
 
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>