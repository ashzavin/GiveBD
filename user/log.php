<?php include "init.php"; ?>

<?php


		$email=$password=$kl=$valid="";
		$emailError=$passwordError="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			if(empty($_POST["email"]))
			{
				$emailError="email cant blank!";
			}
			
			if(empty($_POST["password"]))
			{
				$passwordError="password cant blank!";
			}
			
			

			if($emailError==""&&$passwordError=="")
			{
				$email=validdata($_POST["email"]);
				
                $password=validdata($_POST["password"]);
				/*$hash = password_hash($password,PASSWORD_DEFAULT);
				echo "$hash";
				echo "$password";
				$sql="SELECT * FROM userinfo WHERE
				email='$email'and password='$hash';";

				$result=$con->query($sql);*/
				$sql="Select * FROM useri WHERE email='$email';";
				$result=$con->query($sql);
				$row = mysqli_fetch_assoc($result);
				$kl=$row["chk"];
				if($kl==1){
				$hash_pwd=$row["password"];
				$hash=password_verify($password,$hash_pwd);
				if($hash==0)
				{
					$passwordError=$emailError="email or password invalid!!";

				}
				else
				{
					$sql="SELECT * FROM useri WHERE
				email='$email'and password='$hash_pwd';";
			$result=$con->query($sql);
					//include "signup.php";
					$valid = true;
					echo "successfully!!!";
					echo "$password";
				}
				}
                             else {$passwordError=$emailError="Regtration is not successful!!";}


			}
			
			if($valid){
				
				$em=$email;
  
		 session_start();
       		 // $em=$email;
        // session_start();
         $_SESSION["nm"]=$em;
		
     header('Location: pro.php');
   exit();
		}
		}
		function validData($data)
		{
           $data=trim($data); 
           $data=stripslashes($data); 
           $data=htmlspecialchars($data);

           return $data;
		}
		?>
         
         <?php
		 
	/*	$em=$email;
          echo $em;
          echo $email;
		  
		 session_start();
       		 // $em=$email;
        // session_start();
         $_SESSION["nm"]=$em;
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
						
						
						<a href="#"><i class="fa fa-user"></i> Login/Sign up</a>
						
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
					<li><a href="index.html">Home</a></li>
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

	<div id="three-parallax" class="nopadding parallax" style="background-image: url('demos/slider_bg_03.png');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="container">
       		<div class="row">
  				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                	<img src="demos/slider_woman_02.png" alt="" class="paddingright img-responsive">
                </div><!-- end col -->
  				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 margin-top">
                    <div class="custom_tabbed">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="custom_tab">
                            <li class="active"><a href="#online_form" data-toggle="tab">Login Form</a></li>
                            
                        </ul>
                                                
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="online_form">
								    <form method="post"  action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>'>
		
		
		Email:<input type="Email" name="email" class="form-control" value="<?php echo $email;?>"  placeholder"Enter email"/>
		<span style="color:red"><?php echo $emailError;?></span>
		<br/>
		Password:<input type="password" name="password" class="form-control" value="<?php echo $password;?>"  placeholder="Enter Password"/>
		<span style="color:red"><?php echo $passwordError;?></span>
		<br/>
		<div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me &nbsp &nbsp &nbsp &nbsp or create new account
                                    </label>
                                  </div>
		
		<button type="submit" class="btn btn-default">Submit</button>
		&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp <a class="btn btn-primary" href="in.php">Sign up <span class="glyphicon glyphicon-chevron-right"></span></a>

		
					</h1></div></div>
		
	</br></br>
		
		
	</br></br>
	               
			
		
                    </div><!-- end custom tabbed -->
                </div>
            </div>       
       	</div><!-- end container -->
    </div><!-- end custom_wrapper -->
    
	
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