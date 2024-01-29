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
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/button.css">


    <script src="js/cartPopup.js"></script>
    <!-- Custom Assets -->

</head>

<body>
    <?php include "cart.php"; ?>


    <!-- User Session and Login/Logout -->
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Welcome, <?php echo $_SESSION['user']; ?></p>
        <?php if (isset($_SESSION['admin'])) : ?>
            <p>You are an admin!</p>
        <?php endif; ?>
        <a href="logout.php">
            <button class="costum-button"><span>Logout</span></button>
        </a>
    <?php else : ?>
        <a href="login.php">
            <button class="costum-button"><span>Login</span></button>
        </a>
    <?php endif; ?>