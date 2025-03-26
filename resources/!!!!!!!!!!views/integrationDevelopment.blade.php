<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>

    <title>integration</title>


    <link href= {{ $css_main }} rel="stylesheet">
    <link href= {{ $css_integration }} rel="stylesheet">
	
	
	<!-- <link href= 'https://printin.site/public/assets/css/main.bdb3a1be6974b3710ed8.css' rel='stylesheet'>
	<link href= 'https://printin.site/public/assets/css/integration.bdb3a1be6974b3710ed8.css' rel='stylesheet'> -->

	<style>
		.imitationOfClientDOM{

			font-size: 1em;

			display: flex;
			flex-direction: row;
			justify-content: space-around;
			align-items: center;
			align-content: center;
		}

		.imitationOfClientDOM div{
			width: 40%;

			padding: 1em;
			background-color: rgb(97, 134, 122);
			border: 1px solid #343434;
			margin: 1em;
		}

		.imitationOfClientDOM div h2{
			font-size: 1em;
			text-indent: 2em;
			padding: 0.5em 1em;
			color:#ffffff;
		}
		.imitationOfClientDOM div input{
			font-size: 1em; 
			margin: 1em 0;
		}

	</style>
	


</head>


<body>

	<div style = 'width: 30%;'>
		<div id = 'print-in-site-integration' data-localisation = 'ru'></div>
	</div>

	<div class = 'imitationOfClientDOM'>

	<div>
		<h2>Лицевая</h2>
		<input 
			type = 'file' 
			class = "print_in_site_input_front_side"
		/>
	</div>

	<div>
		<h2>Обратная</h2>
		<input 
			type = 'file' 
			class = "print_in_site_input_reverse_side"
		/>
	</div>
	</div>
	
	<script type="text/javascript" src={{ $js_vendors }}></script>
	<script type="text/javascript" src={{ $js_integration }}></script>


	<!-- <script type='text/javascript' src='https://printin.site/public/assets/js/vendors.bdb3a1be6974b3710ed8.js'></script>
    <script type='text/javascript' src='https://printin.site/public/assets/js/integration.bdb3a1be6974b3710ed8.js'></script> -->
	
</body>
		

</html>