<!DOCTYPE html>
<html lang="zh_TW">

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="{{ $seoInfo->description }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription }}" />
    <meta property="og:image" content="{{ asset('assets/img/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name }}" />
    <title>{{ $seoInfo->title }}</title>
    <meta name="title" content="{{ $seoInfo->title }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

	<!-- Favicon -->
	<link href="{{ asset('assets/images/fimgs/favicon.ico') }}" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/rangeslider.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">

	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?v={{ time() }}">

    @stack('third_party_stylesheets')

    @stack('page_css')

</head>

<body id="top">

	<x-loading />

	@include('layouts_main.header')


    @include('layouts_main.hero')

    @yield('content')

	@include('layouts_main.footer')

	<a href="javascript:void(0);" class="rounded-circle back-to-top">
		<img src="{{ asset('assets/images/00-hp/top.png') }}" class="img-fluid" style="width: 50px;" alt="">
	</a>

	<div class="d-none d-md-block social-links-btn">
		<a href="line://ti/p/" target="_blank" class="d-none d-md-block"><img src="{{ asset('assets/images/00-hp/left_line.png') }}"
				class="img-fluid left-line-img" alt=""></a>
		<a href="https://www.facebook.com/messages/t/416423521889925?locale=zh_TW" target="_blank"
			class="d-none d-md-block"><img src="{{ asset('assets/images/00-hp/left_mess.png') }}" class="img-fluid left-msg-img" alt=""></a>
	</div>

	<div class="d-flex d-md-none w-100 position-fixed bottom-0 left-0 social-links-btn-mobile">
		<div class="row justify-content-center align-content-center text-center p-0 m-0 w-100">
			<div class="col-4 s-line-btn align-self-center">
				<a href="line://ti/p/" class="text-dark" target="_blank">
					<span><i class="bi bi-line"></i></span> 線上諮詢
				</a>
			</div>
			<div class="col-4 s-phone-btn align-self-center">
				<a href="tel:03-8422210" target="_blank">
					<span><i class="bi bi-telephone-fill"></i></span> 公司專線
				</a>
			</div>
			<div class="col-4 s-location-btn align-self-center">
				<a href="tel:0903-781616" target="_blank">
					<span><i class="bi bi-phone-fill"></i></span> 聯繫FMD
				</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>

	<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>


	<!-- <script src="js/typed.js"></script>
	<script>
		var typed = new Typed('.typed-words', {
			strings: ["pain", " stress", " fatigue"],
			typeSpeed: 80,
			backSpeed: 80,
			backDelay: 4000,
			startDelay: 1000,
			loop: true,
			showCursor: true
		});
	</script> -->

	<script src="{{ asset('assets/js/main.js') }}?v={{ time() }}"></script>

	<script src="{{ asset('assets/js/custom.js')}}?v={{ time() }}"></script>


	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".heroSwiper", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			centeredSlides: true,
			speed: 1000,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			// navigation: {
			//     nextEl: ".swiper-button-next",
			//     prevEl: ".swiper-button-prev",
			// },
			// pagination: {
			//     el: ".swiper-pagination",
			//     clickable: true,
			// },
		});
	</script>

    @stack('third_party_scripts')

    @stack('page_scripts')
</body>

</html>
