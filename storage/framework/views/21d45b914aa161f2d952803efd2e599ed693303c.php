<?php $__env->startSection('title'); ?>Booking <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="w3ls-section wthree-pricing" id="pricing">	
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Booked <span>Now</span></h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
		</div>
		<form action="" id="regForm">
			
			<div style="overflow:auto;">
  				<div style="float:right;">
    				<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    				<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  				</div>
			</div>

			<!-- Circles which indicates the steps of the form: -->
			<div style="text-align:center;margin-top:40px;">
  				<span class="step"></span>
  				<span class="step"></span>
  				<span class="step"></span>
  				<span class="step"></span>
			</div>
			<?php echo $__env->make('partialBooking', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="clearfix"> </div> 
			<!--End-slider-script-->
		</form>
			
		</div>
	</div>	
</div>	
<!--//pricing-->
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