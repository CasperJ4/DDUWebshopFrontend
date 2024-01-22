<div class="container mt-4 text-center">
    <div class="row">
        <!-- Menu -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Menu</a>
                <a href="#" class="list-group-item list-group-item-action">Kategori 2</a>
                <a href="#" class="list-group-item list-group-item-action">Kategori 3</a>
                <a href="#" class="list-group-item list-group-item-action">Kategori 4</a>
            </div>
        </div>

        <!-- Products -->
        <div class="col-md-9">
            <div class="row">
                <!-- Replace the static product cards with a loop -->
                <?php foreach ($products as $p) : ?>
                    <div class="col-md-4 mb-4">
                        <!-- Product card -->
                        <img class="card-img-top" src="<?php echo $p['product_image_url']; ?>" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $p['product_name']; ?></h5>
                            <p class="card-text"><?php echo $p['product_description']; ?></p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Additional products can be added here -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>
</body>

</html>