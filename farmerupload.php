<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
</head>
<?php

	session_start();
	if(isset($_POST["producttype"])) 
	$producttypes=$_POST["producttype"];
	if(isset($_POST["pname"])) 
	$pnames=$_POST["pname"];	
	if(isset($_POST["weight"])) 
	$weight=$_POST["weight"];
	if(isset($_POST["price"])) 
	$price=$_POST["price"];
	
	
	

		$conn = mysqli_connect('localhost', 'root','','gogreenmarket');


		

		
	
		if($conn)
			{
				$p="Not Paid";
			$sql="INSERT INTO `farmerupload`( `name`,`mobile`, `producttype`, `productname`, `weight`, `expectprice`,`payment`) VALUES ('".$_SESSION['name']."',".$_SESSION['mobile'].",'".$producttypes."','".$pnames."',".$weight.",".$price.",'".$p."');";
			mysqli_query($conn,$sql);
		
		$todaystock=0;
		$expectprice=0;
		$totalprice=0;
		$count=0;
		$avg=0;
		$sql1="SELECT expectprice,todaystock,totalprice FROM productlist WHERE name = '".$pnames."';";
		$temp1=mysqli_query($conn,$sql1);
		while($rst=mysqli_fetch_array($temp1)){
			$todaystock=$rst['todaystock'];
			$expectprice=$rst['expectprice'];
			$totalprice=$rst['totalprice'];
		}
		
		$sql2="SELECT COUNT(productname) FROM `farmerupload` WHERE productname='".$pnames."'";
		$temp2=mysqli_fetch_array(mysqli_query($conn,$sql2));
		$count=$temp2[0];
		
		
		$todaystock+=$weight;
		$totalprice+=$price;
		
		
		$avg=$totalprice/$count;
		
		$sql3="UPDATE `productlist` SET todaystock=$todaystock,expectprice=$avg,totalprice=$totalprice WHERE name='$pnames'";
		
		mysqli_query($conn,$sql3);
		
		
		
		
		echo '<script>alert("Uploaded Successfully")</script>';  
                     echo '<script>window.location="myprofile.php"</script>';  
                
		
		}
		else{
			echo "please give same password";
			include('farmerregister.html');
			echo "please give same password";
			
			
			}
		mysqli_close($conn);
		session_write_close();


?>


