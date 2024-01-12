<?php

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

// Check if user is admin
if ($_SESSION['user'] !== 'admin') {
    // Redirect to index.php
    header("Location: index.php");
    exit();
}
?>

<div class="container mt-5">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="manage-users.php" class="list-group-item list-group-item-action">Manage Users</a>
                <a href="manage-products.php" class="list-group-item list-group-item-action">Manage Products</a>
                <a href="manage-orders.php" class="list-group-item list-group-item-action">Manage Orders</a>
                <a href="site-settings.php" class="list-group-item list-group-item-action">Site Settings</a>
            </div>
        </div>
        <div class="col-md-9">
            <h2>Welcome, <?php echo $_SESSION['user'] ?></h2>
            <p>Here you can manage your website's content and settings.</p>
            <!-- Additional admin functionalities can be added here -->
        </div>
    </div>
</div>
