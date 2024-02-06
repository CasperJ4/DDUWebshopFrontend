<?php
// Check if user is logged in as admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
?>
    <form action="adminp.php" method="POST" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="product_description">Description:</label>
        <textarea id="product_description" name="product_description" required></textarea><br><br>

        <label for="product_stock">Stock:</label>
        <input type="number" id="product_stock" name="product_stock" required><br><br>

        <label for="product_price_dkk">Price (DKK):</label>
        <input type="number" id="product_price_dkk" name="product_price" required><br><br>

        <label for="product_image">Upload Image:</label>
        <input type="file" id="product_image" name="product_image" required><br><br>

        <input type="submit" value="Submit">
    </form>

    </form>
<?php
} else {
    // Redirect to login page or index page based on login status
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
    exit;
}
?>