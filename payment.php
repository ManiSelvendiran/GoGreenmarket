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
 
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				
				
				
			
				<a  href="payment.php" class="active"></span>payment</a> 
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



	
<div class="row">
<div id="sidebar" class="span3">

</div>

			  
	</div>
	<div class="span9">
    <ul class="breadcrumb">
		
		<li class="active">Online Payment</li>
    </ul>
			<li class="span5">
			
			  <div class="thumbnail">
				
				<div class="caption cntr">
					<p><font color="green"><strong>online payment</strong></font></p>
					
					
			

				<img src="assets/img/maestro.png" alt="payment"></a>
				<img src="assets/img/mc.png" alt="payment"></a>
		
				<img src="assets/img/visa.png" alt="payment"></a>
		
					
					
					
					
					<div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                     </div>
					 
					<div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline"></span> DATE</label>
                                    <div class="input-group">
                                   &nbsp;&nbsp;&nbsp;     <input type="tel" class="form-control" placeholder="MM / YY" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                     </div>

					
					<div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <div class="input-group">
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="tel" class="form-control" placeholder="CVC" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                     </div>
							
					
					<div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div> <br>
			
			
					<div class="control-group">
							<div class="controls">
								<input type="submit" name="submit" value="<?php echo "Rs.".$_SESSION['tamount']." "; ?>Pay" class="exclusive shopBtn">
							</div>
					</div>




		
			
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
		
		

