<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Salon Violet - <?php echo $__env->yieldContent('title'); ?></title>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->

	<!-- Style Sheets -->
	<link href="<?php echo e(asset('homepage/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->

	<link href="<?php echo e(asset('homepage/css/font-awesome.css')); ?>" rel="stylesheet">
	<!--// Font-Awesome-CSS -->

	<link rel="stylesheet" href="<?php echo e(asset('homepage/css/owl.carousel.css')); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo e(asset('homepage/css/flexslider.css')); ?>" type="text/css" media="screen" property="" />
	<!--// Owl-Carousel-CSS -->

	<link href="<?php echo e(asset('homepage/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<!--// web-fonts -->

	<?php echo $__env->yieldContent('css'); ?>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax" id="home">
		<header>
			<div class="container">
				<div class="header-bottom-agileits">
					<div class="w3-logo">
						<h1><a href="<?php echo e(url('/')); ?>">Salon Violet</a></h1>
					</div>
					<div class="address">
						<p>Jalan Jend. Soedirman 160.</p>
						<p class="para-y"><a href="<?php echo e(url('/about')); ?>">Dapatkan Info Lengkapnya</a></p>
					</div>
					<div class="nav-contact-w3ls">
						<p>+62 1111 2222 333<span class="fa fa-phone" aria-hidden="true"></span></p>
						<p class="para-y"><a href="mailto:info@example.com">info@example.com</a><span class="fa fa-envelope-o" aria-hidden="true"></span></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</header>
		<!-- navigation -->
	<div class="nav-bg">
		<div class="container">
			<nav class="navbar navbar-default shift">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a class="active" href="<?php echo e(url('/')); ?>">Home</a></li>
						<li><a href="<?php echo e(url('about')); ?>">Tentang Kami</a></li>
						<li><a href="<?php echo e(url('/service')); ?>">Layanan</a></li>
						<li><a href="<?php echo e(route('reservation.index')); ?>">Reservasi</a></li>
						<li><a href="<?php echo e(url('/gallery')); ?>">Galeri</a></li>
						<li><a href="<?php echo e(url('/contact')); ?>">Kontak</a></li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //navigation -->
		<div class="container">
			<!-- header -->
			<!-- //header -->
			<div class="agileits_w3layouts_banner_info">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="banner-text-w3-agileits">
										<h5>Experienced hair stylists </h5>
										<h2>Enjoy Professional Beauty Services!</h2>
										<p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
										<div class="botton">
											<a href="<?php echo e(url('/contact')); ?>">Contact Now</a>
										</div>
									</div>
								</li>
								<li>
									<div class="banner-text-w3-agileits">
										<h5>The best and fastest service</h5>
										<h2>Are You Planning to Pamper Yourself?</h2>
										<p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
										<div class="botton">
											<a href="<?php echo e(url('/contact')); ?>">Contact Now</a>
										</div>
									</div>
								</li>
								<li>
									<div class="banner-text-w3-agileits">
										<h5>Experienced hair stylists </h5>
										<h2>Enjoy Professional Beauty Services!</h2>
										<p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
										<div class="botton">
											<a href="<?php echo e(url('/contact')); ?>">Contact Now</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	<?php echo $__env->yieldContent('content'); ?>

	<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid">
					<h2>Contact <span>Information</span></h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>Jalan Jendral Soedirman, Cilacap Selatan <label> Kota Cilacap.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +62 1111 2222 333</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>Ikuti <span>Info dan Promosi Kami</span></h2>
					<p>Dapatkan Info, tips dan promosi kami dengan mengisi e-mail.</p>
					<form action="<?php echo e(route('suscribe.store')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<input type="email" name="email" placeholder="Masukkan E-mail" required="">
						<button type="submit" class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Recent <span>Works</span></h3>
					  <ul class="con_inner_text midimg">
						
				     </ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<p class="copyright">© 2019 Salon Violet. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!-- //smooth scrolling -->
	<script type='text/javascript' src="<?php echo e(asset('homepage/js/jquery-2.2.3.min.js')); ?>"></script>
	<!-- start-smoth-scrolling -->

	<!--js for bootstrap working-->
	<script src="<?php echo e(asset('homepage/js/bootstrap.js')); ?>"></script>
	<!-- //for bootstrap working -->

	<?php echo $__env->yieldContent('script'); ?>
</body>
</html>