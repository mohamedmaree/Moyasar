<!DOCTYPE html>
<html>
<head>
	<title>payment view page</title>
    <!--  moyasar style sheet-->
    <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.6.1/moyasar.css">
    
    <!--  moyasar script files-->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
    <script src="https://cdn.moyasar.com/mpf/1.6.1/moyasar.js"></script>

</head>
<body>

    <div class="mysr-form">
    	<!-- payment form Appear here -->
    </div>

<!--  moyasar payment script -->
<script type="text/javascript">
    Moyasar.init({
        // Required
        // Specify where to render the form
        // Can be a valid CSS selector and a reference to a DOM element
        element: '.mysr-form',

        // Required
        // Amount in the smallest currency unit
        // For example:
        // 10 SAR = 10 * 100 Halalas
        // 10 KWD = 10 * 1000 Fils
        // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
        amount: 100,

        // Required
        // Currency of the payment transation
        currency: 'SAR',

        // Required
        // A small description of the current payment process
        description: 'provider pay app commission ',

        // Required
        publishable_api_key: 'pk_test_*************************',

        // Required
        // This URL is used to redirect the user when payment process has completed
        // Payment can be either a success or a failure, which you need to verify on you system (We will show this in a couple of lines)
        callback_url: 'http://site.com/callback_url_route',

        // Optional
        // Required payments methods
        // Default: ['creditcard', 'applepay', 'stcpay']
        methods: [
            'creditcard',
        ],
    });
</script>
</body>
</html>