<!DOCTYPE html>
<html lang="en">

<head>
    <title>LeaderFiesta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- Custom Styles -->
    <!-- Append a version number to CSS links to prevent caching issues -->
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="css/checkout.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=1.0">
    <link rel="stylesheet" type="text/css" href="css/cart.css?v=1.0">
    <link rel="stylesheet" href="css/admin.css?v=1.0">
    <link rel="stylesheet" href="css/products.css?v=1.0">
    <link rel="stylesheet" href="css/button.css?v=1.0">

    <!-- Scripts -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="js/cartPopup.js"></script>

</head>

<body>

    <!-- Include Cart -->
    <?php include "cart.php"; ?>

    <!-- User Session and Login/Logout -->
    <?php if (isset($_SESSION['user'])) : ?>
        <a href="logout.php">
            <button class="costum-button"><span>Logout</span></button>
        </a>
    <?php else : ?>
        <a href="login.php">
            <button class="costum-button"><span>Login</span></button>
        </a>
    <?php endif; ?>