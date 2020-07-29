<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CachbackMart</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/responsive.min.css">
    <!-- Google Recaptcha -->

    <style>
    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {

        /* padding: 14px 20px;  */
        margin: 4px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .loginbutn {
        width: 130px;
        padding: 10px 18px;
        background-color: #3f9a29;
    }


    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        padding: 15px;
        width: 50%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
    </style>
</head>

<body class="home-12 home-20 home-medical">
    <!-- main layout start from here -->
    <!--====== PRELOADER PART START ======-->

    <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->

    <!--====== PRELOADER PART ENDS ======-->
    <div id="main">
        <!-- Header Start -->
        <header class="main-header">
            <!-- Header Top Start -->
            <div class="header-top-nav">
                <div class="container-fluid">
                    <div class="row">
                        <!--Left Start-->
                        <div class="col-lg-4 col-md-4">
                            <div class="left-text">
                                <p>Welcome you to Cashback Mart!</p>
                            </div>
                        </div>
                        <!--Left End-->
                        <!--Right Start-->
                        <div class="col-lg-8 col-md-8 text-right">
                            <div class="header-right-nav">
                                <ul class="res-xs-flex">

                                    <li class="after-n">
                                        <button onclick="document.getElementById('id01').style.display='block'"
                                            class="login_sample" style="width:auto;">Login</button>
                                    </li>

                                </ul>
                                <div class="dropdown-navs">
                                    <ul>
                                        <!-- Settings Start -->

                                        <li class="dropdown xs-after-n">
                                            <a class="angle-icon" href="#">Register</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="#">Customer Register</a></li>
                                                <li><a href="register_Seller.html">Seller Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown xs-after-n">
                                            <a class="" href="contact.html">Contact Us</a>
                                            <!-- <ul class="dropdown-nav">
                                                    <li><a href="signup.html">Sign-Up</a></li>
                                                    <li><a href="login.html">Sign-In</a></li>
                                                </ul> -->
                                        </li>


                                        <li class="dropdown xs-after-n">
                                            <a class="angle-icon" href="#">My Cachback Mart</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">My Orders</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>

                                            </ul>
                                        </li>
                                        <!-- Settings End -->
                                        <!-- Currency Start -->
                                        <li class="top-10px first-child">
                                            <select>
                                                <option value="1">Offers Zone</option>

                                            </select>
                                        </li>
                                        <!-- Currency End -->
                                        <!-- Language Start -->

                                        <!-- Language End -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Right End-->
                    </div>
                </div>
            </div>
            <!-- Header Top End -->
            <!-- Header Buttom Start -->
            <div class="header-navigation sticky-nav">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Logo Start -->
                        <div class="col-md-2 col-sm-2">
                            <div class="logo">
                                <a href="index.html"><img src="img/Logo2.png" alt="" /></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Navigation Start -->
                        <div class="col-md-10 col-sm-10">
                            <!--Main Navigation Start -->
                            <div class="main-navigation d-none d-lg-block">
                                <ul>
                                    <li class="menu-dropdown">
                                        <a href="index.html">Home </a>

                                    </li>
                                    <li class="menu-dropdown">
                                    <li class="menu-dropdown">
                                        <a href="about.html">About Us </a>

                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Products <i class="ion-ios-arrow-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="covid_products.html">Covid-19</a></li>
                                            <li><a href="vehicles.html">E-Vehicles</a></li>
                                            <!--<li><a href="checkout.html">Checkout Page</a></li>-->
                                            <!--<li><a href="compare.html">Compare Page</a></li>-->
                                            <!--<li><a href="login.html">Login & Regiter Page</a></li>-->
                                            <!--<li><a href="my-account.html">Account Page</a></li>-->
                                            <!--<li><a href="wishlist.html">Wishlist Page</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Business Plan <i class="ion-ios-arrow-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="bp.html">Business Plan </a></li>
                                            <li><a href="level_income.html">Income Levels</a></li>

                                        </ul>
                                    </li>

                                    <li class="menu-dropdown">
                                        <a href="referal.html">Referral Income <i class="ion-ios-arrow-down-a"></i></a>


                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="business.html">Add Your Business <i
                                                class="ion-ios-arrow-down-a"></i></a>


                                        <ul class="sub-menu">
                                            <li><a href="register_Seller.html">Become A CBM Seller</a></li>

                                        </ul>

                                    </li>
                                </ul>
                            </div>
                            <!--Main Navigation End -->
                            <!--Header Bottom Account Start -->
                            <div class="header_account_area">
                                <!--Seach Area Start -->
                                <div class="header_account_list search_list">
                                    <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input placeholder="Search entire store here ..." type="text" />
                                            <div class="search-category">
                                                <select class="bootstrap-select" name="poscats">
                                                    <option value="0">All categories</option>
                                                    <option value="104">
                                                        Fresh Food
                                                    </option>
                                                    <option value="183">
                                                        - - Fresh Fruit
                                                    </option>
                                                    <option value="187">
                                                        - - - - Bananas
                                                    </option>
                                                    <option value="188">
                                                        - - - - Apples &amp; Pears
                                                    </option>
                                                    <option value="189">
                                                        - - - - Berries &amp; Cherries
                                                    </option>
                                                    <option value="190">
                                                        - - - - Oranges &amp; Citrus Fruit
                                                    </option>
                                                    <option value="191">
                                                        - - - - Grapes
                                                    </option>
                                                    <option value="184">
                                                        - - Fresh Vegetables
                                                    </option>
                                                    <option value="192">
                                                        - - - - Potatoes &amp; Sweet Potatoes
                                                    </option>
                                                    <option value="193">
                                                        - - - - Onions &amp; Leeks
                                                    </option>
                                                    <option value="194">
                                                        - - - - Carrots &amp; Root Vegetables
                                                    </option>
                                                    <option value="195">
                                                        - - - - Broccoli &amp; Cauliflower
                                                    </option>
                                                    <option value="196">
                                                        - - - - Cabbages &amp; Greens
                                                    </option>
                                                    <option value="185">
                                                        - - Fresh Salad &amp; Dips
                                                    </option>
                                                    <option value="197">
                                                        - - - - Lettuce &amp; Salad bags
                                                    </option>
                                                    <option value="198">
                                                        - - - - Tomatoes
                                                    </option>
                                                    <option value="199">
                                                        - - - - Cucumber
                                                    </option>
                                                    <option value="200">
                                                        - - - - Celery
                                                    </option>
                                                    <option value="201">
                                                        - - - - Peppers
                                                    </option>
                                                    <option value="186">
                                                        - - Milk, Butter &amp; Eggs
                                                    </option>
                                                    <option value="202">
                                                        - - - - Milk
                                                    </option>
                                                    <option value="203">
                                                        - - - - Spreads &amp; Margarine
                                                    </option>
                                                    <option value="204">
                                                        - - - - Fresh Cream &amp; Custard
                                                    </option>
                                                    <option value="205">
                                                        - - - - Eggs
                                                    </option>
                                                    <option value="206">
                                                        - - - - Baking &amp; Cooking
                                                    </option>
                                                </select>
                                            </div>
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!--Seach Area End -->
                                <!--Contact info Start -->
                                <div class="contact-link">
                                    <div class="phone">
                                        <p>Call us:</p>
                                        <a href="tel:+91 99127-72635">(+91)99127-72635</a>
                                    </div>
                                </div>
                                <!--Contact info End -->
                                <!--Cart info Start -->
                                <div class="cart-info d-flex">
                                    <div class="mini-cart-warp">
                                        <a href="#" class="count-cart"><span>$20.00</span></a>
                                        <div class="mini-cart-content">
                                            <ul>
                                                <li class="single-shopping-cart">
                                                    <div class="shopping-cart-img">
                                                        <a href="single-product.html"><img alt=""
                                                                src="assets/images/product-image/mini-cart/1.jpg" /></a>
                                                        <span class="product-quantity">1x</span>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="single-product.html">Juicy Couture...</a></h4>
                                                        <span>$9.00</span>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion-android-cancel"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-shopping-cart">
                                                    <div class="shopping-cart-img">
                                                        <a href="single-product.html"><img alt=""
                                                                src="assets/images/product-image/mini-cart/2.jpg" /></a>
                                                        <span class="product-quantity">1x</span>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="single-product.html">Water and Wind...</a></h4>
                                                        <span>$11.00</span>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="ion-android-cancel"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal : <span>$20.00</span></h4>
                                                <h4>Shipping : <span>$7.00</span></h4>
                                                <h4>Taxes : <span>$0.00</span></h4>
                                                <h4 class="shop-total">Total : <span>$27.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn text-center">
                                                <a class="default-btn" href="checkout.html">checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Cart info End -->
                            </div>
                        </div>
                    </div>
                    <!-- mobile menu -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li class="menu-dropdown">
                                        <a href="index.html">Home </a>

                                    </li>
                                    <li class="menu-dropdown">
                                    <li class="menu-dropdown">
                                        <a href="about.html">About Us </a>

                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Products </a>
                                        <ul class="sub-menu">
                                            <li><a href="covid_products.html">Covid-19</a></li>
                                            <li><a href="vehicles.html">E-Vehicles</a></li>
                                            <!--<li><a href="checkout.html">Checkout Page</a></li>-->
                                            <!--<li><a href="compare.html">Compare Page</a></li>-->
                                            <!--<li><a href="login.html">Login & Regiter Page</a></li>-->
                                            <!--<li><a href="my-account.html">Account Page</a></li>-->
                                            <!--<li><a href="wishlist.html">Wishlist Page</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="#">Business Plan </a>

                                        <ul class="sub-menu">
                                            <li><a href="bp.html">Business Plan </a></li>
                                            <li><a href="level_income.html">Income Levels</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-dropdown">
                                        <a href="referal.html">Referral Income </a>
                                    </li>

                                    <li class="menu-dropdown">
                                        <a href="business.html">Add Your Business <i
                                                class="ion-ios-arrow-down-a"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- mobile menu end-->
                </div>
            </div>
            <!--Header Bottom Account End -->
        </header>
        <!-- Header End -->
        <!-- Slider Arae Start -->
        <div class="slider-area">
            <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
                <!-- Slider Single Item Start -->
                <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img"
                    style="background-image: url(img/sample-32.jpg);">
                    <div class="container">
                        <div class="slider-content-16 slider-animated-1 text-left">
                            <h1 class="animated">
                                DISPOSABLE <br />
                                <strong>MEDICAL MASK</strong>
                            </h1>
                            <p class="animated">Capacity 100m Pcs/ Day</p>
                            <a href="#" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item End -->
                <!-- Slider Single Item Start -->
                <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img"
                    style="background-image: url(img/sample-33.jpg);">
                    <div class="container">
                        <div class="slider-content-16 slider-animated-1 text-left">
                            <h1 class="animated">
                                DISPOSABLE<br />
                                <strong>NITRILE GLOVES</strong>
                            </h1>
                            <p class="animated">Hardy 7 mil Heavy Duty Nitrile Gloves</p>
                            <a href="#" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item End -->
                <!-- Slider Single Item Start -->
                <div class="slider-height-10 d-flex align-items-start justify-content-start bg-img"
                    style="background-image: url(img/Slider.jpg);">
                    <div class="container">
                        <div class="slider-content-16 slider-animated-1 text-left">
                            <!-- <h1 class="animated">

                                </h1>
                                <p class="animated">Hardy 7 mil Heavy Duty Nitrile Gloves</p>  -->
                            <a href="#" class="shop-btn animated">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item End -->
            </div>
        </div>
        <!-- Slider Arae End -->
        <br />
        <!-- Banner Area Start -->
        <div class="banner-3-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">


                        <div class="banner-wrapper">
                            <a href="covid_products.html"><img src="img/Covid 19 Products (1).jpg" alt="" /></a>
                            <br /><br />
                            <h2 style="text-align:center;font-weight:bold">Covid-19 Products</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">

                        <div class="banner-wrapper">
                            <a href="vehicles.html"><img src="img/E- Vehicles (1).jpg" alt="" /></a>
                            <br /><br />
                            <h2 style="text-align:center;font-weight:bold">E-Vehicles</h2>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        <div class="banner-wrapper">
                            <a href="#"><img src="img/offers Zone.jpg" alt="" /></a>
                            <br />
                            <br />
                            <h2 style="text-align:center;font-weight:bold">Offers Zone</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->



        <!-- Banner Area Start -->
        <!--  <div class="banner-3-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-res-xs-30 mb-res-sm-30">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="assets/images/banner-image/48.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="assets/images/banner-image/49.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Banner Area End -->


        <!-- Hot deal area Start -->
        <section class="hot-deal-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="section-title">
                            <h2>Covid-19 Products</h2>
                        </div>
                        <!-- Section Title End-->
                    </div>
                </div>
                <div class="banner-inner-area d-flex">
                    <div class="banner-left">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="images/Covid-19.jpg" alt="" /></a>
                        </div>
                    </div>
                    <!-- New Arrivals Area Start -->
                    <div class="banner-right">
                        <!-- New Product Slider Start -->
                        <div class="new-product-slider-2 owl-carousel owl-nav-style owl-nav-style-5">
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/BOTTLES JET.jpg" alt="" />
                                            <img class="second-img" src="assets/images/BOTTLES JET.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">

                                        <h2><a href="#" class="product-link">BOTTLES JET</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹23.90</li>
                                                <li class="current-price">₹21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/AUTOMATIC HAND SANITIZER.jpg"
                                                alt="" />
                                            <img class="second-img" src="assets/images/AUTOMATIC HAND SANITIZER.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">AUTOMATIC HAND SANITIZER</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img"
                                                src="assets/images/chlorhexidine-gluconate-mouthwash.jpg" alt="" />
                                            <img class="second-img"
                                                src="assets/images/chlorhexidine-gluconate-mouthwash.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">CHLORHEXIDINE GLUCONATE MOUTHWASH</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹35.90</li>
                                                <li class="current-price">₹34.11</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/MIX.jpg" alt="" />
                                            <img class="second-img" src="assets/images/MIX.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">MIX</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹11.90</li>
                                                <li class="current-price">₹10.12</li>
                                                <li class="discount-price">-15%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Face Shield.jpg" alt="" />
                                            <img class="second-img" src="assets/images/Face Shield.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">FACE SHIELD</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹11.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->

                        </div>
                        <!-- Product Slider End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Tab Area Start -->

        <!-- Banner Area 2 Start -->
        <div class="banner-area-2 mt-60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-inner">
                            <a href="shop-4-column.html"><img src="images/Home Page banner.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area 2 End -->
        <!-- Hot deal area Start -->
        <section class="hot-deal-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="section-title">
                            <h2>E-Vehicles</h2>
                        </div>
                        <!-- Section Title End-->
                    </div>
                </div>
                <div class="banner-inner-area d-flex">
                    <div class="banner-left">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="images/E Vehicles1.jpg" alt="" /></a>
                        </div>
                    </div>
                    <!-- New Arrivals Area Start -->
                    <div class="banner-right">
                        <!-- New Product Slider Start -->
                        <div class="new-product-slider-2 owl-carousel owl-nav-style owl-nav-style-5">
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img"
                                                src="assets/images/1 vasavi electro wheelz Model (1).jpg" alt="" />
                                            <img class="second-img"
                                                src="assets/images/1 vasavi electro wheelz Model (1).jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                Windbr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹23.90</li>
                                                <li class="current-price">₹21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/V-60.jpg" alt="" />
                                            <img class="second-img" src="assets/images/V-60.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                        <h2><a href="single-product.html" class="product-link">Brixton Patrol All
                                                Terr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Vasavi Wheels (2).jpg" alt="" />
                                            <img class="second-img" src="assets/images/Vasavi Wheels (2).jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval
                                                Windbr...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹35.90</li>
                                                <li class="current-price">₹34.11</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Vasavi Wheels (4).jpg" alt="" />
                                            <img class="second-img" src="assets/images/Vasavi Wheels (4).jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Madden by Steve
                                                Madd...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹11.90</li>
                                                <li class="current-price">₹10.12</li>
                                                <li class="discount-price">-15%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Vasavi Wheels (5).jpg" alt="" />
                                            <img class="second-img" src="assets/images/Vasavi Wheels (5).jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Water and Wind
                                                Resist...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹11.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Vasavi Wheels E-Cycle (1).jpg"
                                                alt="" />
                                            <img class="second-img" src="assets/images/Vasavi Wheels E-Cycle (1).jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Juicy Couture Solid
                                                Slee...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/Vasavi Wheels.jpg" alt="" />
                                            <img class="second-img" src="assets/images/Vasavi Wheels.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Water and Wind
                                                Resist...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹11.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- Product Slider End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Hot Deal Area End -->
        <!-- Hot deal area Start -->
        <section class="hot-deal-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="section-title">
                            <h2>Offers Zone</h2>
                        </div>
                        <!-- Section Title End-->
                    </div>
                </div>
                <div class="banner-inner-area d-flex">
                    <div class="banner-left">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="images/Offers Zone.jpg" alt="" /></a>
                        </div>
                    </div>
                    <!-- New Arrivals Area Start -->
                    <div class="banner-right">
                        <!-- New Product Slider Start -->
                        <div class="new-product-slider-2 owl-carousel owl-nav-style owl-nav-style-5">
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img"
                                                src="assets/images/1 vasavi electro wheelz Model (1).jpg" alt="" />
                                            <img class="second-img"
                                                src="assets/images/1 vasavi electro wheelz Model (1).jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="" class="product-link">Vasavi electro wheelz</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹23.90</li>
                                                <li class="current-price">₹21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/BOTTLES JET.jpg" alt="" />
                                            <img class="second-img" src="assets/images/BOTTLES JET.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">BOTTLES JET</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">₹29.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/V-60.jpg" alt="" />
                                            <img class="second-img" src="assets/images/V-60.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">V-60</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹35.90</li>
                                                <li class="current-price">₹34.11</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/AUTOMATIC HAND SANITIZER.jpg"
                                                alt="" />
                                            <img class="second-img" src="assets/images/AUTOMATIC HAND SANITIZER.jpg"
                                                alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <h2><a href="#" class="product-link">AUTOMATIC HAND SANITIZER</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">₹11.90</li>
                                                <li class="current-price">₹10.12</li>
                                                <li class="discount-price">-15%</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->
                            <div class="product-inner-item">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/V-60.jpg" alt="" />
                                            <img class="second-img" src="assets/images/V-60.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="wishlist.html" title="Add to wishlist">
                                                <i class="ion-android-favorite-outline"></i>
                                            </a>
                                            <a class="quick_view mlr-10px" href="compare.html" title="Add to compare">
                                                <i class="ion-ios-shuffle-strong"></i>
                                            </a>
                                            <a class="quick_view" href="#" data-link-action="quickview"
                                                title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs text-center">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Water and Wind
                                                Resist...</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€11.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link-btn">
                                        <a href="#"> Add to cart</a>
                                    </div>
                                </article>
                            </div>
                            <!-- Product Single Item -->

                        </div>
                        <!-- Product Slider End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Hot Deal Area End -->
        <!-- Brand area start -->
        <!-- <div class="brand-area">
                <div class="container">
                    <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                        </div>
                        <div class="brand-slider-item">
                            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- Brand area end -->
        <!-- Footer Area start -->
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-4">
                            <!-- footer logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/Logo.png" alt="" /></a>
                            </div>
                            <!-- footer logo -->
                            <div class="about-footer">
                                <p class="text-info"></p>
                                <div class="need-help">
                                    <p class="phone-info">
                                        NEED HELP?

                                        <span>
                                            <a href="tel:+91 99127-72635">(+91)99127-72635</a>
                                        </span>
                                    </p>
                                </div>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-2 mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Information</h4>
                                <div class="footer-links">
                                    <ul>

                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="covid_products.html">Covid-19</a></li>
                                        <li><a href="vehicles.html">E-Vehicles</a></li>
                                        <li><a href="bp.html">Business Plan</a></li>
                                        <li><a href="referal.html">Referral Income</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-2 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Custom Links</h4>
                                <div class="footer-links">
                                    <ul>

                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="checkout.html">Chackout</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                        <div class="col-md-6 col-lg-4 mt-res-md-50px mt-res-sx-30px mt-res-md-30px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Newsletter</h4>
                                <div class="subscrib-text">
                                    <p></p>
                                </div>

                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                        name="mc-embedded-subscribe-form" method="post"
                                        action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input class="email" type="email" required=""
                                                placeholder="Enter your email here.." name="EMAIL" value="" />
                                            <div class="mc-news" aria-hidden="true"
                                                style="position: absolute; left: -5000px;">
                                                <input type="text" value="" tabindex="-1"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                            </div>
                                            <div class="clear">
                                                <input id="mc-embedded-subscribe" class="button" type="submit"
                                                    name="subscribe" value="Sign Up" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="img_app">
                                    <a href="#"><img src="assets/images/icons/app_store-2.png" alt="" /></a>
                                    <a href="#"><img src="assets/images/icons/google_play-2.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- footer single wedget -->
                    </div>
                </div>
            </div>
            <!--  Footer Bottom Area start -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <p class="copy-text">Copyright © <a href="https://hasthemes.com/"> CashbackMart</a>. All
                                Rights Reserved</p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!--  Footer Bottom Area End-->
        </footer>
        <!--  Footer Area End -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="assets/images/product-image/medical/1.jpg" alt="" />
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/images/product-image/medical/2.jpg" alt="" />
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/images/product-image/medical/3.jpg" alt="" />
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/images/product-image/medical/4.jpg" alt="" />
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2"
                                    role="tablist">
                                    <a class="active" data-toggle="tab" href="#pro-1"><img
                                            src="assets/images/product-image/medical/1.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-2"><img
                                            src="assets/images/product-image/medical/2.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-3"><img
                                            src="assets/images/product-image/medical/3.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-4"><img
                                            src="assets/images/product-image/medical/4.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore
                                    et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco
                                </p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#"> + Add To Cart</a>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->



    <div id="id01" class="modal">
        <?php
if (isset($_SESSION['error'])) {
    echo "
          <div class='callout callout-danger text-center'>
            <p>" . $_SESSION['error'] . "</p>
          </div>
        ";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p>
          </div>
        ";
    unset($_SESSION['success']);
}
?>
        <form class="modal-content animate" action="verify.php" method="post">
            <div class="imgcontainer">
                <h3 style="text-align:center">Login</h3>
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
            </div>
            <br />
            <br />
            <div class="container">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Username" name="email" required>

                <label for="psw"><b>Password</b></label>
                <span class="psw">Forgot <a href="#">password?</a></span>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br /><br />
                <!-- <button type="submit" class="loginbutn">Login</button> -->
                <input type="submit" class="loginbutn" name="login" value="Login">
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <label>

                </label>
            </div>

            <div class="container">

            </div>
        </form>
    </div>

    <!-- Scripts to be loaded  -->
    <!-- JS
============================================ -->
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <!--====== Vendors js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>