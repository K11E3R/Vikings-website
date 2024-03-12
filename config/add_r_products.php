<?php
include 'db_manager.php'; 

// Generate data for 30 products
$productsData = [];
for ($i = 1; $i <= 30; $i++) {
    $nom = "Product {$i}";
    $description = "Description for Product {$i}";
    $prix = rand(10, 1000); // Random price between 10 and 1000
    $stock = rand(1, 100); // Random stock between 1 and 100
    $image_url = "https://example.com/images/product{$i}.jpg"; // Example image URL

    $productsData[] = [
        'nom' => $nom,
        'description' => $description,
        'prix' => $prix,
        'stock' => $stock,
        'image_url' => $image_url,
        'partenaire_id' => 1,
    ];
    addProduct($productsData[$i-1]);

}

header("Location: ../pages/shop.php");
exit;
?>
