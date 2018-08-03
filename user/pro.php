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
<title>Around Bangladesh</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hangout  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="style3.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->

<!--extra-->
<!--// css -->
<link rel="stylesheet" href="css/ken-burns.css">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />


<!-- font -->
<link href="//fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript" src="script2.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			
	</script>
			<script type="text/javascript">
    setTimeout(function() { window.location.href = "logout.php"; }, 60000 * 1);
</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<!-- //swipe box js -->

<!-- sidev js -->

</head>
<body style="background-color:white" data-spy= "scroll" data-target = "#uffjhamela">

	<!--navigation bar
	<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"><br>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><b><wh>AR<i class="fa fa-tint"></i>UND BANGLADESH</a></b></wh>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="">LOGOUT</wh></a></li>
                   
                </ul>
            </div>
        </div>
    </div>
     <!--END-->
	 
	 
	 <br><Br><Br>
	 
	 
<div class="container">
	<div class = "row">
	
		<div class="col-md-3" id = "uffjhamela">
			<div class="profile-sidebar" data-spy = "affix">
				<!-- SIDEBAR USERPIC --><br><br><br><br><br>
				<div class="profile-userpic">
					<img src="getimage.php" class="img-responsive" alt="im.png">
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
				<br><br>
					<h1><center>User Account</center></h1>
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
				  ?>
						</h4>		
					
							
</br></br></br></br>
					</div>
					</wow>
					<div class="clearfix"></div>
				</div>
			<br><br>
