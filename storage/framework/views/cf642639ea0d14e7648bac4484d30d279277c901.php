<?php $__env->startSection('title'); ?> Kontak Kami <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Contact <span>Us</span></h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
				and skin care services will suit every beauty need.</p>
			</div>		
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-4 drop-pad sign-gd-two">
					<h3>Contact Us</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> Jalan Jend. Soedirman 160, Tegalreja,
 <span>Kota Cilacap.</span></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +62 1111 2222 333</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
					<h3 class="connect">Get Connected</h3>
					<ul class="top-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-8 contact-w3ls">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5843008095294!2d108.99620691477774!3d-7.72766969442994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e651284d93ca8cd%3A0xb1d28e9cc3f7212e!2sViolet+Salon!5e0!3m2!1sid!2sid!4v1549453067585" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>