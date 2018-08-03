<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jollythemes.com/html/jollymedic/gallery-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:29:43 GMT -->
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Give Bangladesh</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link href="css/med.css" rel="stylesheet" type="text/css">
  
  
  <!-- Awesome Icons -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Flexslider -->
  <link href="css/flexslider.css" rel="stylesheet">
  <!-- Lightbox Animations -->
  <link href="css/prettyPhoto.css" rel="stylesheet">
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
    <script src="js/respond.min.js"></script> 
 <![endif]-->
	
  <style>
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 4px 15px;
}

.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}


@media screen and (min-width: 768px) {
    #boot-search-box {
        width: 500px;
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 500px;
    }
}
</style>
</head>

<!--Header Ends-->

<body>



   <div class="topbar">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="topbar_social pull-right">
						
						
						
						
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
                        
   
						<li class="dropdown"><a  href="#" data-toggle="dropdown" class="dropdown-toggle">Medicine Catagory</a>

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
				<h2 style="color: red;">User Account</</h2>
                
			</div>
		</div>
	</div><!-- end post-wrapper-top -->
	
	
	<?php  
include "init.php";
session_start();
$email = $_SESSION["nm"];


  $sql="SELECT * FROM useri WHERE email='$email';";
			$result=$con->query($sql);
			//$result=$con->query($sql);
			//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				
  while($row = mysqli_fetch_assoc($result))
{
  $name = $row['name'];
  $email = $row['email'];
  $address = $row['address'];
  $category = $row['category'];
  $password = $row['password'];
  
  
  $name = htmlspecialchars($row['name'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $address = htmlspecialchars($row['address'],ENT_QUOTES);
  $category = htmlspecialchars($row['category'],ENT_QUOTES);
  $password = htmlspecialchars($row['password'],ENT_QUOTES);
  

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Give Bangladesh</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 1);
</script>
  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Awesome Icons -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Carousel -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
  

  <!--MAP-->
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>

  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

</head>
<Br>
	 
	 
<div class="container">
	<div class = "row">
	
		<div class="col-md-3" id = "uffjhamela">
			<div class="profile-sidebar" data-spy = "affix">
				<!-- SIDEBAR USERPIC --><br><br><br><br><br>

				<div class="profile-userpic">
					<img src="getimage.php" class="img-responsive" alt="  ">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<h3><center><?php  ?></h3>
					</div>
					<div class="profile-usertitle-job">
						<?php  ?></center>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<br>
			<!-- 	<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>-->
				
				 
				<div class="profile-usermenu">
					<ul class="nav">
						
						<li>
							<a href="editprofile.php">
							<i class="glyphicon glyphicon-pencil"></i>
							Edit Profile </a>
						</li>
						
						
						<li>
							<a href="pro.php">
							<i class="glyphicon glyphicon-user"></i>
							User Account </a>
						</li>

                                                 <li>
							<a href="appointment.html">
							<i class="glyphicon glyphicon-user"></i>
							Donate Medicine</a>
						</li>
						
						
						<li class="active">
							<a href="logout.php">
							<i class="glyphicon glyphicon-log-out"></i>
							Logout </a>
						</li>

					</ul>
				</div>
				
				<div class="clearfix"></div>
				<!-- END MENU -->
			</div>
			</div>
		
		
	<!--profile header-->
	
		<div class="col-md-9" style="background-color: white;" >
				<br>
					
					<wow>
					<h4>
					<?php 
					echo "  <div style='margin:30px 0px;'>
							  Name: $name<br /><br />
							  Email: $email<br /><br />
							  Address: $address<br /><br />
							  Sign in as: $category<br /><br />
							  
							 
							</div>
  
					  
					
				  ";
 //$_SESSION["nm"]=$email;
				  ?>
						</h4>		
					
							
</br></br></br></br>
					</div>
					</wow>
					<div class="clearfix"></div>
				</div>
			<br><br>
		<!--//footer-->
	
	<!--
	<div id="footer" width = 100%>
        <div class="container">
            <div class="row ">
                 | All Right Reserved by Syeda Sabrina				
		
            </div>
            
        </div>-->
       
    </div></br></br></br>
</body>
</html>


	
	
<!--footer-->
<div class="custom-wrapper" id="contact">
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
                        <p>Copyright � 2017 - GIVEBangladesh Medicine Donation Website</p>
                    </div><!-- end copyright-text -->
                </div><!-- end widget -->
      
        </div><!-- end container -->
    </div><!-- end copyrights -->
    

    
</body>

<!-- Mirrored from jollythemes.com/html/jollymedic/gallery-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:29:43 GMT -->
</html>