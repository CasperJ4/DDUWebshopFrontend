<link rel="stylesheet" type="text/css" href="style.css">
<html lang="en">

<head>
    <title>Modern Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



    <!-- Custom Assets 
-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet"type="text/css" href="css/checkout.css">
    <script src="js/cartPopup.js"></script>
    <!-- Custom Assets 
-->

</head>

<body>
    <div class="shopping-cart" onclick="togglePopup()"><span class="cart-icon">🛒 <span class="cart-count">3</span></span></div>
    <div class="cart-popup" id="cartPopup">
        <div class="cart-content">
            <span class="close-btn" onclick="togglePopup()">&times;</span>
            <h3>Din Indkøbsvogn</h3>
            <!-- Din indkøbsvogns indhold her -->
        </div>
    </div>