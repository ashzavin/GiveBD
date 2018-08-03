<?php
include "init.php";
//session_start();

//$email = $_SESSION["nm"];
  
		
       //echo  $_SESSION["nm"];
	  // $email = $_SESSION["nm"];
  include "test.php";
		
       //echo  "$email";
	

/*if(isset($_POST['btn2']))
{
	$imagename=$_FILES["myimage"]["name"]; 
	$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));	

	if($imagetmp)
	{
		echo "ok";
		$sql1="update useri set DP = '$imagetmp' where email like '$email'";
		 mysqli_query($con, $sql1);
	}
	$sql = "SELECT * FROM useri where email like '$email'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	
	$address = mysqli_real_escape_string($con, $_POST['address']);
	
	$sql2= "update useri set email = '$email', name = '$name', address= '$address' where email like '$id'";
	if(mysqli_query($con, $sql2))
	{
		//$_SESSION['user']= $email;
		//header("Location: editprofile.php");
	}
	else
	{ 
		echo "shomossha";
	
	}
}
*/
 
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jollythemes.com/html/jollymedic/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:29:44 GMT -->
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Give Bangladesh</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Awesome Icons -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Flexslider -->
  <link href="css/flexslider.css" rel="stylesheet">
  <!-- Carousel -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
  
  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->
<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 60);
</script>


</head>
<body>

<div class="animationload">
<div class="loader">Loading...</div>
</div>

   <div class="topbar">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="topbar_social pull-right">
						
						
						<a href="#"><i class="fa fa-user"></i> Profile</a>
						
					</div><!-- end social icons -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end topbar -->
    
	<header class="header">
		<div class="container">
			<nav class="navbar yamm navbar-default">
				<div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="GiveBd"></a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
                        <li class="dropdown"><a  href="#" data-toggle="dropdown" class="dropdown-toggle">Service </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="appointment.html">Medicine Donation</a></li>
								
                                <li><a href="404.html">Money Donation</a></li>
                                <li><a href="404.html">Cloth Donation</a></li>
                                <li><a href="404.html">Blood Donation</a></li>
                                
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
                        
   
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Medicine Catagory</a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="medicine.php">Old People</a></li>
                                <li><a href="medicine.php">Child</a></li>
                                <li><a href="medicine.php">For All</a></li>           
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
                                 
						</li><!-- end drop down -->
					   
						
                        <li><a href="#contact">Contact Us</a></li>
                        
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->
			</nav><!-- end navbar yamm navbar-default -->
		</div><!-- end container -->
    </header><!-- end header -->
	<div class="shadow"></div>

	<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Edit Profile</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li>Shortcodes</li>
                </ul>
			</div>
		</div>
	</div><!-- end post-wrapper-top -->

	<div class="white-wrapper">
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
							<li class="active">
							<a href="epg.php">
							<i class="glyphicon glyphicon-pencil"></i>
							Edit Profile </a>
						</li>
						
						
						<li>
							<a href="prog.php">
							<i class="glyphicon glyphicon-user"></i>
							User Account </a>
						</li>

                                                 <li>
							<a href="appointment.html">
							<i class="glyphicon glyphicon-user"></i>
							Donate Medicine</a>
						</li>
						
						
						<li >
							<a href="logout.php">
							<i class="glyphicon glyphicon-log-out"></i>
							Logout </a>
						</li>
                        </ul>
                    </div>
                    
                   <div class="col-md-9" style="background-color: white;" >
				<br><br>
					<h1><center>Edit Your Profile</center></h1>
					<wow>
					<form action = "edit1.php" method = "post" enctype="multipart/form-data">
					<div class="row" >
						<div class="col-md-11 baner-top ban-mar">
							<label>Upload New Profile Picture: </label>
							<input type="file" name="myimage">
						</div>
						<div class="col-md-11 baner-top ban-mar">
							<label>Name: </label></br>
							<input class="form-control" name="name" type="text" value = "<?php echo $row["name"];?>" placeholder = "Enter your full name..." required>
						</div></br></br>
						<div class="col-md-11 baner-top ban-mar">
						<label>Profession: </label></br>
							<input class="form-control" name="speciality" type="text" value = "<?php echo $row["speciality"];?>" placeholder = "Enter  speciality...">
						</div>
						
												<div class="col-md-11 baner-top ban-mar">
							<label>Working place: </label></br>
							<input class="form-control" name="degree" type="text" value = "<?php echo $row["degree"];?>" placeholder = "Enter degree...">
						</div>
						
												<div class="col-md-11 baner-top ban-mar">
							<label>Phone: </label></br>
							<input class="form-control" name="phone" type="text" value = "<?php echo $row["phone"];?>" placeholder = "Enter your mobile number...">
						</div>
						<div class="col-md-11 baner-top ban-mar">
							<label>Address: </label></br>
							<input class="form-control" name="address" type="text" value = "<?php echo $row["address"];?>" placeholder = "Enter your Address...">
						</div>
						
						</br></br>
						
						<div class="col-md-11 baner-top ban-mar">
						</br></br>
							<button type="submit" class="btn btn-success" name = "btn2"><tab2></tab2>  Submit <tab2> </tab2></button>
						</div>
						</form>
					</div>
					</wow>
					<div class="clearfix"></div>
				</div>
		</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end white-wrapper -->

   <div class="custom-wrapper"  id="contact">
    	<div class="container">
       		<div class="newsletter_wrapper">
            
            	<h4 style="color:white;">Over <mark>100,000</mark> People Trust us. Get free Medicine<br>
				And Donate Your Spare Medicine, Subscribe us</h4>

                <div class="row margin-top">
                    <form id="loginform" method="post" name="loginform">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                </div>
                            </div>
                        </div>      	
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" placeholder="Your Phone Number">
                                </div>
                            </div>
                        </div>    
                        <div class="clearfix"></div><br>
                        <button class="btn btn-default btn-lg" style="background:#0EB8EA;">Subscribe Now</button>    
                    </form>
                </div>
                                 
            </div><!-- end newsletter_wrapper -->
       	</div><!-- end container -->
    </div><!-- end custom_wrapper -->

    
  
    
    <div class="copyright">
    	<div class="container">
        	<div class="row">
               <!-- <div class="col-lg-5 col-md-6 col-sm-12">-->
                    <div class="copyright-text" style="text-align:center;">
                        <p>Copyright © 2017 - GIVEBangladesh Medicine Donation Website</p>
                    </div><!-- end copyright-text -->
                </div><!-- end widget -->
             <!--   <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="footer-menu">
                        <ul class="menu pull-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Med Catagory</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div><! end large-7 --> 
         <!--  </div><! end row --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
   
	<div class="dmtop">Scroll to Top</div>
    
	<!-- Main Scripts-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/custom.js"></script>

	<!-- CALENDAR WIDGET  -->
	<script type="text/javascript">
		(function($) {
		  "use strict";
			$('.form_datetime').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
		})(jQuery);
	</script>
   
</body>

<!-- Mirrored from jollythemes.com/html/jollymedic/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:29:44 GMT -->
</html>