<?php
           include "init.php"; //server connector
          
            
 ?>

<?php


		$name=$category=$password=$register=$email=$address=$kl=$hash="";
		$nameError=$categoryError=$passwordError=$registerError=$emailError=$addressError="";
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
			{$email=validdata($_POST["email"]);
				$sql="SELECT * FROM useri where email='$email';"; 
				$result=$con->query($sql);
				if($result->num_rows>0)
				{
					$emailError="user already exist";
				}
				
				
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false && preg_match('/@.+\./', $email)) {
				//  echo("$email is a valid email address");
				} else {
				  $emailError="$email is not a valid email address";
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
			
			
			if($nameError==""&&$categoryError==""&&$passwordError==""&&$registerError==""&&$addressError==""&&$emailError=="")
			{

				$sql="SELECT * FROM useri";
				$result=$con->query($sql);
				$count=$result->num_rows;
				$id=$count+1;
				$kl= 0;
				$sql="INSERT INTO useri(id,name,password,address,category,registration,email,chk)
				value($id,'".$name."','".$hash."','".$address."','".$category."','".$register."','".$email."','".$kl."');";
				if($con->query($sql)==TRUE)
				{ $em=$email;
         session_start();
		
         $_SESSION["nm"]=$em;
					
					echo "To make registration successful check your email please ";
					//include 'ver.php';
					
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


$mail->Body    = 
'For making the registration successful click the link<b>Click the link:</b></br><a href="http://givebd.byethost17.com/givebd/ver.php></a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'a link has been sent there ';
}	

				}
				else
				{
					echo"ERROR:".mysqli_error($con);
				}
				$valid = true;
			}
		}?> 
		<?php
			//$email ;

			//if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			//  echo("$email is a valid email address");
			//} else {
			//  echo("$email is not a valid email address");
			//}

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
		 
		 
        
		//session_start();
         //$_SESSION["username"]="lami";
        // $_SESSION["name"]="name";

        // echo $_SESSION["nm"];

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

	<div id="three-parallax" class="nopadding parallax" style="background-image: url('demos/sliderbg_01.png');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
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
                            
                            <option>General</option>
                        </select>

        <br/>

		
		
		Registration number:<input type="text" name="register" class="form-control" value="<?php echo $register;?>" placeholder="Enter registration(if Doctor)"/>
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
		Email:<input type="Email" name="email" class="form-control" value="<?php echo $email;?>"  placeholder="Enter email"/>
		<span style="color:red"><?php echo $emailError;?></span>
		
		
		
		
		<button type="submit" class="btn btn-default">Submit</button>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		<a class="btn btn-primary" href="log.php">Log In <span class="glyphicon glyphicon-chevron-right"></span></a>
		
		
	</br></br>
	               </div></div>
			
		


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