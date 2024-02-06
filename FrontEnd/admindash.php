<div class="container mt-5">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="list-group">
                <a href="admin.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'admin.php' ? 'active' : ''; ?>">Dashboard</a>
                <a href="manage-users.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'manage-users.php' ? 'active' : ''; ?>">Manage Users</a>
                <a href="adminp.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'adminp.php' ? 'active' : ''; ?>">Manage Products</a>
                <a href="manage-orders.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'manage-orders.php' ? 'active' : ''; ?>">Manage Orders</a>
                <a href="site-settings.php" class="list-group-item list-group-item-action <?php echo basename($_SERVER['PHP_SELF']) == 'site-settings.php' ? 'active' : ''; ?>">Site Settings</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="mx-auto col-12" style="max-width: 1200px;">
                <div class="product-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Category</th> <!-- Added Category heading -->
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $product) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($product['product_id']) ?></td>
                                    <td><?= htmlspecialchars($product['product_name']) ?></td>
                                    <td><?= htmlspecialchars($product['product_description']) ?></td>
                                    <td><?= htmlspecialchars($product['product_stock']) ?></td>
                                    <td><?= htmlspecialchars($product['category_name']) ?></td> <!-- Assuming 'category_name' is available -->
                                    <td>
                                        <?php if ($product['product_image_url']) : ?>
                                            <img src="<?= htmlspecialchars($product['product_image_url']) ?>" alt="Product Image" style="width: 100px;"> <!-- Added inline styling for image size -->
                                        <?php endif; ?>
                                    </td>
                                    <td><?= htmlspecialchars($product['created_at']) ?></td>
                                    <td>
                                        <!-- Edit button -->
                                        <a href="edit.php?product_id=<?= $product['product_id'] ?>" class="edit-btn">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>