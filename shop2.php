<?php
include 'db.php'; // Ensure this file contains your PDO database connection

// Pagination setup
$productsPerPage = 16;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1);
$offset = ($page - 1) * $productsPerPage;

// Fetch products for the current page
$stmt = $pdo->prepare('SELECT id, name, description, price, image_url, stars FROM products LIMIT :limit OFFSET :offset');
$stmt->bindValue(':limit', $productsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll();

// Total number of products for pagination
$totalStmt = $pdo->query('SELECT COUNT(*) FROM products');
$totalProducts = $totalStmt->fetchColumn();
$totalPages = ceil($totalProducts / $productsPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        h3 {
            font-size: 1.4rem;
            font-weight: 800;
        }

        h4 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        h5 {
            font-size: 1rem;
            font-weight: 400;
            color: #1d1d1d;
        }

        h6 {
            color: #d8d8d8;
        }

        button {
            font-size: 0.8rem;
            font-weight: 700;
            outline: none;
            border: none;
            background-color: #1d1d1d;
            color: aliceblue;
            padding: 13px 30px;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s ease;
        }

        button:hover{
            background-color: #3a3833;
            top: 0;
            left: 0;
        }

        .star {
            padding: 10px 0;
        }

        hr{
            width: 30px;
            height: 2px;
            background-color: coral;
        }

        .star i{
            font-size: 0.8rem;
            color: goldenrod;
        }

        .navbar{
            font-size: 16px;
            background-color: white;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-nav .nav-link{
            padding: 0 20px;
            color: black;
            transition: 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar i:hover,
        .navbar-light .navbar-nav .nav-link .active,
        .navbar i.active{
            color: coral;
        }

        .navbar i{
            font-size: 1.2rem;
            padding: 0 7px;
            cursor: pointer;
            transition: 0.3sec ease;
        }

        #bar{
            font-size: 1.5rem;
            padding: 7px;
            cursor: pointer;
            transition: 0.3s ease;
            color: black;
        }

        #bar:hover,
        #bar.active{
            color: white;
        }

        /*Mobile Nav*/

        .navbar-light .navbar-toggler{
            border: none;
            outline: none;
        }

        @media only screen and (max-width:991px){
            body > nav > div > button:hover,
            body > nav > div > button:focus{
                background-color: coral;
            }
        }

        #home{
            background-image: url("back.jpg");
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: top 60px center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        #home span{
            color: coral;
        }

        #new .one img {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        #new .one .details {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transition: 0.3s ease;
        }

        #new .one:hover .details {
            cursor: pointer;
            background-color: rgba(245, 178, 178, 0.7);
        }

        #new .one .details button {
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            color: #2a2a2a;
            background: none;
            text-transform: uppercase;
            border-bottom: 1px solid #2a2a2a;
            padding: 2.5px;
            transform: translateY(70px);
            transition: 0.3s ease;
        }

        #new .one .details button:hover {
            color: white;
            border-bottom: 1px solid #fff;
        }

        #new .one:nth-child(1) .details {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: start;
        }

        #new .one:nth-child(2) .details {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #new .one:nth-child(3) .details {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: end;
        }
                /* Products Section */
        .product {
            cursor: pointer;
            margin-bottom: 2rem;
        }

        .product img {
            transition: 0.3s all;
        }

        .product:hover img {
            opacity: 0.7;
        }

        .product .buy-btn {
            background-color: coral;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s all; 
        }

        .product:hover .buy-btn{
            transform: translateY(20px);
            opacity: 1;
        }

        #banner {
            background-image: url("banner.jpg");
            width: 100%;
            height: 60vh;
            background-size: cover;
            background-position: center 70px; 
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        #banner h4{
            color: #d8d8d8;
        }

        #banner h1{
            color: #d8d8d8;
        }

        #banner button{
            background-color: #fb774f;
        }

        footer{
            background-color: #222;
        }

        footer h5{
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
        }

        footer li{
            padding-bottom: 4px;
        }

        footer li a{
            font-size: 0.8rem;
            color: #999;
        }

        footer li a:hover{
            color: #d8d8d8;
        }

        footer p{
            color: #999;
            font-size: 0.8rem;
        }

        footer .copyright a{
            color: #000;
            height: 38px;
            width: 38px;
            background-color: #fff;
            display: inline-block;
            text-align: center;
            line-height: 38px;
            border-radius: 50%;
            transition: 0.3s ease;
            margin: 0 5px;
        }

        footer .copyright a:hover{
            background-color: #fb774b;
        }

        #home .card{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            width: 18rem;
            height: 23%;
            display: flex;
        }
    </style>
</head>
<body>

<?php include('includes/navigation.php'); ?> <!-- Ensure this file exists for navigation -->

<section id="featured" class="my-5 py-5">
    <div class="container mt-5 py-5">
        <h2 class="font-weight-bold">Our Featured Products</h2>
        <hr>
        <p>Check out our latest products!</p>
    </div>
    <div class="row mx-auto container">
    <?php foreach ($products as $product): ?>
    <div class="product text-center col-lg-3 col-md-4 col-12 mb-4">
        <a href="sproduct.php?id=<?= $product['id']; ?>">
            <img class="img-fluid mb-3" src="<?= htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
        </a>
        <div class="star">
            <?php for ($i = 0; $i < $product['stars']; $i++): ?>
                <i class="fa fa-star"></i>
            <?php endfor; ?>
        </div>
        <h5 class="p-name"><?= htmlspecialchars($product['name']); ?></h5>
        <h4 class="p-price">$<?= htmlspecialchars($product['price']); ?></h4>
        <form action="addToCart.php" method="post">
            <input type="hidden" name="productId" value="<?= $product['id']; ?>">
            <button type="submit" class="btn btn-primary buy-btn">Buy Now</button>
        </form>
    </div>
<?php endforeach; ?>

    </div>
    <nav aria-label="Product pagination">
      <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
        <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a></li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item <?= ($i === $page) ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
        <?php endfor; ?>
        <?php if ($page < $totalPages): ?>
        <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Next</a></li>
        <?php endif; ?>
      </ul>
    </nav>
</section>

<?php include('includes/footer.php'); ?> <!-- Ensure this file exists for your footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
