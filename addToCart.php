<?php
session_start();
require 'db.php'; // Assuming this file returns a PDO connection $pdo

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Fetch the product details
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$productId]);
    $product = $stmt->fetch();

    if ($product) {
        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$productId])) {
            // Increase quantity if already in the cart
            $_SESSION['cart'][$productId]['quantity'] += 1;
        } else {
            // Add new item to cart
            $_SESSION['cart'][$productId] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'image_url' => $product['image_url'],
                'quantity' => 1
            ];
        }
    }
}

header('Location: cart.php'); // Redirect to the cart page
exit;
?>
