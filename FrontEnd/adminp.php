 <!-- Include your product insert form here -->
 <div class=" container mt-5" style="max-width: 1200px;">
     <div style="text-align: center;">
         <h1>Product manage</h1>
     </div>
     <div class="product-table">
         <table>
             <thead>
                 <tr>
                     <th>Product ID</th>
                     <th>Name</th>
                     <th>Description</th>
                     <th>Stock</th>
                     <th>Image</th>
                     <th>Created At</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($products as $product) : ?>
                     <tr>
                         <td><?= htmlspecialchars($product['product_id']) ?></td>
                         <td><?= htmlspecialchars($product['product_name']) ?></td>
                         <td><?= htmlspecialchars($product['product_description']) ?></td>
                         <td><?= htmlspecialchars($product['product_stock']) ?></td>
                         <td>
                             <?php if ($product['product_image_url']) : ?>
                                 <img src="<?= htmlspecialchars($product['product_image_url']) ?>" alt="Product Image">
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
         <div style="text-align: center;">
             <h1>Add Product </h1>
         </div>
         <?php include "prodinsert.php"; ?>

     </div>