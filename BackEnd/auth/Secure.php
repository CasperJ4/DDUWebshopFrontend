<link rel="stylesheet" href="css/admin.css">
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
