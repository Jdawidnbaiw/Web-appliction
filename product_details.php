<?php
include 'db.php'; // Your database connection file

// Fetch the product ID from the URL
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Prepare and execute the query to fetch product details
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$stmt->execute(['id' => $productId]);
$product = $stmt->fetch();

// Check if the product exists
if (!$product) {
    echo "Product not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']); ?></title>
</head>
<body>

<?php include('includes/navigation.php'); ?> <!-- Navigation bar -->

<!-- Product detail section -->
<section class="container sproduct my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="<?= htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
            <!-- Additional product images or details can go here -->
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <h6>Category / Subcategory</h6>
            <h3 class="py-4"><?= htmlspecialchars($product['name']); ?></h3>
            <h2>$<?= htmlspecialchars($product['price']); ?></h2>
            <!-- Product options like size, color, etc., could be added here -->
            <button class="buy-btn">Add To Cart</button>
            <h4 class="mt-5 mb-5">Product Details</h4>
            <span><?= htmlspecialchars($product['description']); ?></span>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?> <!-- Footer -->

</body>
</html>
