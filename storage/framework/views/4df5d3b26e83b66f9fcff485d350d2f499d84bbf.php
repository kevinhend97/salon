<?php $__env->startSection('title'); ?>Layanan <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- services -->
<div class="practice-areas">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Services</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div class="area-main">
				<div class="col-md-6 area-inner">
					<div class="area-img1">
					</div>
					<div class="area-right p1">
						<h5>FACIAL</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-img2">
					</div>
					<div class="area-right p2">
						<h5>MAKEUP</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
				</div>
			</div>
			<div class="area-main">
				<div class="col-md-6 area-inner">
					<div class="area-right p3">
						<h5>NAIL CARE</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="area-img3">
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-right p4">
						<h5>HAIR CARE</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="area-img4">
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- //services -->
	<!-- wthree-mid -->
	<div class="wthree-mid jarallax">
		<div class="container">
			<h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
			<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
			<div class="botton">
				<a href="#">About Us</a>
			</div>
		</div>
	</div>
<!-- //wthree-mid -->

	<!-- about-top -->
	<div class="agileits-about-top">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Services <span>Overview </span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div class="agileinfo-top-grids">
				<div class="col-sm-4 wthree-top-grid">
					<img src="<?php echo e(asset('homepage/images/p11.jpg')); ?>" class="img-responsive" alt="" />
					<h4>Hot Stone Therapy</h4>
					<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</div>
				<div class="col-sm-4 wthree-top-grid">
					<img src="<?php echo e(asset('homepage/images/p4.jpg')); ?>" class="img-responsive" alt="" />
					<h4>Hair Coloring</h4>
					<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</div>
				<div class="col-sm-4 wthree-top-grid">
					<img src="<?php echo e(asset('homepage/images/p5.jpg')); ?>" class="img-responsive" alt="" />
					<h4>Facial Treatment</h4>
					<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-top -->

	<!-- Modal1 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Beauty Salon</h4>
					<img src="<?php echo e(asset('homepage/images/11.jpg')); ?>" alt=" " class="img-responsive">
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