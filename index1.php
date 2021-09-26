<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>



<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$12.99 <span>40.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$19.19 <span>20.29</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$19.99 <span>20.69</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$17.99 <span>23.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$25.99 <span>28.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$15.19 <span>40.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>tasty and healty</h3>
            <div class="price">$12.99 <span>30.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>


    </div>

<section class="footer">

    <div class="container">
        <h2>KHÁCH HÀNG NHẬP THÔNG TIN VÀO ĐỂ ĐƯỢC NHẬN GIẢM GIÁ </h2>
        <form action="/action_page.php">
            <label for="fname">Họ Và Tên</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ và tên...">
     
            <label for="lname">Email</label>
            <input type="text" id="email" name="email" placeholder="Nhập email...">
     
            <label for="country">Số Điện Thoại</label>
            <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">
     
            <label for="address">Địa Chỉ</label>
            <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">
     
            <input type="submit" value="Submit">
        </form>
    </div>

</section>

<script src="js/script.js"></script>

</body>
</html>