<html>
<head><title>



</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      
</head>

<?php

if(isset($_POST["uname"])) 
	$mobile=$_POST["uname"];
if(isset($_POST["psw"])) 
	$psw=$_POST["psw"];

$flag = 0;
try{
// Create connection
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');

// Check connection
if ($conn) 
{		
	session_start();
   

	$x = mysqli_query($conn,"select * from farmerdata");

	while($result = mysqli_fetch_array($x))
	{
		if(($result['mobile'] == $mobile) && ($result['password'] == $psw))
		{
			 $_SESSION['mobile'] = "$mobile"; 
			$_SESSION['psw'] = "$psw";
			$flag = 1;
		
		}
	}
		if($flag==1){

	session_write_close();
	include('myprofile.php');
	
		}
		else{
			
			 echo '<script>alert("Invalid Login")</script>';  
                     echo '<script>window.location="farmerlogin.html"</script>';
		}
	
	}
	
mysqli_close($conn);
}catch(Exception $e){
echo $e;
}
?>

</center>
</body>
</html>
