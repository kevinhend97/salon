
<?php $__env->startSection('title'); ?>Gallery <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('homepage/css/lightbox.css')); ?>"><!-- For-gallery-CSS -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--gallery-->
	<div class="gallery">
		<div class="container">	
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Gallery</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p1.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p1.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p2.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p2.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p3.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p3.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p4.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p4.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p5.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p5.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p6.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p6.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p7.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p7.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p8.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p8.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p9.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p9.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p10.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p10.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p11.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p11.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="<?php echo e(asset('homepage/images/p12.jpg')); ?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="<?php echo e(asset('homepage/images/p12.jpg')); ?>" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
</div>
<!--//gallery-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	
	<script src="<?php echo e(asset('homepage/js/jarallax.js')); ?>"></script>
	<script src="<?php echo e(asset('homepage/js/lightbox-plus-jquery.min.js')); ?>"></script>

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