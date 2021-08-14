<!DOCTYPE html>
<head>
<title>Cinema APP</title>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header-section-starts -->
<div class="full">
<div class="menu">
<ul>
<li><a class="active" href="{{route('index.home')}}"><i class="home"></i></a></li>
<li><a href="{{route('reviews.movie')}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
@guest
@if (Route::has('register'))
@endif
@else
<li><a href="{{route('contact.send')}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
@endguest

</ul>
</div>
<div class="main">
@yield('content')
<div class="footer">
<h6>Disclaimer : </h6>
<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
<a href="example@mail.com">example@mail.com</a>
<div class="copyright">
<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
</div>
</body>
</html>