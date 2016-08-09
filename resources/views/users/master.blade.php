<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Áo nam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">      
		<link href="{{ asset('public/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		
		<link href="{{ asset('public/themes/css/bootstrappage.css') }}" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="{{ asset('public/themes/css/flexslider.css') }}" rel="stylesheet"/>
		<link href="{{ asset('public/themes/css/main.css') }}" rel="stylesheet"/>

		<!-- scripts -->
		<script src="{{ asset('public/themes/js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>				
		<script src="{{ asset('public/themes/js/superfish.js') }}"></script>	
		<script src="{{ asset('public/themes/js/jquery.scrolltotop.js') }}"></script>
		<script src="{{ asset('public/myscript.js') }}"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		@include('users.block.header')
		<div id="wrapper" class="container">
			@include('users.block.menu')
			<!-- noi dung se duoc hien thi tai day -->
			@yield('content')

			<!-- inlude phan footer vao -->
			@include('users.block.footer')
		</div>
		<script src="{{ asset('public/themes/js/common.js') }}"></script>
		<script src="{{ asset('public/themes/js/jquery.flexslider-min.js') }}"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>