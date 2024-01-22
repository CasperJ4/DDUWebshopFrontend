<div class="container mt-4">
    <div class="row text-center">
        <?php foreach ($products as $p) : ?>
            <!-- Example of a single product card -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $p['product_image_url']; ?>" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $p['product_name']; ?></h5>
                        <p class="card-text"><?php echo $p['product_description']; ?></p>
                        <p class="card-text"><strong>Price:</strong> <?php echo $p['product_price']; ?>kr</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Repeat for each product -->
    </div>
</div>