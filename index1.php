<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha384-***" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26910e88d1.js" crossorigin="anonymous"></script>
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
            border-radius: 10px;
            opacity: .9;
        }
    </style>
</head>
<body>

<?php include('includes/navigation.php'); ?> 

<section id="home">
    <div class="container card">
        <h5 class="mt-3">NEW ARRIVAL</h5>
        <h1><span> Best Price</span> This Year</h1>
        <a href="shop2.php"><button>Shop now</button></a>
    </div>
</section>

<section id="brand" class="container">
    <div class="row" m-0 py-5>
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/1.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/2.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/3.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/4.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/5.png" alt="">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="brand/6.png" alt="">
    </div>
</section>

<section id="new" class="w-100">
    <div class="row mx-auto container-fluid">
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="new/1.jpeg" alt="">
            <div class="details">
                <h2>Extreme Rare</h2>
                <button class="text-uppercase">Shop Now</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="new/2.jpg" alt="">
            <div class="details">
                <h2>Offer</h2>
                <button class="text-uppercase">Shop Now</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="new/3.jpg" alt="">
            <div class="details">
                <h2>New</h2>
                <button class="text-uppercase">Shop Now</button>
            </div>
        </div>
    </div>
</section>

<section id="featured" class="my-5 py-5">
    <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured product</p>
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

<section id="banner" class="my-5 py-5">
    <div>
        <h4>MID SEASON SALE</h4>
        <h1>Autumn Collection<br>Up to 20% OFF</h1>
        <button class="text-uppercase">Shop Now</button>
    </div>
</section>

<section id="Kitchen Appliances" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>Kitchen Appliances</h3>
        <hr class="mx-auto">
        <p>Here you can check out some of the kitchen appliances</p>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="KitchenAppliiances/1.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Panasonic Ultra Filtration Alkaline Ionizer</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="KitchenAppliiances/2.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Elba 1.7L Jug Kettle</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="KitchenAppliiances/3.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Elba 2 Door Fridge 250L</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="KitchenAppliiances/4.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Khind Multi Blender Chopper</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
</section>

<section id="Mobile" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>Best Mobile</h3>
        <hr class="mx-auto">
        <p>Here you can check out our new released mobile phone</p>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="mobile/1.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">iPhone 15 Pro Max</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="mobile/2.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">iPhone 15 Plus</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="mobile/3.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Samsung Galaxy S24 Ultra 5G</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="mobile/4.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Samsung Galaxy S24+ 5G</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
</section>

<section id="Digital Gadget" class="my-5">
    <div class="container text-center mt-5 py-5">
        <h3>Digital Gadget</h3>
        <hr class="mx-auto">
        <p>Here you can check out some of the digital gadget</p>
    </div>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="DigitalGadget/1.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Apple AirPods Pro (2nd generation) with MagSafe Charging Case (USB‑C)</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="DigitalGadget/2.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Apple Watch Series 9 Aluminum Case with Sport Band GPS + Cellular</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="DigitalGadget/3.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Samsung Galaxy Watch5 Pro 45mm</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="DigitalGadget/4.webp" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Samsung Galaxy Buds2 Pro</h5>
            <h4 class="p-name">$100.00</h4>
            <button class="buy-btn">Buy Now</button>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?> 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"></script>
</body>
</html>
