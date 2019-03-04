
<?php $__env->startSection('title'); ?>About Us <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- about -->
<div class="about">
	<div class="container">
	<div class="wthree_head_section">
				<h3 class="w3l_header">About <span>Us</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
		<div class="ab-agile">
			<div class="col-md-6 aboutleft">
				<h3>Welcome to Salon</h3>
				<p class="para1">Donec bibendum velit quis diam venenatis, vulputate aliquam sapien blandit. 
				Etiam dui massa, vehicula a convallis a, facilisis vitae neque.Pellentesque sit amet 
				odio quis libero eleifend congue at ac justo. Suspendisse posuere congue accumsan Vulputate aliquam sapien. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
				</div>
			<div class="col-md-6 aboutright">
				<img src="<?php echo e(asset('homepage/images/p1.jpg')); ?>" class="img-responsive" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- wthree-mid -->
	<div class="wthree-mid jarallax">
		<div class="container">
			<h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
			<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
	</div>
<!-- //wthree-mid -->

<!-- Team section -->
<section class="team" >
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Team</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
		<div class="team-grid-top">
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="<?php echo e(asset('homepage/images/t1.jpg')); ?>" />
				<h3>Selena</h3>
				<h4>Stylist</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="<?php echo e(asset('homepage/images/t3.jpg')); ?>" alt="" />
				<h3>Mary louis</h3>
				<h4>Hairstylist</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="<?php echo e(asset('homepage/images/t2.jpg')); ?>" alt="" />
				<h3>Paul kerry</h3>
				<h4>Beautician</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="<?php echo e(asset('homepage/images/t4.jpg')); ?>" alt="" />
				<h3>john watson</h3>
				<h4>Cosmetologist</h4>
				<p>Lorem ipsum dolor sit amet, Phasselleous carnivel dolor</p>
					<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</section>
<!-- //Team section -->

<!-- Modal1 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Beauty Salon</h4>
					<img src="images/11.jpg" alt=" " class="img-responsive">
					<h5>Neque porro quisquam est qui dolorem </h5>
					<p>Ut in ligula sollicitudin, auctor elit vel, mollis tortor. Nullam id magna in eros mollis porttitor vel et eros.Phasellus
						sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros
						tortor, ultrices in lectus quis, aliquet commodo lectus.Donec eros tortor, ultrices in lectus quis, aliquet commodo
						lectus.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('homepage/js/jarallax.js')); ?>"></script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<!-- flexSlider -->
				<script defer src="<?php echo e(asset('homepage/js/jquery.flexslider.js')); ?>"></script>
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

<!-- Owl-Carousel-JavaScript -->
	<script src="<?php echo e(asset('homepage/js/owl.carousel.js')); ?>"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 2,
				lazyLoad: true,
				autoPlay: false,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<script type="text/javascript" src="<?php echo e(asset('homepage/js/move-top.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('homepage/js/easing.js')); ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->

	<script type="text/javascript">
		$(document).ready(function () {
			

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- stats -->
	<script src="<?php echo e(asset('homepage/js/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('homepage/js/jquery.countup.js')); ?>"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>