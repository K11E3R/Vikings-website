<?php include_once '../includes/header.php'; ?>
<?php include_once '../config/shop_retrieve.php'; ?>

<div class ="users_cs">
    <h1>Shop</h1>

    <?php 
        $products = getAllProducts();
        if (count($products) > 0) {
            echo "<table class='users_table'>";
            echo "<tr><th>Product ID</th><th>Name</th><th>Description</th><th>Price</th><th>Stock</th><th>Image URL</th><th>Date Created</th><th>Partner ID</th></tr>";
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['produit_id'] . "</td>";
                echo "<td>" . $product['nom'] . "</td>";
                echo "<td>" . $product['description'] . "</td>";
                echo "<td>" . $product['prix'] . "</td>";
                echo "<td>" . $product['stock'] . "</td>";
                echo "<td>" . $product['image_url'] . "</td>";
                echo "<td>" . $product['date_creation'] . "</td>";
                echo "<td>" . $product['partenaire_id'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No products found.</p>";
        }
    ?>

    <form action="../config/add_r_products.php" method="post">
        <button type="submit">Add Products</button>
    </form>
</div>
<?php include_once '../includes/footer.php'; ?>
