<div class="container mt-4">
    <div class="row text-center">
        <?php foreach ($products as $p) : ?>
            <!-- Example of a single product card -->
            <div class="col-md-3">
                <div class="card h-100">
                    <!-- Adjusted image size with object-fit -->
                    <img class="card-img-top img-fluid" style="object-fit: contain; height: 300px; width: auto; margin: 0 auto;" src="<?php echo $p['product_image_url']; ?>" alt="Product Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $p['product_name']; ?></h5>
                        <p class="card-text"><?php echo $p['product_description']; ?></p>
                        <p class="card-text"><strong>Price:</strong> <?php echo $p['product_price']; ?>kr</p>
                        <!-- Add to Cart Form -->
                        <form action="" method="post" class="mt-auto">
                            <input type="hidden" name="product_id" value="<?php echo $p['product_id']; ?>">
                            <input type="hidden" name="quantity" value="1"> <!-- Assuming default quantity as 1 -->
                            <button type="submit" class="btn btn-primary w-100">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>