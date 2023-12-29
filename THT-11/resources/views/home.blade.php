<!DOCTYPE html>
<html>

<head>
    <title> E-Commerce THT</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <!-- CSS LINK-->
    <link rel="stylesheet" href="tht_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    @php
    $bannerImage = asset('img/banner-3.png');
    @endphp
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Jost', sans-serif;
            list-style: none;
            text-decoration: none;
        }

        header {
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 10%;
        }

        .maintext {
            display: grid;
            grid-template-areas: "aside main";
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }

        .navmenu {
            display: flex;
            list-style: none;
        }

        .navmenu a {
            color: #2c2c2c;
            font-size: 16px;
            text-transform: capitalize;
            padding: 10px 20px;
            font-weight: 400;
            transition: all .42s ease;
        }

        .navmenu a:hover {
            color: #EE1c47;
        }

        .nav-icon {
            display: flex;
            align-items: center;
        }

        .nav-icon i {
            margin-right: 20px;
            color: #2c2c2c;
            font-size: 25px;
            font-weight: 400;
            transition: all .42s ease;
        }

        .nav-icon i:hover {
            transform: scale(1, 1);
            color: #EE1c47;
        }

        #menu-icon {
            font-size: 35px;
            color: #2c2c2c;
            z-index: 100001;
            cursor: pointer;
        }

        section {
            padding: 5% 10%;

        }

        .main-home {
            width: 100%;
            height: 100vh;
            background-image: url('{{ $bannerImage }}');
            background-position: center;
            background-size: cover;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }

        .main-text h5 {
            color: #EE1c47;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 500;
        }

        .main-text h1 {
            color: black;
            text-transform: capitalize;
            font-size: 65px;
            line-height: 1.1;
            font-weight: 600;
            margin: 6px 0 10px;
        }

        .main-text p {
            color: #333c56;
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
        }

        .main-btn {
            display: inline-block;
            color: #111;
            font-size: 16px;
            font-weight: 500;
            text-transform: capitalize;
            border: 2px solid #111;
            padding: 12px 25px;
            transition: all .42s ease;
        }

        .main-btn i {
            vertical-align: middle;
        }

        .down-arrow {
            position: absolute;
            top: 85%;
            right: 11%;
        }

        .down i {
            font-size: 30px;
            color: #2c2c2c;
            border: 2px solid #2c2c2c;
            border-radius: 50px;
            padding: 12px 12px;
        }

        .down i:hover {
            background-color: #2c2c2c;
            color: #fff;
            transition: all .42s ease;
        }

        .main-btn:hover {
            background-color: #000;
            color: #fff;
        }

        header.sticky {
            background: #fff;
            padding: 20px 10%;
            box-shadow: 0px 0px 10px rgb(0, 0, 0 / 10%);
        }

        /* trending-section-css */
        .center-text h2 {
            color: #111;
            font-size: 28px;
            text-transform: capitalize;
            text-align: center;
            margin-bottom: 30px;
        }

        .center-text span {
            color: #EE1c47;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .row {
            position: relative;
            transition: all .40s;
        }

        .row img {
            width: 100%;
            height: auto;
            transition: all .40s;
        }

        .row img:hover {
            transform: scale(0.9);
        }

        .product-text h5 {
            position: absolute;
            top: 13px;
            left: 13px;
            color: #fff;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            background-color: #27b373;
            padding: 3px 10px;
            border-radius: 2px;
        }

        .heart-icon {
            position: absolute;
            right: 0;
            font-size: 20px;
        }

        .heart-icon:hover {
            color: #EE1c47;
        }

        .ratting i {
            color: #ff8c00;
            font-size: 18px;
        }

        .price h4 {
            color: #111;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 400;
        }

        .price p {
            color: #151515;
            font-size: 14px;
            font-weight: 600;
        }

        .client-reviews {
            background-color: #F3F4F6;
        }

        .reviews {
            text-align: center;
        }

        .reviews h3 {
            color: #111;
            font-size: 25px;
            text-transform: capitalize;
            text-align: center;
            font-weight: 700;
        }

        .reviews img {
            width: 100px;
            height: auto;
            border-radius: 50px;
            margin: 10px 0;
        }

        .reviews p {
            color: #707070;
            font-size: 16px;
            font-weight: 400;
            line-height: 25px;
            margin-bottom: 10px;
        }

        .reviews h2 {
            font-size: 22px;
            color: #000;
            font-weight: 400;
            text-transform: capitalize;
            margin-bottom: 2px;
        }

        /*  */

        .up-center-text h2 {
            text-align: center;
            color: #111;
            font-size: 25px;
            text-transform: capitalize;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .cart img {
            width: 380px;
            height: auto;
            border-radius: 5px;
        }

        .update-cart {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, auto));
            gap: 1 rem;
        }

        .cart h5 {
            color: #636872;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 500;
        }

        .cart h4 {
            color: #111;
            font-size: 18px;
            font-weight: 600;
        }

        .cart p {
            color: #707070;
            font-size: 15px;
            max-width: 380px;
            line-height: 25px;
            margin-bottom: 12px;
        }

        .cart h6 {
            color: #151515;
            font-size: 14px;
            font-weight: 500;
        }

        .first-info img {
            max-width: 100px;
            height: auto;
        }

        /* Contact */

        .contact {
            background-color: #F3F4F6;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, auto));
            gap: 3rem;
        }

        .contact-info h4 {
            color: #212529;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .contact-info p {
            color: #565655;
            font-size: 14px;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 1.5;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all .42s;
        }

        .contact-info p:hover {
            color: #EE1c47;
        }

        .social-icon i {
            color: #565655;
            margin-right: 10px;
            font-size: 20px;
            transition: all .42s;
        }

        .social-icon i:hover {
            transform: scale(1.3);
        }
    </style>

</head>

<body>

    <header>

        <div class="logo">
            <img src="{{ URL('img/wg.png') }}" width="250" height="200">
        </div>

        <div>
            <ul class="navmenu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="nav-icon">
            <a href="#"><i class="bx bx-search"></i></a>
            <a href="#"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
            <a href="login.blade.php"><i class='bx bx-log-out'></i></a>
        </div>
    </header>

    <section class="main-home">
        <div class="main-text">
            <h5>Winter Collection</h5>
            <h1>New Winter <br> Collection</h1>
            <p>There's nothing like trend</p>
            <a href="#" class="main-btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
        </div>

        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
        </div>
    </section>

    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending<span>products</span></h2>
        </div>

        <div class="products">
            <div class="row">
                <img src="{{ URL('img/1.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/2.jpg') }}" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Formal Women Lowers</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/3.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Trend</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Half Running Suit</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/4.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Fancy Dress</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/5.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Trend</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Flix Jeans</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/6.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Fancy Salwar Suit</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/7.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Printed Straight Kurta</h4>
                    <p>$99-$129</p>
                </div>
            </div>

            <div class="row">
                <img src="{{ URL('img/8.jpg') }}" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>

                <div class="price">
                    <h4>Collot Dress</h4>
                    <p>$99-$129</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Client Review -->

    <section class="client-reviews">
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="{{ URL('img/team-1.jpg') }}" alt="">
            <p> Bagus banget mantap mantap</p>
            <h2> Reva Ananda</h2>
            <p> CEO of WhiteGate</p>
        </div>
    </section>

    <!-- Update News -->
    <section class="Update-news">
        <div class="up-center-text">
            <h2>New Updates</h2>
        </div>

        <div class="update-cart">
            <div class="cart">
                <img src="{{ URL('img/bl-1.png') }}" alt="">
                <h5> 26 jan 2022</h5>
                <h4> Let's Start bring sale on this summer vacation</h4>
                <p> nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean et tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque </p>

                <h6>Continue Reading...</h6>
            </div>

            <div class="cart">
                <img src="{{ URL('img/bl-2.png') }}" alt="">
                <h5> 26 jan 2022</h5>
                <h4> Let's Start bring sale on this summer vacation</h4>
                <p> nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean et tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque </p>

                <h6>Continue Reading...</h6>
            </div>

            <div class="cart">
                <img src="{{ URL('img/bl-3.png') }}" alt="">
                <h5> 26 jan 2022</h5>
                <h4> Let's Start bring sale on this summer vacation</h4>
                <p> nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean et tortor at risus viverra adipiscing at in tellus integer feugiat scelerisque </p>

                <h6>Continue Reading...</h6>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="contact-info">
            <div class="first-info">
                <img src="Nolan.jpg" alt="">

                <p>3245 Grove Street, <br> Tx united kingdom 765378</p>
                <p>03984618273</p>
                <p>Carl Johnson</p>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                </div>
            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact Us</p>
                <p>About Page</p>
                <p>Size Guide</p>
                <p>Shopping & Resturns</p>
                <p>Privacy</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Men's Shopping</p>
                <p>Women's Shopping</p>
                <p>Kid's Shopping</p>
                <p>Furniture</p>
                <p>Discount</p>
            </div>

            <div class="fourth-info">
                <h4>Company</h4>
                <p>About</p>
                <p>Blog</p>
                <p>Affiliate</p>
                <p>Login</p>
            </div>

            <div class="five">
                <h4>Subscribe</h4>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
                <p>nibh mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo elit at imperdiet</p>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
            </div>
        </div>
    </section>

    <script src="java.js"></script>
    <script>
        const header = document.querySelector("header")

        window.addEventListener("scroll", function() {
            header.classList.toggle("sticky", this.window.scrollY > 0)
        })
    </script>

</body>

</html>