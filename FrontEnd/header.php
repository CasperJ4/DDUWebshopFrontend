<html lang="en">

<head>
    <title>Modern Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


    <!-- Custom Assets -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/products.css">

    <script src="js/cartPopup.js"></script>
    <!-- Custom Assets -->

</head>

<body>
    <div class="shopping-cart ml-auto" onclick="togglePopup()">
        <span class="cart-icon">🛒 <span class="cart-count">3</span></span>
    </div>
    </nav>

    <!-- Cart popup content -->
    <div class="shopping-cart ml-auto" onclick="togglePopup()">
        <span class="cart-icon">🛒 <span class="cart-count">2</span></span>
    </div>
    </nav>

    <!-- Cart popup content -->
    <div class="cart-popup" id="cartPopup">
        <div class="cart-content">
            <span class="close-btn" onclick="togglePopup()">&times;</span>
            <h3>Your Shopping Cart</h3>
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="https://parspng.com/wp-content/uploads/2022/07/Tshirtpng.parspng.com_.png" class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-12 col-md-8">
                    <h6>Shirt</h6>
                    <h6>Cotton T-shirt</h6>
                    <div class="d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                        <h6>€ 44.00</h6>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="https://parspng.com/wp-content/uploads/2022/07/Tshirtpng.parspng.com_.png" class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-12 col-md-8">
                    <h6>Shirt</h6>
                    <h6>Cotton T-shirt</h6>
                    <div class="d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                        <h6>€ 44.00</h6>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-between">
                <h5>Total:</h5>
                <h5>€ 88.00</h5>
            </div>
        </div>
    </div>
    </div>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>
        <?php if (isset($_SESSION['admin'])) : ?>
            <p>You are an admin!</p>
            <?php $name = "yousif"; ?>
        <?php endif; ?>
        <a href="logout.php">
            <button><span>Logout</span></button>

        </a>

    <?php else : ?>
        <a href="login.php">
            <button><span>Login</span></button>


        </a>
    <?php endif; ?>