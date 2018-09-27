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
			$sql="INSERT INTO `farmerupload`( `mobile`, `producttype`, `productname`, `weight`, `expectprice`) VALUES (".$_SESSION['mobile'].",'".$producttypes."','".$pnames."',".$weight.",".$price.");";
			//echo($sql);
	//		$sql = "INSERT INTO farmerupload (name,fieldid,producttype,productname,weight,expectprice) VALUES ('$_SESSION['name']',$_SESSION['fieldid'],'$producttypes','$pnames',$weight,$price)";
			//$sql="insert into farmerupload values ('$date','$time'.strtotime(),'$_SESSION['name']',$_SESSION['mobile'],$_SESSION['fieldid'],'$producttypes','$pnames',$weight,$price)";
		mysqli_query($conn,$sql);
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


