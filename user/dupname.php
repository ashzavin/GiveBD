<?php

session_start();

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
    <script src="js/respond.min.js"></script>  <![endif]-->
	
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
						
						
						<a href="http://givebd.byethost17.com/givebd/pro.php"><i class="fa fa-user"></i> Profile</a>
						
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
                        
   
						<li class="dropdown"><a id="active" href="#" data-toggle="dropdown" class="dropdown-toggle">Medicine Catagory</a>

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
				<h2>Available Medicine</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li style="font-size: 20px;">Medicine Category</li>
                </ul>
			</div>
		</div>
	</div><!-- end post-wrapper-top -->
	
	<!--Navbar Ends-->

	
	
	<!--Main Body Start-->
	
	
	<!--Side Bar Starts-->

	<div class="white-wrapper">
    	<div class="container">
		
		<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            	<div class="widget">
                	<div class="title">
                    	<form action="prac.php"><h2><button type="submit" class="btn btn-primary" style="position:relative; ">Generate Prescription</button></h2></form>
                    </div><!-- end title -->
					<ul class="recent_posts_widget">
                        <li class="a1">
						<i class="fa fa-star"  style="color: #17C5FF; margin-left:20px;"></i><a href="pre.php"  data-filter=".cardiac">   See Selected Medicines</a><br>
					    <i class="fa fa-star"  style="color: #17C5FF; margin-left:20px;"></i><a href="prescription.php" data-filter=".outpatient">   All Prescriptions</a><br>
						<i class="fa fa-star"  style="color: #17C5FF; margin-left:20px;"></i><a href="http://givebd.byethost17.com/givebd/pro.php" data-filter=".pediatric">   Go to Profile</a><br>
                        </li>
						
						
						
						<ul class="nav nav-tabs">
                            <li class="active"><a href="#recent" data-toggle="tab">RECENT</a></li>
                            <li><a href="#new" data-toggle="tab">DONOR</a></li>
                          
                        </ul>
						
                        <li> 
                            <a href="#"><img src="demos/client_01.jpg" alt="" />Ashratuz Zavin Asha</a>
                            <a class="readmore_widget" href="#">Last Donation Date: Feburay 16, 2017</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            </div><!-- rating -->
                        </li>
						
						 <li> 
                            <a href="#"><img src="demos/client_02.jpg" alt="" />Nafin Shawon</a>
                            <a class="readmore_widget" href="#">Last Donation Date: August 25, 2016</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	 <i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                        </li>
						
						 <li> 
                            <a href="#"><img src="demos/client_01.jpg" alt="" />Lameya Afroz</a>
                            <a class="readmore_widget" href="#">Last Donation Date: January 03, 2017</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star-o"></i>
                            	<i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                        </li> 
					</ul><!-- recent posts -->  
                </div><!-- end widget -->
            </div><!-- end sidebar -->
			
		
<!--Php for medicine display-->
		
		<?php
          
			include "dbConnecta.php";
            
			$sql_query = "select generic,company,date,sum(quantity) as total,image,reserve from received group by generic;";
			
			$result = mysqli_query($con,$sql_query);
	
			$generic=array();
			$company=array();
			$date = array();
			$quantity=array();
			$image=array();
			$reserve=array();
			$difference=array();
			
			
			$i=0;
			$j=0;
			$sum=0;
			while( $row = mysqli_fetch_array($result)) 
				 
			 {  
			 
             $generic[]=$row["generic"];	
			 $company[]=$row["company"];
			 
             $date[]=$row["date"];	
			 //$sum=$sum+$row["quantity"];
			 $quantity[]=$row["total"];
			 $image[]=$row["image"];
			 $reserve[]=$row["reserve"];
			 $difference[]=$row["total"]-$row["reserve"];
			 
				$i=$i+1;
			  
			 }
			 $n=$i-1;
			 //echo "fail";
			 
			 //for ($i=0;$i<=$n;$i++)
			 //{
				 //echo "$image[$i] <br>";
				  //echo "$quantity[$i] <br>";
			 //}
		
			?>			
			
<!--Php ends for medicine display-->	



<!--Php for medicine search-->	
			<?php
			    include "dbConnecta.php";
				if(isset($_GET['search'])){
					
					if(empty($_GET['query'])){
						
					}
					
					$mix=$_GET["mix"];
					$mix = ucfirst($mix);
			

					$sql_query = "select generic,company,date,sum(quantity) as total,image,reserve from received where generic like '$mix' or company like '$mix' group by generic;";
					
					$result = mysqli_query($con,$sql_query);
			
					$g=array();
					$c=array();
					$d = array();
					$q=array();
					$im=array();
					$re=array();
					$diff=array();
					
					$j=0;
					$sum=0;
					while( $row = mysqli_fetch_array($result)) 
						 
					 {  
					 
					 $g[]=$row["generic"];	
					 $c[]=$row["company"];
					 
					 $d[]=$row["date"];	
					 //$sum=$sum+$row["quantity"];
					 $q[]=$row["total"];
					 $im[]=$row["image"];
					 $re[]=$row["reserve"];
					 $diff[]=$row["total"]-$row["reserve"];
					 
						$j=$j+1;
					  
					 }
					 $n=$j-1;
					 
				

				
				}
			?>

<!--Php ends for medicine search-->	


<!--Medicine search starts-->		
		
    		<div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<?php

include "aa2.html";
?>
 
            <div class="input-group" id="boot-search-box">
 
                <form method="get" action=""><input type="text" name="mix" class="form-control" placeholder="Search using generic name or company name" />
				
				
				<button type="submit" name="search" class="btn btn-primary btn-block">Search :: <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> </form>
				
          </div>
 
<!--Medicine search starts-->	
	
	

<!--Medicine display starts-->				
			
        <div class="big-title clearfix">
                   
                    
                </div><!-- end big title -->	
                
                <div class="grid_gallery row">
				
				 
		<?php
          
			include "init.php";
            
			while($j>0) 
			{
				
				echo ' <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cardiac">
                        <div class="gallery_item">
                        <div class="entry">
                            <img src="'.$im[$j-1].'" alt="" class="img-responsive" style="width:20px; Height: 150px;">
                            <div class="magnifier custom-magnifier">
							<div style="margin-left:70px; margin-top:30px;">
                              <form action="" autocomplete="off">
								  <input style="margin-left:05px;" type="checkbox" name="med" value="'.$g[$j-1].'">Select it<br>
								  <input style="width: 85px;" type="number" name="quantity" placeholder="Qunatity" max=10 min=1 ><br>
								   <input style="width: 85px; margin-top:5px;" type="text" name="dose" placeholder="Dose"><br>
								  <input style="margin-left:25px; margin-top:5px;" type="submit" name="ok" value="OK"></form></div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        </div><!-- end gallery item -->
						<h5 style="margin-left:50px; margin-top: -10px; margin-bottom:25px;">'.$g[$j-1].'<h5>
						<h5 style="font-size:15px; margin-left:50px; margin-top: -40px; margin-bottom:25px;">Qunatity: '.$diff[$j-1].'<h5>
                    </div><!-- end col -->';
			
	            
		       $j=$j-1;
			 }
			 
			 
			
			 
			while( $i>0) 
				 
			 {   
			 
			 echo ' <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 cardiac">
                        <div class="gallery_item">
                        <div class="entry">
                            <img src="'.$image[$i-1].'" alt="" class="img-responsive" style="width:20px; Height: 150px;">
                            <div class="magnifier custom-magnifier">
							<div style="margin-left:70px; margin-top:30px;">
                              <form action="" autocomplete="off">
								  <input style="margin-left:05px;" type="checkbox" name="med" value="'.$generic[$i-1].'">Select it<br>
								  <input style="width: 85px;" type="number" name="quantity" placeholder="Qunatity" max=10 min=1 ><br>
								  <input style="width: 85px; margin-top: 5px;" type="text" name="dose" placeholder="Dose"><br>
								  <input style="margin-left:25px; margin-top:5px;" type="submit" name="ok" value="OK"></form></div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        </div><!-- end gallery item -->
						<h5 style="margin-left:50px; margin-top: -10px; margin-bottom:25px;">'.$generic[$i-1].'<h5>
						<h5 style="font-size:15px; margin-left:50px; margin-top: -40px; margin-bottom:25px;">Qunatity: '.$difference[$i-1].'<h5>
                    </div><!-- end col -->';
			
	       
		       $i=$i-1;
			 }
			 
			 
		
			?>
				
				
   
                </div><!-- end grid_gallery -->
				
				
				
                <div class="clearfix"></div>  
            </div><!-- end content -->
    	</div><!-- end container -->
    </div><!-- end white-wrapper -->
	
<!--Medicine display starts-->
	
    
<!--Medicine selection php-->
			<?php
			    include "init.php";
				include "connect.php";
				
				$pp=0;
				if(isset($_GET['ok'])){
					$pp++;
					
					
					
					if(empty($_GET['query'])){
						//echo "Enter a search term";
					}
					
					
					$name=$_GET["med"];
					$company=$_GET["quantity"];
					$dose=$_GET["dose"];
					$email = $_SESSION["nm"];
					
					//echo "$email";
					
					
					$sql2 = "select quantity,reserve from received where generic like '$name';";
				    $result = mysqli_query($con1,$sql2);
					
					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
						$quan=$row["quantity"];	
						$reserve=$row["reserve"];
//$reserve=$reserve+$company;

					 }
					
					$diff=$quan-$reserve;
					//echo "$diff";
					
					
					
					
					
					
					
					$rowcount=0;
					$sql="SELECT * from prescription where doctor_id like '$email';";

					if ($result=mysqli_query($con,$sql))
					{
					 
					  $rowcount=mysqli_num_rows($result);
					  mysqli_free_result($result);
					}
					
					//echo "$rowcount";
					
				if("$rowcount"<=3)
				{

					
					
				
					
				$sql_query = "select medname from precribed;";
				$result = mysqli_query($con,$sql_query);
					
				$flag=0;
				if(mysqli_num_rows($result)>0){

					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
						$medname=$row["medname"];	
						if($medname==$name)
							$flag=1;
						
						//echo "$email";

					 }
					 
					 
					if($flag==0){
						
					
					
						if($company <= $diff){
						$sql_query = "insert into precribed (medname,quantity,doctor_id,dose) values('$name','$company','$email','$dose');";  
						
						if(mysqli_query($con,$sql_query))
						{
							$message = "$name medicine is prescribed";
							echo "<script type='text/javascript'>alert('$message');</script>";
							//include "appointment.html";
						  
						}
						else
						{
							echo "<h3>NOOOOOOOO...</h3>"; 
							
					
						}
						
						$nn=$company+$reserve;
						$sql1 = "update received set reserve='$nn' where generic='$name';";  
						
						if(mysqli_query($con1,$sql1))
						{
							
						   
						}
						else
						{
							echo "<h3>NOOOOOOOO...</h3>"; 
							echo "$name";
							
					
						}
						
						}
						
						else {
							echo '<div style="color: red; font-weight:bold; padding-left: 600px;  padding-bottom: 50px;">

									<h1>Medicine Already Exists</h1>		
		
												</div>';
							
						}
						
				
					 }
					
				}
				
				else
				{
					
					if($company <= $diff){
					$sql_query = "insert into precribed (medname,quantity,doctor_id,dose) values('$name','$company','$email','$dose');";  
						
						if(mysqli_query($con,$sql_query))
						{
					
						  $message = "$name medicine is prescribed";
							echo "<script type='text/javascript'>alert('$message');</script>";
							//include "appointment.html";
						}
						else
						{
							echo "<h3>NOOOOOOOO...</h3>"; 
							
					
						}
						
						$nn=$company+$reserve;
						$sql1 = "update received set reserve='$nn' where generic='$name';";  
						
						if(mysqli_query($con1,$sql1))
						{
							
						  
						}
						else
						{
							echo "<h3>NOOOOOOOO...</h3>"; 
							echo "$name";
							
					
						}
						
					}
					
					else {
							echo '<div style="color: #E60F65; font-weight:bold; padding-left: 400px; padding-top: 40px; padding-bottom: 50px;">

												<h1>Medicine Quantity Beyond Limit </h1>		
		
										</div>';
							
						}
						
				}
					
			}
				
				
				else
					{
						include "new.php";
					}
				}
			?>

	
<!--Medicine selection php ends-->	

<input type="button" name="update" value="Sumbit" onClick="setUpdateAction();" /> 
	
	
	
	
	
	
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