<!doctype html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	<meta name="theme-color" content="#000000"/>



	<title>test pay fondy</title> 

    <style>body {margin: 0;}</style>
<link rel="preload" href="https://pay.fondy.eu/icons/dist/fonts/inter-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://pay.fondy.eu/icons/dist/fonts/inter-medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://pay.fondy.eu/icons/dist/fonts/inter-semibold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="https://pay.fondy.eu/icons/dist/fonts/cvv.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="https://pay.fondy.eu/icons/dist/fonts/card-number.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="https://pay.fondy.eu/latest/checkout-vue/checkout.css" as="style">
<link rel="preload" href="https://pay.fondy.eu/latest/checkout-vue/checkout.js" as="script">
<link href="https://pay.fondy.eu/latest/checkout-vue/checkout.css" rel="stylesheet">
    
<script src="https://pay.fondy.eu/latest/checkout-vue/checkout.js"></script>

</head>	
		        <!-- "button": "efed7d636e665255f7929f5ffa86d99b7808e1d3",
        "order_id": "99d351f6f994549793aa2e88fddc86e96bc8d4f9bccc9edb2", -->
<body>
<div id="appWWW"></div>

<script>
// https://printin.site/api/en/accept-payment-fondy-hhfd29
// 99d351f6f994549793aa2e88fddc86e96bc8d4
// response_url: 'https://printin.site/api/en/accept-payment-fondy-hhfd29',

// merchant_id: 1529590,
//         currency: "EUR",
//         order_id: "r9d351f6f994549793aa2e88fddc86e96bc",
//         amount: 10,
//         order_desc: "Test payment",
//         response_url: "https://printin.site/api/en/accept-payment-fondy-hhfd29",

// r9d351f6f994549793aa2e88fddc86e9622
// Order_1529590_fscJqGt3e4_1693237925

// 99d351f6f994549793aa2e88fddc86e96bc
// Order_1529590_fscJqGt3e4_1693237925
// 54fe23fcb298551e7eb78e9e8b9c0fb2c0c



var Options = {
    params: {
        merchant_id: 1529590,
        currency: "EUR",
        order_id: "54fe23fcb298551e7eb78e9e8b9c0f",
        amount: 40,
        order_desc: "Test payment",
        response_url: "https://printin.site",
        
    },

    "options": {
        "email": true,
        "theme": {
            "type": "light",
            "preset": "black"
        },
        "methods": [
            "card"
        ],
        "endpoint": {
            "button": "/latest/checkout-v2/button/index.html",
            "gateway": "/latest/checkout-v2/index.html"
        },
        "apiDomain": "pay.fondy.eu",
        "cardIcons": [
            "prostir",
            "mastercard",
            "visa"
        ],
        "fullScreen": false,
        "methods_disabled": [],
        "hide_button_title": true
    }
};
                fondy('#appWWW', Options);
            </script>










</body>
</html>
