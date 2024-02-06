<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('mysql60.unoeuro.com', 'caspnwk_dk', '46mEbAt2afpRzrdcByne', 'caspnwk_dk_db') or die("Connection Failed:" . mysqli_connect_error());

    if (isset($_POST['product_name'], $_POST['product_description'], $_POST['product_stock'], $_POST['product_price_dkk'])) {
        $name = mysqli_real_escape_string($conn, $_POST['product_name']);
        $description = mysqli_real_escape_string($conn, $_POST['product_description']);
        $stock = mysqli_real_escape_string($conn, $_POST['product_stock']);
        $price = mysqli_real_escape_string($conn, $_POST['product_price_dkk']);

        $sql = "INSERT INTO uwu_websito_dk_db (product_name, product_description, product_stock, product_price_dkk) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssii", $name, $description, $stock, $price);
            $query = mysqli_stmt_execute($stmt);

            if ($query) {
                echo 'Added to products';
            } else {
                echo 'Error Occurred: ' . mysqli_error($conn);
            }
        } else {
            echo 'Error in preparing statement: ' . mysqli_error($conn);
        }
    }
}
