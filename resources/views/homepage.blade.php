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
						<p class="para-w3-agile">Percantik kukumu dengan potongan dan riasan cantik dari kami</p>
					</div>
					<div class="area-img3">
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-right p4">
						<h5>HAIR CARE</h5>
						<p class="para-w3-agile">Perawatan rambut yang cocok untuk mempercantikmu</p>
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
			<h3>Tentang Salon Violet</h3>
			<p>Salon Violet berdiri sejak tahun 2008, kami menyediakan galeri foto agar anda dapat melihat beberapa hasil pekerjaan kami.</p>
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
				<h3 class="w3l_header">Harga <span>Paket</span></h3>
				<p>Percantik diri dengan perawatan kami yang sudah kami sediakan untuk rambut cantikmu.</p>
			</div>
			<div class="pricing-grids-info">
							@foreach($paket as $data)
								<div class="pricing-grid grid-one">
									<div class="w3ls-top">
										<h3>{{ $data->nama_paket }}</h3> 
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Hair Extension</li>
											<li>Makeup Application</li>
											<li>Facial</li>
											<li>Nails</li>
											<li>Styling</li>
										</ul>
										<h4> IDR {{ number_format($data->harga) }} </h4>
									</div>
								</div>
							@endforeach
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
				<h3 class="w3l_header two">Statistik <span>Kami</span></h3>
				<p class="tho">Hasil dan prestasi pelayanan kami di masyarakatn dan dunia</p>
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
				<h4>Pelayanan</h4>
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
				<h4>Pelanggan</h4>
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
				<h4>Like Pelanggan</h4>
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
				<h4>Penghargaan</h4>
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
				<h3 class="w3l_header">Penilaian <span>orang-orang tantang kami</span></h3>
				<p>Pendapat orang-orang mengenai pelayanan kami</p>
			</div>
			<div id="owl-demo" class="owl-carousel text-center clients-right">
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Vania Indriana</h4>
						<span>Mahasiswa</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Pelayanan yang sangat nyaman dengan banyak penawaran serta pekerja yang profesional</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Karine Lestari</h4>
						<span>Model</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Saya sangat senang dengan pelayanan yang membuat saya menjadi cantik dan anggun</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Devid Fahim</h4>
						<span>Pekerja Kantoran</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Saya senang istri saya make up disini untuk pesta karna membuat saya pangling dengan istri saya</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Honey Jisa</h4>
						<span>DJ</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Ketepatan dan Kualitas adalah yang terbaik</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Agnes Lie</h4>
						<span>Mahasiswa</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Saya merasa senang dengan pelayanannya</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Cindy Adara</h4>
						<span>Mahasiswa</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Membuat momment terbaik saya menjadi cantik hehehe... thanks</p>
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