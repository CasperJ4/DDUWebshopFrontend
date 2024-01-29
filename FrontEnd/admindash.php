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
            <!-- Content here -->
        </div>
    </div>
</div>