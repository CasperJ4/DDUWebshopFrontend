
<div class="shopping-cart ml-auto" onclick="togglePopup()">
    <span class="cart-icon">🛒 <span class="cart-count">
            <?php
            echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0';
            ?>
        </span></span>
</div>

<!-- Cart Popup Content -->
<div class="cart-popup max-height=35;" id="cartPopup" style="display: none; ">
    <div class="cart-content" style="max-height: 400px; overflow-y: auto;">
        <span class="close-btn" onclick="togglePopup()">&times;</span>
        <h3>Your Shopping Cart</h3>

        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
            <?php
            $subtotal = 0;
            foreach ($_SESSION['cart'] as $productId => $quantity) : ?>
                <?php
                $product = Products::getProductById($productId);
                $subtotal += $product['product_price'] * $quantity; // Calculate subtotal
                ?>
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="<?php echo $product['product_image_url']; ?>" alt="Product Image" class="img-fluid" style="max-width: 100px;">
                    </div>
                    <div class="col-md-8 col-12">
                        <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                        <p class="card-text"><?php echo $product['product_description']; ?></p>
                        <p class="card-text"><strong>Price:</strong> <?php echo $product['product_price']; ?>kr</p>
                        <p class="card-text"><strong>Quantity:</strong> <?php echo $quantity; ?></p>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
            <h5>Subtotal: <?php echo $subtotal; ?>kr</h5>
            <button class="btn btn-primary w-100">Checkout</button>
            
        <?php else : ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</div>