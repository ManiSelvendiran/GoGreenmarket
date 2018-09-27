
<?php
//session_start();
// Create connection
$conn = mysqli_connect('localhost', 'root','','gogreenmarket');

// Check connection
if ($conn) 
{		
	session_unset(); 
	//session_destroy();
$_SESSION['mobile']="";
	mysqli_close($conn);
	
	
	
}		


	include('index.php');

	
	

?>

</body>
