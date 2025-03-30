<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	<meta name="theme-color" content="#000000"/>
	<meta http-equiv="Content-Language" content="ru">
	<meta name="robots" content="noindex">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="company-alias" content="">
	<meta name="company-name" content="">
	<meta name="page" content="page-not-found">

	<!--этот файл загружается чтоб ослиный браузер понимал html5-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
    <![endif]-->

	<link rel="shortcut icon" href="/public/favicon.ico"/>

    <link href= {{ $css_main }} rel="stylesheet">
    <link href= {{ $css_pageNotFound }} rel="stylesheet">
	
	<title>Страница не найдена</title> 




</head>	
		
<body>

    <div id = "app"></div>

    <script type="text/javascript" src={{ $js_vendors }}></script>
    <script type="text/javascript" src={{ $js_pageNotFound }}></script>

</body>
</html>







