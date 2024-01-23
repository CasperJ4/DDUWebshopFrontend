<div class="container">
    <h1>Edit Product</h1>
    <?php if (isset($product) && $product) : ?>
        <form action="" method="post"> <!-- Make sure this points to your backend script -->
            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['product_id']) ?>">

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required><br>

            <label for="product_description">Description:</label>
            <textarea id="product_description" name="product_description" required><?= htmlspecialchars($product['product_description']) ?></textarea><br>

            <label for="product_stock">Stock:</label>
            <input type="number" id="product_stock" name="product_stock" value="<?= htmlspecialchars($product['product_stock']) ?>" required><br>

            <!-- Include other fields as needed -->

            <div class="button-group">
                <input type="submit" class="btn btn-success" value="Update Product">
                <button type="button" class="btn btn-success" onclick="window.location.href='admin.php';">Go Back</button>
            </div>
            <?php if (isset($_SESSION['update-success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['update-success'] ?>
                </div>
                <?php unset($_SESSION['update-success']); ?>

            <?php endif; ?>

        </form>
    <?php else : ?>
        <!-- Redirect logic -->
    <?php endif; ?>
    <?php Redirect::to('edit.php?product_id=' . Input::get('product_id'));
    exit; ?>

</div>