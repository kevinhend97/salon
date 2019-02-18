@extends('layouts.default')
@section('title')Homepage @stop
@section('css')
@stop
@section('content')
	<!-- Modal1 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Salon Violet</h4>
					<img src="{{ asset('homepage/images/11.jpg') }}" class="img-responsive">
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

	<!-- Latest News -->
	<div class="practice-areas">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Layanan <span>Kami</span></h3>
				<p>Manjakan diri Anda dengan perawatan rambut 
dan layanan perawatan lainnya yang sesuai dengan setiap kebutuhan kecantikan anda.</p>
			</div>
			<div class="area-main">
				<div class="col-md-6 area-inner">
					<div class="area-img1">
					</div>
					<div class="area-right p1">
						<h5>FACIAL</h5>
						<p class="para-w3-agile">Rasakan perawatan wajah yang nyaman dan sesuai pada kulih wajah untuk penuhi kebutuhan cantik anda.</p>
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-img2">
					</div>
					<div class="area-right p2">
						<h5>MAKEUP</h5>
						<p class="para-w3-agile">Jadikan dirimu Tercantik dengan riasan dan sentuhan terbaik kami yang sudah berpengalaman dengan Penata Rias yang sudah Profesional dan terbaik di bidangnya.</p>
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
	<!-- //Latest News -->

	<!-- wthree-mid -->
	<div class="wthree-mid jarallax">
		<div class="container">
			<h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
			<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
			<div class="botton">
				<a href="{{ url('/about') }}">Tentang Kami</a>
			</div>
		</div>
	</div>
<!-- //wthree-mid -->
	<!-- pricing -->
	<div class="w3ls-section wthree-pricing" id="pricing">	
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Packages <span>Pricing</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div class="pricing-grids-info">
								<div class="pricing-grid grid-one">
									<div class="w3ls-top">
										<h3>Basic</h3> 
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Hair Extension</li>
											<li>Makeup Application</li>
											<li>Facial</li>
											<li>Nails</li>
											<li>Styling</li>
										</ul>
										<h4> 200<span class="sup">$</span> </h4>
										<div class="more">
											<a href="contact.html">Contact Now</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-two">
									<div class="w3ls-top">
										<h3>Classic</h3> 
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Hair Extension</li>
											<li>Makeup Application</li>
											<li>Facial</li>
											<li>Nails</li>
											<li>Styling</li>
										</ul>
										<h4> 350<span class="sup">$</span> </h4>
										<div class="more">
											<a href="contact.html">Contact Now</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-three">
									<div class="w3ls-top">
										<h3>Gold</h3> 
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Hair Extension</li>
											<li>Makeup Application</li>
											<li>Facial</li>
											<li>Nails</li>
											<li>Styling</li>
										</ul>
										<h4> 500<span class="sup">$</span> </h4>
										<div class="more">
											<a href="contact.html">Contact Now</a>				
										</div>
									</div>
								</div>
								<div class="zb pricing-grid grid-four">
									<div class="w3ls-top">
										<h3>Platinum</h3> 
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Hair Extension</li>
											<li>Makeup Application</li>
											<li>Facial</li>
											<li>Nails</li>
											<li>Styling</li>
										</ul>
										<h4> 800<span class="sup">$</span> </h4>
										<div class="more">
											<a href="contact.html">Contact Now</a>				
										</div>
									</div>
								</div>
								<div class="clearfix"> </div> 
				<!--End-slider-script-->
			</div>
		</div>	
	</div>	
	<!--//pricing-->
<!-- counter -->
	<div class="services-bottom stats services jarallax">
	<div class="banner-dott1">
		<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header two">Our <span>Statistics</span></h3>
				<p class="tho">Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
		  <div class="wthree-agile-counter">
		  <div class="col-md-3 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">324</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Services</h4>
			</div>
		</div>
		<div class="col-md-3 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">543</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Happy Clients</h4>
			</div>
		</div>
		<div class="col-md-3 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">434</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>People Loved</h4>
			</div>
		</div>
		<div class="col-md-3 w3_agile_stats_grid-top">
			<div class="w3_agile_stats_grid">
				<div class="agile_count_grid_left">
					<span class="fa fa-trophy" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">234</p> 
				</div>
				<div class="clearfix"> </div>
				<h4>Win Awards</h4>
			</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
</div>
<!-- //counter -->
	<!-- Clients -->
	<div class="clients-main" id="clients">
		<div class="container">
			<!-- Owl-Carousel -->
			<div class="wthree_head_section">
				<h3 class="w3l_header">What <span>People Say</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div id="owl-demo" class="owl-carousel text-center clients-right">
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>John Smith</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Jecy Deoco</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Devid Fahim</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Honey Jisa</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Jecy Deoco</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Devid Fahim</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
	<!--// Clients -->
@stop
@section('script')
<script src="{{ asset('homepage/js/jarallax.js') }}"></script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<!-- flexSlider -->
				<script defer src="{{ asset('homepage/js/jquery.flexslider.js') }}"></script>
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
	<script src="{{ asset('homepage/js/owl.carousel.js') }}"></script>
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

	<script type="text/javascript" src="{{ asset('homepage/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('homepage/js/easing.js') }}"></script>
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
	<script src="{{ asset('homepage/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('homepage/js/jquery.countup.js') }}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->




@stop