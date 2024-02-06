<div class="container mt-4 text-center">
    <div class="row">
        <!-- Menu -->
        <div class="col-md-3">
            <div class="list-group">
                <a href='?category=all' class="list-group-item list-group-item-action <?= $selectedCategory == 'all' ? 'active' : ''; ?>">ALL</a>
                <?php foreach ($categories as $category) : ?>
                    <a href="?category=<?= $category['id']; ?>" class="list-group-item list-group-item-action <?= $selectedCategory == $category['id'] ? 'active' : ''; ?>">
                        <?= $category['name']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Products -->
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($products as $p) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100"> <!-- Ensures that all cards in a row are of equal height -->
                            <img class="card-img-top img-fluid mx-auto" style="object-fit: cover; max-height: 600px;" src="<?php echo $p['product_image_url']; ?>" alt="Responsive image">
                            <div class="card-body d-flex flex-column"> <!-- Flex column for equal height action buttons -->
                                <h5 class="card-title"><?php echo $p['product_name']; ?></h5>
                                <p class="card-text"><?php echo $p['product_description']; ?></p>
                                <p class="card-text"><strong>Price:</strong> <?php echo $p['product_price']; ?>kr</p>
                                <!-- Add to Cart Form -->
                                <form action="" method="post" class="mt-auto">
                                    <input type="hidden" name="product_id" value="<?php echo $p['product_id']; ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn btn-primary w-100">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>