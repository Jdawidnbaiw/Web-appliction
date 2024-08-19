<!-- NAVIGATION -->
<style>
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
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">KLOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav_link" href="/html/index1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/html/shop2.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/html/Contact Us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/html/loginPage.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/html/cart.php"><i class="fa fa-shopping-bag"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>