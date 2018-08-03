<?php
           include "dbConnect.php"; //server connector
          
            
 ?>

<?php


		$name=$category=$password=$register=$email=$mobile=$address=$hash="";
		$nameError=$categoryError=$passwordError=$registerError=$emailError=$mobileError=$addressError="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["name"]))
			{
				$nameError="Name cant blank!";
			}
			else
			{
				
				$name=validdata($_POST["name"]);
				
				
			}
			
			if(empty($_POST["category"]))
			{
				$categoryError="Catagory cant blank!";
			}
			else
			{
				
				$category=validdata($_POST["category"]);
				
				
			}
			
			if(empty($_POST["address"]))
			{
				$addressError="address can not blank!";
			}
			else
			{
				$address=validdata($_POST["address"]);
				
				
			}
			if(empty($_POST["password"]))
			{
				$passwordError="password cant blank!";
			}
			else
			{
				$password=validData($_POST["password"]);
				$hash = password_hash($password,PASSWORD_DEFAULT);

				if(strlen($password)<=4)
				{$passwordError="Password at least greater than 4 !";}
		

		if (!preg_match("#[0-9]+#", $password)) {
        $passwordError = "Password must include at least one number!";
		}

		if (!preg_match("#[a-zA-Z]+#", $password)) {
		
        $passwordError = "Password must include at least one letter!";
		}     
		
	}
			if(empty($_POST["email"]))
			{
				$emailError="email cant blank!";
			}
			else
			{
				$email=validdata($_POST["email"]);
				/*$sql="SELECT * FROM useri where email='$email';"; 
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					$emailError="user already exist";
				}
				*/
				
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false && preg_match('/@.+\./', $email)) {
				  echo("$email is a valid email address");
				} else {
				  echo("$email is not a valid email address");
				}
				
			}
			if(($_POST["category"])=='Doctor'){
			if(empty($_POST["register"]))
			{
				$registerError="register cant blank!";
			}
			else
			{
				$register=validdata($_POST["register"]);
			}
			}
			if(empty($_POST["mobile"]))
			{
				$mobileError="mobile cant blank!";
			}
			else
			{
				$mobile=validData($_POST["mobile"]);
				if(strlen($mobile)!=11)
				{$mobileError="in correct number !";}
				
			}
			
			//if($nameError==""&&$categoryError==""&&$passwordError==""&&$registerError==""&&$addressError==""&&$emailError==""&&$mobileError=="")
			
					
					
		if($nameError==""&&$categoryError==""&&$passwordError==""&&$registerError==""&&$addressError==""&&$emailError==""&&$mobileError=="")
			{			$a=false;
						require 'PHPMailerAutoload.php';
						$mail = new PHPMailer;

						//$mail->SMTPDebug = 3;                               // Enable verbose debug output

						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = '	webcheck123strt@gmail.com';                 // SMTP username
						$mail->Password = 'web123//';                           // SMTP password
						//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 25;                                    // TCP port to connect to

						$mail->setFrom('webcheck123strt@gmail.com', 'Mailer');
						$mail->addAddress($email, $user);
							 // Add a recipient
						//$mail->addAddress('ellen@example.com');               // Name is optional
						//$mail->addReplyTo('info@example.com', 'Information');
						//$mail->addCC('cc@example.com');
						//$mail->addBCC('bcc@example.com');

						//mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
						//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = 'Here is the subject';


						$mail->Body    = 'Registration has been successful<b>Click the link below</b></br><a href="https://www.google.com" onclick="testi($a)">Please click here</a>';
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

						if(!$mail->send()) {
							echo 'Message could not be sent.';
							echo 'Mailer Error: ' . $mail->ErrorInfo;
						} else {
							echo 'Message has been sent';
						}	
						if($a==true){
						$sql="SELECT * FROM useri";
						$result= $con->query($sql);
						$count=$result->num_rows;
						$id=$count+1;
						$sql="INSERT INTO useri(id,name,password,address,category,registration,email,phone)
						value($id,'".$name."','".$hash."','".$address."','".$category."','".$register."','".$email."','".$mobile."');";
						if($con->query($sql)==TRUE)
						{
							echo "CREATE DATABASE SUCCESSFULLY";
							}
						else
						{
							echo"ERROR:".mysqli_error($con);
						}	
						}

			}
										
		}?> 
		<?php
			function testi($v)
			{

				
				$v= true;
				return $v;
			}

?> <?php


		function validData($data)
		{
           $data=trim($data); 
           $data=stripslashes($data); 
           $data=htmlspecialchars($data);

           return $data;
		}
		?>
         
         <?php
		 
		 
         session_start();
         $_SESSION["username"]="lami";
         $_SESSION["name"]="name";

         //echo $_SESSION["username"];

        ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jollythemes.com/html/jollymedic/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:28:07 GMT -->
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>JollyMedic - Medical, Hospital HTML5 Website Template</title>

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
                    <div class="callout">
                        <span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:name@yoursite.com">name@yoursite.com</a></span>
                        <span class="topbar-phone"><i class="fa fa-phone"></i> Call us: +371 200 55 99</span>
                    </div><!-- end callout -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="topbar_social pull-right">
						<span class="facebook"><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
						<span class="google-plus"><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
						<span class="twitter"><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
						<span class="linkedin"><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
						<span class="skype"><a data-toggle="tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a></span>
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
                    <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="Jollymedic"></a>
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index1.html">Homepage 1</a></li>
                                <li><a href="index2.html">Homepage 2</a></li>
                                <li><a href="index3.html">Homepage 3</a></li>
                                <li><a href="index4.html">Homepage 4</a></li>
                                <li><a href="#">Build your own!</a></li>
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
                        <li><a href="doctors.html">Doctors</a></li>
                        <li><a href="appointment.html">Appointment</a></li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shop </a>
                            <ul class="dropdown-menu" role="menu">
								<li><a href="shop1.html">Shop Fullwidth</a></li>
								<li><a href="shop2.html">Shop with Sidebar</a></li>
								<li><a href="shop-single-sidebar.html">Single Shop Sidebar</a></li>
								<li><a href="shop-single-fullwidth.html">Single Shop Fullwidth</a></li>
								<li><a href="shop-checkout.html">Checkout</a></li>
								<li><a href="shop-cart.html">Shopping Cart</a></li>              
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end standard drop down -->
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu </a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                           <ul class="col-sm-3">
                                                <li><a href="services-one.html">Services Style 1</a></li>
                                                <li><a href="services-two.html">Services Style 2</a></li>
                                                <li><a href="services-three.html">Services Style 3</a></li>
                                                <li><a href="departmens.html">Departments</a></li>
                                                <li><a href="departmen-single.html">Departmen Single</a></li>
												<li><a href="appointment.html">Appointment Form</a></li>
                                                <li><a href="hospital-staffs.html">Hospital Staffs</a></li>
                                                <li><a href="hospital-doctors.html">Hospital Doctors</a></li>
                                                <li><a href="hospital-doctor-single.html">Doctor Single</a></li>
                                           </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="blog-one.html">Blog Style 1</a></li>
                                                <li><a href="blog-two.html">Blog Style 2</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="gallery-one.html">Gallery Style 1</a></li>
                                                <li><a href="gallery-two.html">Gallery Style 2</a></li>
                                                <li><a href="gallery-three.html">Gallery Style 3</a></li>
                                                <li><a href="gallery-four.html">Gallery Style 4</a></li>
                                                <li><a href="gallery-single.html">Gallery Single</a></li>
                                           </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="timeline.html">Hospital Timeline</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="sitemap.html">Sitemap</a></li>
                                                <li><a href="404.html">Not Found</a></li>
                                                <li><a href="faqs.html">FAQs</a></li>
                                                <li><a href="contact.html">Contact us</a></li>
                                                <li><a href="page.html">Page with Sidebar</a></li>
                                                <li><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                           </ul>
                                           <ul class="col-sm-3">
                                                <li><a href="accordion-toggle.html">Accordions</a></li>
                                                <li><a href="buttons.html">Buttons</a></li>
                                                <li><a href="form-elements.html">Form Elements</a></li>
                                                <li><a href="tables.html">Table Elements</a></li>
                                                <li><a href="tabs.html">Tab Elements</a></li>
                                                <li><a href="alerts.html">Alert Elements</a></li>
                                                <li><a href="animate-scripts.html">Animated Counters</a></li>
                                                <li><a href="progress-bars.html">Progress Bars</a></li>
                                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                           </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li><!-- end drop down -->
                        <li class="active"><a href="contact.html">Contact</a></li>
                        <li class="last_item"><a href="http://www.jollythemes.com/html/jollymedic/shop.html"><i class="fa fa-shopping-cart"></i></a></li>
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
                            <li class="active"><a href="#online_form" data-toggle="tab">Signup Form</a></li>
                            <li><a href="#ask_question" data-toggle="tab">Ask Question</a></li>
                        </ul>
                                                
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="online_form">
								    <form method="post"  action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>'>
		
		
		Name:<input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder="Enter name"/>
		<span style="color:red"><?php echo $nameError;?></span>
		
		Address:<input type="text" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Enter address"/>
		<span style="color:red"><?php echo $addressError;?></span>
		
		
		 <label for="select_category">Sign up as</label>   
                        <select class="form-control" name="category" value="<?php echo $category;?>>
                            <span style="color:red"><?php echo $categoryError;?></span>
                            <option>Doctor</option>
                            
                            <option>Genaral</option>
                        </select>

        <br/>

		
		
		Registration number:<input type="text" name="register" class="form-control" value="<?php echo $register;?>" placeholder="Enter register"/>
		<span style="color:red"><?php echo $registerError;?></span>
		
		Password:<input type="password" name="password" class="form-control" value="<?php echo $password;?>"  placeholder="Enter Password"/>
		<span style="color:red"><?php echo $passwordError;?></span>
		
		<!--Gender:<span style="color:red"  ><?php echo $genderError;?></span>
		<br/>
		<input type="radio" name="gender" value="1" <?php if(isset($gender)&& $gender=="1")echo "checked";?>/>
		male
		<input type="radio" name="gender" value="2" <?php if(isset($gender)&& $gender=="2")echo "checked";?>/>
		female
		<br/>-->
		Email:<input type="Email" name="email" class="form-control" value="<?php echo $email;?>"  placeholder"Enter email"/>
		<span style="color:red"><?php echo $emailError;?></span>
		
		Mobile:<input type="Mobile" name="mobile" class="form-control" value="<?php echo $mobile;?>"  placeholder"Enter mobile"/>
		<span style="color:red"><?php echo $mobileError;?></span>
		
		
		<button type="submit" class="btn btn-default">Submit</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<a class="btn btn-primary" href="lg.php">Log In <span class="glyphicon glyphicon-chevron-right"></span></a>
		
		
	</br></br>
	               
			
		 </form> 
                                <div class="clearfix"></div>
                               
                            </div><!-- end online_form -->
                            <div class="tab-pane fade" id="ask_question">
								<form class="clearfix" role="form" id="ask_question_builder">
                                    <input type="text" class="form-control" id="full_name_01" placeholder="Full Name (required)">
                                    <input type="text" class="form-control" id="phone_number_01" placeholder="Phone Number (required)">
                                    <input type="text" class="form-control" id="email_01" placeholder="Email Address (required)">
                                    <textarea class="form-control" name="comments" id="comments_textarea" rows="7" placeholder="Enter your question here.."></textarea>
									<button class="btn pull-right btn-dark">Ask Now</button>
								</form>
                            </div><!-- end ask_question -->
                        </div><!-- end tab-content -->
                    </div><!-- end custom tabbed -->
                </div>
            </div>       
       	</div><!-- end container -->
    </div><!-- end custom_wrapper -->
    
	
    <footer class="footer">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="widget">
                    	<img src="images/flogo.png" alt="JollyMedic" class="flogo img-responsive">
						<p>Quisque et sollicitudin erat. Aenean nulla orci, posuere at molestie et, sagittis a magna. Pellentesque ultricies feugiat arcu, a sagittis dolor adipiscing.</p>
						<p>Cras magna augue, lacinia id purus eu, dictum mattis nunc. Nullam volutpat, urna at pretium pharetra, lectus lacus posuere orci, a varius leo magna a erat. </p>              
                        <div class="social-icons">
                            <span class="facebook"><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                            <span class="google-plus"><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span class="twitter"><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                            <span class="linkedin"><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                        </div><!-- end social icons -->
					</div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="widget">
                        <div class="title">
                           <h3>Latest Tweets</h3>
                        </div><!-- end title -->
                        <ul class="twitter_feed">
                            <li><span></span><h3>Karen Dawson</h3> <p>Jolly Themes wishes you and your family a merry Christmas and a happy new! <a href="#">about 2 days ago</a></p></li>
                            <li><span></span><h3>Karen Dawson</h3> <p>Jolly Themes wishes you and your family a merry Christmas and a happy new! <a href="#">about 9 days ago</a></p></li>
                        </ul><!-- end twiteer_feed --> 
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="widget">
                        <div class="title">
                           <h3>Health Tips</h3>
                        </div><!-- end title -->
                        <ul class="recent_posts_widget">
                            <li>
								<img src="demos/footer_img_01.png" alt="" />
                                <h4><a href="#">Nutritional Personal Consultation with Doctor</a></h4>
                                <span>Feburay 16, 2013</span>
                                <a class="readmore" href="#" title="">View more</a>
                            </li>
                            <li>
                                <img src="demos/footer_img_02.png" alt="" />
                                <h4><a href="#">Center for Medical Technology Innovation</a></h4>
                                <span>Feburay 16, 2013</span>
                                <a class="readmore" href="#" title="">View more</a>
                            </li>
                            <li>
                                <img src="demos/footer_img_03.png" alt="" />
                                <h4><a href="#">Get ore health with ...</a></h4>
                                <span>Feburay 16, 2013</span>
                                <a class="readmore" href="#" title="">View more</a>
                            </li>
                        </ul><!-- recent posts -->  
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	<div class="widget">
                        <div class="title">
                           <h3>Contact Info</h3>
                        </div><!-- end title -->
                        <div class="contact_widget">
                        	<ul>
                            	<li><i class="fa fa-map-marker"></i> 121 King Street, Melbourne Victoria United States of America, CA 90017</li>
								<li><i class="fa fa-envelope-o"></i> <a href="mailto:support@yoursite.com" title="">support@yoursite.com</a></li>
                                <li><i class="fa fa-phone"></i> Phone: (1005) 5999 4446</li>
                            </ul>
                            <div class="newsletter_form_wrapper">
                            	<h4>Subscribe to our newsletter to receive Latest health news, We don't do spam</h4>
								<form action="#" class="newsletter_form">
                                    <input type="text" class="form-control" placeholder="Enter your email address"> 
                                    <a href="#" class="btn btn-primary pull-right">Subscribe</a>    
								</form><!-- end newsletter form -->
                            </div><!-- end newsletter_form -->
                        </div><!-- end contact_widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->    
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
    
    <div class="copyright">
    	<div class="container">
        	<div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="copyright-text">
                        <p>Copyright © 2014 - JollyMedic Designed by JollyThemes</p>
                    </div><!-- end copyright-text -->
                </div><!-- end widget -->
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="footer-menu">
                        <ul class="menu pull-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Appointments</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div><!-- end large-7 --> 
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop">Scroll to Top</div>
    
	<!-- Main Scripts-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
  	<script src="js/menu.js"></script>
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/custom.js"></script>

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

	<!-- CAROUSEL WIDGET -->
	<script src="js/owl.carousel.min.js"></script>
	<script>
		(function($) {
		  "use strict";
			// OWL Carousel
			$("#owl-testimonial").owlCarousel({
				items : 1,
				lazyLoad : true,
				navigation : false,
				pagination : true,
				autoPlay: false
			});
			$("#owl-blog").owlCarousel({
				items : 2,
				lazyLoad : true,
				navigation : true,
				pagination : false,
				autoPlay: false
			});
		})(jQuery);
	</script>
        
</body>

<!-- Mirrored from jollythemes.com/html/jollymedic/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2017 15:28:22 GMT -->
</html>