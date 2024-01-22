<div class="container">
    <h1>Edit Product</h1>
    <!-- Backend integration: Check if $product is set and display form -->
    <?php if (isset($product) && $product) : ?>
        <form action="edit.php" method="post">
            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['product_id']) ?>">

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required><br>

            <label for="product_description">Description:</label>
            <textarea id="product_description" name="product_description" required><?= htmlspecialchars($product['product_description']) ?></textarea><br>

            <label for="product_stock">Stock:</label>
            <input type="number" id="product_stock" name="product_stock" value="<?= htmlspecialchars($product['product_stock']) ?>" required><br>

            <!-- Include other fields as needed -->

            <input type="submit" value="Update Product">
        </form>
    <?php else : ?>
        <?php header("Location: edit.php?product_id=" . $product_id); ?>
    <?php endif; ?>
</div>