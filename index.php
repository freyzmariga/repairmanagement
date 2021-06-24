<?php
session_start();
error_reporting(0);

include('admin/includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mariga Repairing System | Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css1/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="screen" property="" />
<!--// css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css1/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>

>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<?php
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
						<div class="banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php  echo $row['PageDescription'];?>.</p>
						</div>

						<div class="banner-address-left right">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +<?php  echo $row['MobileNumber'];?></p>
						</div>

						<div class="clearfix"> </div>
						<?php } ?>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Mariga Repairing System</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>

							<li><a href="user/login.php">Users</a></li>
							<li><a href="technician/login.php">Technician</a></li>
							<li><a href="admin/login.php">Admin</a></li>
							<li><a href="reviews/index.php">Reviews</a></li>
							<li><a href="services.php">Services</a></li>
						</ul>

						<div class="clearfix"> </div>
					</nav>
				</div>
			</nav>


				</div>
			</div>
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Mariga Repairing & Services </h3>
										<p>The Home of Best Repair</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>The Place to be</h3>
										<p>At Affordable price</p>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>Tools & Specialist Equipment</h3>
										<p>The Best in Town</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->


	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_heading_section">
				<?php
 $query=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
				<h3 class="wthree_head"><?php  echo $row['PageTitle'];?></h3>
				<p class="agileits_w3layouts_para w3_agile_para"><?php  echo $row['PageDescription'];?></p>
			</div>
			<?php } ?>

		</div>

	</div>
<!-- //banner-bottom -->

	<!-- footer -->
<div class="footer">
		<div class="container">
		<h2 class="wthree_head"> Mariga Repairing System</h2>
				<p class="agileits_w3layouts_para w3_agile_para">.</p>


			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">

					<div class="col-md-4 w3agile_footer_grid">
						<?php
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
						<h3>Contact Info</h3>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php  echo $row['PageDescription'];?></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><?php  echo $row['Email'];?></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+<?php  echo $row['MobileNumber'];?></li>
						</ul>
						<?php } ?>
					</div>



					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Quick Links</h3>
						<ul>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="index.php">Home</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="user/login.php">Users</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="technician/login.php">Technicians</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="admin/login.php">Admin</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="reviews/index.php">Reviews</a></li>
							<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="servicess.php">Services</a></li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Mariga Repairing</h3>
						<img src="" alt="">

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

		</div>

	</div>
<!-- //footer -->
<!-- copy-right -->
	<div class="w3_agileits_copy_right_social">
		<div class="container">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>© 2021 Mariga Repairing System</p>
			</div>
			<div class="col-md-6 w3_agile_copy_right">
				<ul class="agileinfo_social_icons">
					<li><a href="Godfrey mariga.facebook.com" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/home" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="freyzmariga@gmail.com" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- //copy-right -->
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/bootstrap.js"></script>
<!-- //here ends scrolling icon -->
</body>
</html>
