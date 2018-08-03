<?php include "init.php"  ?>
<?php
$ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
		$sql= mysqli_query($con, "INSERT INTO user_ip (ip_address) VALUES ( '".$ipaddress."' )");


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jollythemes.com/html/jollymedic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:28:05 GMT -->
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
						
						
						<a href="in.php"><i class="fa fa-user"></i> Login/Sign Up</a>
						
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
                    <a href="home.php" class="navbar-brand"><img src="images/logo.png" alt="GiveBd"></a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
					<li><a id="active" href="home.php">Home</a></li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Service </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="default.html">Medicine Donation</a></li>
								
                                <li><a href="404.html">Money Donation</a></li>
                                <li><a href="404.html">Cloth Donation</a></li>
                                <li><a href="404.html">Blood Donation</a></li>
                                
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
                        
   
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Medicine Catagory</a>

                            <ul class="dropdown-menu" role="menu">
                               
                                <li><a href="default.html">General</a></li> 
								<li><a href="default.html">Old People</a></li>
                                <li><a href="default.html">Child</a></li>								
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
                                 
						</li><!-- end drop down -->
					    <li><a href="#feedback">Feedback</a></li>
                        <li><a href="#aboutus" >About Us </a>
                           
                        </li><!-- end standard drop down -->
						<li><a href="faq.html">FAQ</a></li>
						
                        <li><a href="#contact">Contact Us</a></li>
                        
					</ul><!-- end navbar-nav -->
				</div><!-- #navbar-collapse-1 -->
			</nav><!-- end navbar yamm navbar-default -->
		</div><!-- end container -->
    </header><!-- end header -->
	
	<div class="shadow"></div>
 <div class="slider-wrapper">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
					
                    </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_02.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="200"
                            data-y="65"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">GIVE<span>Bangladesh</span><br><br>
							Be A Part of Building <br>
							Healthy Bangladesh...
							
                        </div>
                        
                        
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="13"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Black.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Donate Medicine</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="200"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="faq.html" class="btn btn-dark btn-lg" style="border:none;">Recieve Medicine</a>       
                        </div>
						
					 <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="430"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Doctor's Prescribed Medicine</a>
                        </div>
                        
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_man_01.png" alt="">
                        </div>
                    </li>
					
					
					
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_01.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="200"
                            data-y="65"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">GIVE<span>Bangladesh</span><br><br>
							Be A Part of Building <br>
							Healthy Bangladesh...
							
                        </div>
                        
                        
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="13"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Black.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Donate Medicine</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="200"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="faq.html" class="btn btn-dark btn-lg" style="border:none;">Recieve Medicine</a>
                        </div>
						
						
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="430"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Doctor's Prescribed Medicine</a>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_man_01.png" alt="">
                        </div>
                    </li>
					
					
					
					       </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_03.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="200"
                            data-y="65"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">GIVE<span>Bangladesh</span><br><br>
							Be A Part of Building <br>
							Healthy Bangladesh...
							
                        </div>
                        
                        
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="13"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Black.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Donate Medicine</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="200"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="faq.html" class="btn btn-dark btn-lg" style="border:none;">Recieve Medicine</a>
                        </div>
						<div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="430"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Doctor's Prescribed Medicine</a>
                        </div>
                        
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_man_01.png" alt="">
                        </div>
                    </li>
					
					
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sc_04.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="center" data-hoffset="200"
                            data-y="65"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">GIVE<span>Bangladesh</span><br><br>
							Be A Part of Building <br>
							Healthy Bangladesh...
							
                        </div>
                        
                        
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="13"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Black.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Donate Medicine</a>
                        </div>
                        
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="200"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="faq.html" class="btn btn-dark btn-lg" style="border:none;">Recieve Medicine</a>
                        </div>
						
                        <div class="tp-caption small_title customin customout start" style="margin-left:30px;"
                            data-x="center" data-hoffset="430"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1400"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="default.html" class="btn btn-dark btn-lg" style="background-color:#ff3300;border:none;">Doctor's Prescribed Medicine</a>
                        </div>
						
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="60"
                            data-y="bottom" data-voffset="70"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_man_01.png" alt="">
                        </div>
                    </li>
                 </ul>
			</div>
        </div>
	</div><!-- end slider-wrapper -->
    
	<div class="white-wrapper">
    	<div class="container">
        	<div class="general-row">
            	<div class="general-title text-center">
                	<h3>Our Services</h3>
                  
                </div>

                <div class="custom-services">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 first">
						<div class="service_box">
                        	<img src="images/ico_01.png" alt="" class="img-responsive">
                        	<div class="title">
                            	<h3>Medicine Donation
								</h3>
                            </div><!-- end title -->
                            <p>Your donation will help families in poverty to begin a healthy life. We create a platform between you and the helpless family suffering from several disease.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div><!-- end service_box -->
                    </div><!-- end col-sm-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="service_box">
                        	<img src="images/ico_02.png" alt="" class="img-responsive">
                        	<div class="title">
                            	<h3>Doctor's Subscription</h3>
                            </div><!-- end title -->
                            <p>We help doctors to do charity work for the poor people by recommending or prescribing medicine according to the genre of disease or basic symptoms.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div><!-- end service_box -->
                    </div><!-- end col-sm-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 last">
						<div class="service_box">
                        	<img src="images/ico_03.png" alt="" class="img-responsive">
                        	<div class="title">
                            	<h3>Distributing Medicine</h3>
                            </div><!-- end title -->
                            <p>Our team distribute your donated medicine to the needy and affected people who needs medicine but cannot afford them rather suffers from diseases.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div><!-- end service_box -->
                    </div><!-- end col-sm-4 -->
				</div><!-- end cutom services --> 
            </div><!-- end row --> 
        </div><!-- end container -->
    </div><!-- end white-wrapper -->

    <div style="margin-top:-70px;width:100%;margin-bottom:50px;"></div>
	<div class="grey-wrapper">
    	<div class="container">
        	<div class="general_row">
                <div class="general-title text-center">
                    <h3 style="color:#313135;">Latest MEDICINE Collection</h3>
                </div>	
           	
            	<div id="owl-blog" class="owl-carousel">
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_01.png" alt="" class="img-responsive" style="height:210px;">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine for Acidity and Gastric</a></h3>
                                <div class="blog-carousel-meta">
                                    
                                    <span><i class="fa fa-comment"></i> <a href="#">Generic Name of Medicine: OMEPRAZOLE</a></span>
                                    
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Omeprazole is a medication used in the treatment of gastric or acidity disease, peptic ulcer disease, and Zollinger–Ellison syndrome. It can be taken by mouth or injected into a vein. </p>
                            </div><!-- end blog-carousel-desc -->
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->
                    
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_02.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine for Fever</a></h3>
                                <div class="blog-carousel-meta">
                                      <span><i class="fa fa-comment"></i> <a href="#">Generic Name of Medicine: PARACETAMOL</a></span>

                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Paracetamol is a medication used to treat pain and fever.It is used for mild to moderate pain. There is evidence for fever relief in children.It is taken by mouth. Effects last between 2 to 6 hours. <br></p>
                            </div><!-- end blog-carousel-desc -->
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->
                    
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_04.png" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine for Cold </a></h3>
                                <div class="blog-carousel-meta">
                                  <span><i class="fa fa-comment"></i> <a href="#">Generic Name of Medicine: AMBROX</a></span>
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Ambroxol is a mucolytic agent. When administered orally action occurs after about 30 min. The breakdown of mucopolysaccharide fibers makes the sputum thinner and easily removed by coughing. </p>
                            </div><!-- end blog-carousel-desc -->
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_03.png" alt="" class="img-responsive" style="height:210px;">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine for Nutrition</a></h3>
                                <div class="blog-carousel-meta">
                                    <span><i class="fa fa-comment"></i> <a href="#">Generic Name of Medicine: Vitamin b12</a></span>
                                    
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Class aptent torquent per conubia nostra, per inceptos himenaeos. Aenean vel faucibus nunc, et venenatis magna. In hac habitasse platea dictumst. </p></br>
                            </div><!-- end blog-carousel-desc -->
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->
                    
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_05.png" alt="" class="img-responsive" style="height:210px;">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine For diarrhoea</a></h3>
                                <div class="blog-carousel-meta">
                                    
                                    <span><i class="fa fa-comment"></i> <a href="#">Generic Name of Medicine: Oral Rehydration Saline(ORS)</a></span>
                                    
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Class aptent torquent per conubia nostra, per inceptos himenaeos. Aenean vel faucibus nunc, et venenatis magna. In hac habitasse platea dictumst. </p>
                            </div><!-- end blog-carousel-desc --></br>
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->
                    
                    <div class="item">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="demos/blog_06.png" alt="" class="img-responsive" style="height:210px;">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="blog-single.html"><i class="fa fa-link"></i></a>
                                        <a class="st" rel="bookmark" href="#"><i class="fa fa-eye"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="blog-carousel-header">
                                <h3><a title="" href="blog-single.html">Medicine for Vomitting</a></h3>
                                <div class="blog-carousel-meta">
                                    <span><i class="fa fa-calendar"></i> April 01, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="#">03 Comments</a></span>
                                    <span><i class="fa fa-eye"></i> <a href="#">84 Views</a></span>
                                </div><!-- end blog-carousel-meta -->
                            </div><!-- end blog-carousel-header -->
                            <div class="blog-carousel-desc">
                                <p>Class aptent torquent per conubia nostra, per inceptos himenaeos. Aenean vel faucibus nunc, et venenatis magna. In hac habitasse platea dictumst. </p>
                            </div><!-- end blog-carousel-desc --></br>
                            <a href="blog-single.html" class="btn btn-dark btn-sm">Read More</a>
                        </div><!-- end blog-carousel -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end general row -->
        </div><!-- end container -->
    </div><!-- end grey-wrapper -->




        	<div class="container" id="aboutus">
            	<div class="row">
                	<div class="clearfix">
                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                			<div id="aboutslider" class="flexslider clearfix">
                                <ul class="slides">
                                    <li><img class="img-responsive" src="demos/slider_01.png" alt=""></li>
                                    
                                </ul><!-- end slides -->
                                <div class="aboutslider-shadow">
                                <span class="s1"></span>
                                </div>
							</div><!-- end slider -->
                        </div><!-- end col-lg-6 -->

                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                        	<div class="title"><h2>ABOUT <span>GIVEBangladesh</span></h2></div>
							<p >This is an website for medicine distribution.Medicine donor can donate medicine here.Donation will help families in poverty to begin a healthy life. We create a platform between you and the helpless family suffering from several disease.</p>

							<p>We Provide medicine for free through our volunteer to the poor people who cannot afford medicine and so suffer from various diseases whereas there are lots of spare medicines in the medical centers and may also be at our home.Here pople can donate medicine and from registered doctor poor people can get medicine also.</p>                        
                         
                         	<div class="clearfix"></div>
                            
                            <div class="about_icons row text-center">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="service-icon">
                                        <div class="dm-icon-effect-1">
                                            <a href="#" class=""> <i class="hovicon effect-1 sub-a fa fa-lightbulb-o fa-2x"></i> </a>
                                        </div>
                                        <div class="title"><h3>Donate your spare Medicine</h3></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="service-icon">
                                        <div class="dm-icon-effect-1">
                                            <a href="#" class=""> <i class="hovicon effect-1 sub-a fa fa-share-square-o fa-2x"></i> </a>
                                        </div>
                                        <div class="title"><h3>60 Doctors to serve you</h3></div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="service-icon">
                                        <div class="dm-icon-effect-1">
                                            <a href="#" class=""> <i class="hovicon effect-1 sub-a fa fa-headphones fa-2x"></i> </a>
                                        </div>
                                        <div class="title"><h3>Distribution of free medicine for poor people</h3></div>
                                    </div>
                                </div>
                            </div><!-- about_icons -->
                        </div><!-- end col-lg-6 -->
                	</div><!-- end fullwidth -->
                </div><!-- end row -->
            </div></br></br><!-- end container -->
    
	<div id="one-parallax" class="makepadding parallax" style="background-image: url('demos/parallax_bg_01.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20" >
		<div class="container" id="feedback">
       		<div class="general-row">
            	<div class="general-title text-center">
                	<h3>OUR FEEDBACK FROM OVER <mark>5,000</mark> Patients and Doctors</h3>
					<p class="small-title text-center">What they say about us</p>
                </div><!-- end big title -->	
                
				<div class="testimonial-widget">
					<div id="owl-testimonial" class="owl-carousel">
						<div class="testimonial">
                        	<img src="demos/client_01.jpg" class="img-circle img-thumbnail" alt="">
							<p class="lead">Before this nice innovative idea me and many other girls like me suffered various diseases but could not get medicine due to lack of money. But GIVEBangladesh has shown us the way to live a life without disease.</p>
							<h3>Rahima Akter , Age:14 ( From an interview about GIVEBangladesh)</h3>
						</div><!-- end tweet -->
						<div class="testimonial">
                        	<img src="demos/client_02.jpg" class="img-circle img-thumbnail" alt="">
							<p class="lead">Being a gynaecologist every year I see hundrads of poor women suffering from lack of treatment just due to lack of proper medicines. GIVEBangladesh is like a rising star for those poor women.</p>
							<h3>Dr.Shamima Haidar,Gynaecologist,Bangladesh Medical College.</h3>
						</div><!-- end tweet -->
						<div class="testimonial">
                        	<img src="demos/client_03.jpg" class="img-circle img-thumbnail" alt="">
							<p class="lead">Many poor Children suffers from diseases and now sometimes I felt helpless that I could not support them with medicines. GIVEBangladesh has shown me the way to help those poor children and I am really grateful to this website.</p>
							<h3>Dr.Ehsan Ahmed,Child Specialist,Dhaka Medical College.</h3>
						</div><!-- end tweet -->
					</div><!-- end owl-testimonial -->
				</div><!-- end testimonial widget -->  
                
            </div><!-- end general-row -->
       	</div><!-- end container -->
    </div></br></br><!-- end custom_wrapper -->
        	
            	<div class="general-title text-center">
                	<h3 style="color:#313135;">Our Service Locations</h3>
                  
                </div></br>
      

<!--iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3741756.606005487!2d88.0998252162973!3d23.673841341224367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.169788999999998!2d89.5829794!4m5!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!3m2!1d23.684994!2d90.356331!5e0!3m2!1sen!2sbd!4v1488716077550" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
<!--MAP-->
 <div id="map" style="width: 1347px; height: 550px;"></div>

  <script type="text/javascript">
    var locations = [
      ['Kaliakair', 24.079066728347787,90.21697998046875, 19],
      ['Shibpur', 24.038119,90.736649, 18],
      ['Akhaura', 23.867569, 91.206300, 17],
      ['Brahmanbaria',23.961576, 91.106527, 16],
      ['Kandi', 23.760406, 90.657148, 15],
      ['Kalampur', 23.920854, 90.156521, 14],
      ['Manikganj', 23.861651, 90.000323, 13],
      ['Mohammadpur', 23.765844, 90.358361, 12],
      ['Basundhara', 23.819144, 90.452595, 12],
      ['Khilgaon', 23.756639, 90.464391, 10],
      ['Nabinagar',23.888210, 90.960564, 9],
      ['Mohakhali',23.777628, 90.405450, 8],
      ['House:17/B,Road:9/A Ashulia', 23.899777, 90.323081, 6],
      ['House:132,9/A Dhanmondi  Mobile: 01681234121', 23.746465, 90.376013, 5],
      ['House:13/A,Road:12,Pallabi Mirpur', 23.822349, 90.365420, 4],
      ['House:72,Sector:11,Road:19,Uttara', 23.875855, 90.379544, 3],
      ['Narshindi', 23.92601303302119, 90.714111328125, 2],
      ['Motijhil', 23.732972, 90.417231, 1]
    ];
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 200,
      center: new google.maps.LatLng(23.746465,90.376013),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoomControl: true,
    zoomControlOptions: {style: google.maps.ZoomControlStyle.big}
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    var markers = new Array();
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        animation:google.maps.Animation.BOUNCE,
        map: map
      });
      markers.push(marker);
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
      bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    AutoCenter(),
    (jQuery);
  </script> 





<?php
		require "init.php";
		$sql_query ="select counts from user_count;";
		$result = mysqli_query($con,$sql_query);

		//echo "$result";
		
		while ($row = mysqli_fetch_array($result))
		{
			$current_counts = $row['counts'];
			$new_count = $current_counts + 1;
			$update_count = "UPDATE user_count SET counts = $new_count;";
			$res = mysqli_query($con,$update_count);
			
				//echo "<h2>Total Hits : $new_count</h2>";
		}
		
	
		
		?>
		
		




<div id="one-parallax" class="parallax" style="background-image: url('images/bg.png');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="custom-overlay">
        	<div class="container">
				<div class="stat f-container">
					<div class="f-element col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="milestone-counter">
                        	<i class="fa fa-users fa-3x"></i>
                            <span class="stat-count highlight"><?php echo "$new_count";?></span>
                            <div class="milestone-details">Visitor Counter</div>
						</div>
					</div>
					<div class="f-element col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="milestone-counter">
                        	<i class="fa fa-user-md fa-3x"></i>
                            <span class="stat-count highlight">78</span>
                            <div class="milestone-details">Medicine Collection</div>
						</div>
					</div>
<?php
        require "init.php";
        $sql_query1 ="select id from user_ip;";
        $result1 = mysqli_query($con,$sql_query1);

        //echo "$result1";
        
        while ($row = mysqli_fetch_array($result1))
        {
            $current_counts1 = $row['id'];
            $new_count1 = $current_counts1 ;
            
                //echo "<h2>Total Hits : $new_count1</h2>";
        }
        
    
        
        ?>

            <div class="f-element col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="milestone-counter">
                        	<i class="fa fa-users fa-3x"></i>
                            <span class="stat-count highlight"><?php echo "$new_count1";?></span>
                            <div class="milestone-details">Ip Counter</div>
						</div>
					</div>
      
				</div><!-- stat -->
            </div><!-- end container -->
    	</div><!-- end overlay -->
    </div><!-- end transparent-bg -->



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
	<!--script src="http://maps.google.com/maps/api/js?sensor=false"></script-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/custom.js"></script>
	
	

	<script src="js/jquery.jigowatt.js"></script>
	
	<!-- Google Map -->
 


	<!-- CALENDAR WIDGET -->
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

	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript">
		(function($) {
		  "use strict";
			var revapi;
			jQuery(document).ready(function() {
				revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:560,
					hideThumbs:10,
					fullWidth:"on",
					forceFullWidth:"on"
				});
			});	//ready
		})(jQuery);
	</script>
    
	<!-- CAROUSEL WIDGET -->
	<script src="js/owl.carousel.min.js"></script>
	<script>
		(function($) {
		  "use strict";
			// OWL Carousel
			$("#owl-testimonial-widget").owlCarousel({
				items : 2,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});

			// OWL Carousel
			$("#owl-blog").owlCarousel({
				items : 3,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});
			$("#owl-testimonial").owlCarousel({
				items : 1,
				lazyLoad : true,
				navigation : false,
				pagination : true,
				autoPlay: true
			});
			$("#owl-blog").owlCarousel({
				items : 1,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});
		})(jQuery);
	</script>
    
</body>

<!-- Mirrored from jollythemes.com/html/jollymedic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:28:07 GMT -->
</html>	