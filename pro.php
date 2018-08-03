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
  $degree = $row['degree'];
  $speciality = $row['speciality'];
  $phone= $row['phone'];
  
  $name = htmlspecialchars($row['name'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $address = htmlspecialchars($row['address'],ENT_QUOTES);
  $category = htmlspecialchars($row['category'],ENT_QUOTES);
  $degree = htmlspecialchars($row['degree'],ENT_QUOTES);
  $speciality = htmlspecialchars($row['speciality'],ENT_QUOTES);
  $pnone = htmlspecialchars($row['phone'],ENT_QUOTES);

}

?>

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
	</script>
			<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 60);
</script>	
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
                    <a href="user/index.php" class="navbar-brand"><img src="images/logo.png" alt="GiveBd"></a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
					<li><a href="http://givebd.byethost17.com/givebd/user/index.php">Home</a></li>
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
                                <li><a href="user/medicine.php">Old People</a></li>
                                <li><a href="user/medicine.php">Child</a></li>
                                <li><a href="user/medicine.php">For All</a></li>           
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
				<h2>Doctor's Profile</</h2>
                
			</div>
		</div>
	</div><!-- end post-wrapper-top -->
	

	<div class="white-wrapper">
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
							<li>
							<a href="ep.php">
							<i class="glyphicon glyphicon-pencil"></i>
							Edit Profile </a>
						</li>
						
						
						<li  class="active">
							<a href="pro.php">
							<i class="glyphicon glyphicon-user"></i>
							User Account </a>
						</li>

                                                 <li>
							<a href="user/doctor.php">
							<i class="glyphicon glyphicon-user"></i>
							Generate Prescription</a>
						</li>
						
						<li>
							<a href="user/prescription.php">
							<i class="glyphicon glyphicon-user"></i>
							All Generated Prescription</a>
						</li>
						
						<li>
							<a href="logout.php">
							<i class="glyphicon glyphicon-log-out"></i>
							Logout </a>
						</li>
                        </ul>
                    </div>
                    
                  
                            <div class="general-title text-left">
                	<h3 style="margin-left:10%">Dr.Rafiqul Islam</h3>
                    <p style="margin-left:10%; font-size:20px;">We provide best treatment for our patients</p>
                </div>
				<br>
            	<div class="row" style="float: left;">
                	<div class="clearfix" style="margin-left:15%" >
                    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                			<div class="media-element clearfix">
								<img class="img-responsive" src="getimage.php" alt="">
							</div><!-- end slider -->
                        </div><!-- end col-lg-6 -->

                    	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<div class="big_team_widget">
                              
                                
                                
                                <div class="doctor-details" style="margin-left:5%">
                                	<?php 
									echo"<ul>
                                    	<li><span>Name</span> - $name</li>
										<li><span>Speciality</span> - $speciality</li>
                                    	
                                    	<li><span>Degree</span> - $degree</li>
                                    	<li><span>Address</span> - $address</li>
                                    	<li><span>Mobile</span> - $phone</li>
										
                                    	<li><span>Email</span> - $email</li>
                                    </ul> "?>
                                </div>
                                
                                <div class="social-icons" style="margin-left:5%">
                                    <span class="facebook"><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                    <span class="google-plus"><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                                    <span class="twitter"><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                    <span class="linkedin"><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                                </div><!-- end social icons -->
                            </div><!-- end big_team_widget -->

                           
                                 
                                </form>
                            </div>
                            </div><!-- end active -->
                        </div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end white-wrapper -->

  
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
    
	<div class="dmtop">Scroll to Top</div>
    
	<!-- Main Scripts-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/custom.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/main.js"></script>
	
		
	<script>
	
	
	// Portfolio
(function($) {
	"use strict";
	var $container = $('.grid_gallery'),
		$items = $container.find('.gallery_item'),
		portfolioLayout = 'fitRows';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
				
		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});
		
		
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
			
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
		
		$(window).on('resize', function () { 
		setPortfolio();          
	});
})(jQuery);
	</script>

	<!-- LIGHTBOX WIDGET -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript">
	 (function($) {
		  "use strict";
		jQuery('a[data-gal]').each(function() {
			jQuery(this).attr('rel', jQuery(this).data('gal'));
		});  	
			jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
	})(jQuery);
	</script>
    
</body>

<!-- Mirrored from jollythemes.com/html/jollymedic/gallery-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:29:43 GMT -->
</html>