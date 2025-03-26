<!doctype html>
<html lang={{ $locale }}>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	<meta name="theme-color" content="#000000"/>

	<meta name="Author" content={{ $siteAuthor }}>
	<meta http-equiv="Content-Language" content={{ $locale }}>
	<meta name="robots" content="{{ $robots }}">
	<meta name="Subject" content="{{ $Subject }}">
	<meta name="Reply-to" content={{ $authorEmail }}>
	<meta name="keywords" content="{{ $keywords }}">
	<meta name="description" content="{{ $description }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	@if( Route::currentRouteName() !== 'integration_frame_server' && config( 'app.APP_IS_PRODUCTION' ) )
		@include('layouts.metrika')
	@endif

	<!--этот файл загружается чтоб ослиный браузер понимал html5-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
    <![endif]-->

	<link rel="shortcut icon" href="/public/favicon.ico"/>
	
	<title>{{ $pageTitle }}</title> 

	<link href= {{ $css_main }} rel="stylesheet">
	@yield('link_css')

</head>	
		
<body>

	<div id = "app">
		@yield('topMenu')

		@yield('content')

	</div>

	<script type="text/javascript" src={{ $js_vendors }}></script>
    @yield('script_js')


</body>
</html>
