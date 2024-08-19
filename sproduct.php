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
    <title>Shop</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha384-***" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26910e88d1.js" crossorigin="anonymous"></script>
    <style>
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }

        .small-img-col{
            flex-basis: 24%;
            cursor: pointer；
        }

        .sproduct select{
            display: block;
            padding: 5px 10px;
        }

        .sproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus{
            outline: none;
        }

        .buy-btn{
            background: #fb774b;
            opacity: 1;
            transition: 0.3 all;
        }
    </style>
</head>
<body>

<?php include('includes/navigation.php'); ?> 

<section class="container sproduct my-5 pt-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="<?= htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
        </div>

        <div class="col-lg-6 col-md-12 col-12">
            <h6>Home/ Electronic</h6>
            <h3 class="py-4"><?= htmlspecialchars($product['name']); ?></h3>
            <h2>$<?= htmlspecialchars($product['price']); ?></h2>
            <select class=“my-3”>
                <option>Select Size</option>
                <option>Select Size</option>
                <option>Select Size</option>
                <option>Select Size</option>
            </select>
            <input type="number" value="1">
            <form action="addToCart.php" method="post">
            <input type="hidden" name="productId" value="<?= $product['id']; ?>">
            <button type="submit" class="buy-btn">Add To Cart</button>
            </form>
            
            <h4 class="mt-5 mb-5">Product Details</h4>
            <span><?= htmlspecialchars($product['description']); ?></span>
        </div>
    </div>
</section>

<section id="featured" class="my-5 py-5">
    <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr class="mx-auto">
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="featured/1.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">LG 10KG Heat Pump Tumble Dryer Inverter</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="featured/2.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Khind Vacuum Cleaner VC68P</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="featured/3.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Samsung 65 inch The Frame QLED 4K Smart Lifestyle TV (2022)</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="featured/4.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Faber 1.5L Slow Cooker FBR-FSC150BK</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?> 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></script>
<script>
    var MainImage = document.getElementById('MainImage');
var smallimg = document.getElementsByClassName('small-img');

smallimg[0].onclick = function() {
    MainImage.src = smallimg[0].src;
}
smallimg[1].onclick = function() {
    MainImage.src = smallimg[1].src;
}
smallimg[2].onclick = function() {
    MainImage.src = smallimg[2].src;
}
smallimg[3].onclick = function() {
    MainImage.src = smallimg[3].src;
}


</script>

</body>
</html>
