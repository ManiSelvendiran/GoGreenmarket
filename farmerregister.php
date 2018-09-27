<html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
<?php
if(isset($_POST["fname"]))
        $fnames=$_POST["fname"];
if(isset($_POST["lname"]))
        $lnames=$_POST["lname"];

if(isset($_POST["dob"])) 
	$dobs=$_POST["dob"];
if(isset($_POST["address"])) 
	$addresss=$_POST["address"];
if(isset($_POST["pincode"])) 
	$pincode=$_POST["pincode"];
if(isset($_POST["ad"])) 
	$ads=$_POST["ad"];
if(isset($_POST["aadhar"])) 
	$aadhars=$_POST["aadhar"];		
if(isset($_POST["mobile"])) 
	$mobile=$_POST["mobile"];		
if(isset($_POST["fieldid"])) 
	$fieldids=$_POST["fieldid"];		
if(isset($_POST["fieldsize"])) 
	$fieldsizes=$_POST["fieldsize"];	
	if(isset($_POST["producttype"])) 
	$producttypes=$_POST["producttype"];
if(isset($_POST["pname"])) 
	$pnames=$_POST["pname"];	
if(isset($_POST["psw"])) 
	$psws=$_POST["psw"];	
if(isset($_POST["psw_repeat"])) 
	$psw_repeats=$_POST["psw_repeat"];

	
	
$users=$fnames.$lnames;




		$conn = mysqli_connect('localhost', 'root','','gogreenmarket');

			
if(isset($_POST['submit'])) 
{

	if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
	 
		echo "please select correct file";
	}
	else{
	$images=$_FILES['image']['tmp_name'];
	$names=$_FILES['image']['name'] ;
	$images=file_get_contents($images);
	$images=base64_encode($images);
	
	}

}

		if($psws==$psw_repeats) 
		{
		  
			$sql="insert into farmerdata values ('$names','$images','$users', '$dobs', '$addresss',$pincode, '$ads',$aadhars,$mobile,$fieldids,$fieldsizes,'$producttypes','$pnames','$psws')";
			mysqli_query($conn,$sql);
			
			 echo '<script>alert("registered Successfully")</script>';  
                     echo '<script>window.location="farmerlogin.html"</script>';  
			
		}
		else{
			 echo '<script>alert("Use same password")</script>';  
                     echo '<script>window.location="index.php"</script>';  
			
			
			}
		mysqli_close($conn);



?>


