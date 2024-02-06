<div class="container">
    <h1>Edit Product</h1>
    <?php if (isset($product) && $product) : ?>
        <!-- Update Product Form -->
        <form action="" method="post">
            <input type="hidden" name="update_product" value="<?= htmlspecialchars($product['product_id']) ?>">
            <select id="category_id" name="category_id" required>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= htmlspecialchars($category['id']) ?>" <?= ($category['id'] == $product['category_id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($category['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required><br>

            <label for="product_description">Description:</label>
            <textarea id="product_description" name="product_description" required><?= htmlspecialchars($product['product_description']) ?></textarea><br>

            <label for="product_stock">Stock:</label>
            <input type="number" id="product_stock" name="product_stock" value="<?= htmlspecialchars($product['product_stock']) ?>" required><br>


            <!-- Button Group for Actions -->
            <div class="form-button-group">
                <button type="submit" class="btn btn-success" value="Update Product">Update Product</button>
                <button type="button" class="btn btn-success" onclick="window.location.href='admin.php';">Go Back</button>
            </div>
        </form>

        <!-- Delete Product Form -->
        <form action="" method="post" class="form-button-group">
            <input type="hidden" name="delete_product" value="<?= htmlspecialchars($product['product_id']) ?>">
            <button type="submit" class="btn btn-danger">Delete Product</button>
        </form>

        <?php if (isset($_SESSION['update-success'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['update-success'] ?>
            </div>
            <?php unset($_SESSION['update-success']); ?>
        <?php endif; ?>
    <?php else : ?>
        <!-- Redirect logic -->
        <script type="text/javascript">
            window.location.href = 'edit.php?product_id=' + <?= json_encode(Input::get('product_id')) ?>;
        </script>
    <?php endif; ?>
</div>