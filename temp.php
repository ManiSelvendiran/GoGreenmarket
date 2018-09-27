<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "gogreenmarket");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="checkout.php"</script>';  
                }  
           }  
      }  
 }  
 ?> 
 




<!DOCTYPE html>
<html lang="en">
  <head>
  
  <script type="text/JavaScript">
 
function Auto(t){
	
	
	setTimeout("location.reload(true);",t);
}


 </script>
  
  
    <meta charset="utf-8">
    <title>GoGreen Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
   
    <link href="style.css" rel="stylesheet"/>
   
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
	
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				<a href="index.php" class="active"> <span class="icon-home"></span> Home</a> 
				 
				<a  href="farmerregister.html" ><span class="icon-edit"></span> Farmer Register </a> 
				<a  href="farmerlogin.html" > <span class="icon-lock"></span> Farmer Login</a> 
				<a href="checkout.php"><span class="icon-shopping-cart"></span> Checkout<span class="badge badge-warning"></span></a>
				
				<a href="#"><span class="icon-envelope"></span> Contact us</a>
				
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
		  
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Home	</a></li>
			
			<form action="#" class="navbar-search pull-right"">
			<input type="text" placeholder="Search" class="search-query span2">
			  <button type="submit">Search</button>
			</form>

		  </div>
		</div>
	  </div>
	</div>
	
	
	
	<div class="row">


			  
	</div>
	<div class="span12">
 
	<h3> WELCOME TO GOGREEN MARKET</h3>	
	<hr class="soften"/>

	
	
	
	
<!-- 
Body Section 
-->

<!--
New Products
-->





	<div class="well well-small">
	<h3>Our Products </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
			
			<?php  
                $query = "SELECT * FROM productlist ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
			<li class="span3">
			<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
			  <div class="thumbnail">
				<img src="<?php echo $row["image"];?>" height="150" width="150"   class="img-responsive" /><br /> 
				<div class="caption cntr">
					<p><font color="green"><strong><?php echo $row["name"]; ?></strong></font></p>
					<p><strong>Rs<?php echo $row["price"]; ?></strong></p>
					<p><font color="voilet"><?php 
					echo "Stock ";
					echo $row["stock"]; 
					echo " Kgs" ;?></p></font>
					<input type="text" name="quantity" class="span2" value="1" />Kg<br>
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" onclick="JavaScript:Auto(1000)" class="btn btn-success" value="Add to Cart" />
			</form>
					
					
				</div>
				   <?php  
                     } ?>
			
			
					 <?php
                }  
                ?> 
				
			
			  
				
			   
			  
			
		  </ul>
		</div>
		
		
		
		
	
	
	</div>
	</div>
	</div>
<!-- 
Clients 
-->


<!--
Footer
-->
<!-- /container -->

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