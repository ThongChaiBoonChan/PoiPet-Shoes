<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
    $acc_txt = 'ACCOUNT';
    $log_txt = 'LOGIN';
}else{
    $acc_txt = $_SESSION['user_name'];
    $log_txt = 'LOGOUT';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoiPet Shop</title>
        <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</head>
<body>
<section class="header">
    <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#about_us">ABOUT</a></li>

                <!--DropDown-->
                <div class="dropdown">
                    <li><a href="all_products.php">SHOP</a></li>
                    <div class="dropdown-content" style="left: 0; text-align: left;">
                        <a href="male_products.php">Male</a>
                        <a href="female_products.php">Female</a>
                        <a href="kid_products.php">Kid</a>
                    </div>
                </div>

                <li><a href="#contact">CONTACT</a></li>

                <!--DropDown-->
                <div class="dropdown">
                    <li><a href="" style="font-weight: bold;"><?php echo strtoupper($acc_txt) ?></a></li>
                    <div class="dropdown-content" style="left: 0; text-align: left;">
                        <a href="logout.php" style="font-size: 13px;"><?php echo $log_txt ?> <i class="fa fa-sign-in" style="display: inline-flex;"></i></a>
                    </div>
                </div>

                <li><a href="cart.php"><i class="fa fa-shopping-cart" style="display: block; color: #fff; margin: 10px; font-size: 22px; cursor: pointer;"></i></a></li>
                
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    
<div class="text-box">
    <h1>Flood Day Sales 80%<i class="fa fa-ship" aria-hidden="true"></i></h1>
    <p>Give Away, Free Shipping and many more. 
        <br>Reduced prices for floods Income minus expenses is not donated to anyone:)
    </p>
    <a href="all_products.php" class="hero-btn">GO!</a>
</div> 

</section>

<!-------featured products------->

<div class="small-container">
    <br>
    <br>
    <br>
    <h2 class="title" style="color: black;">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a  href="dt_product1.php"><img src="images/male/01SUPERSTAR SHOES/SUPERSTAR SHOES1.jpg"></a>
            <h4>SUPERSTAR SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$199.00</p>
        </div>
        <div class="col-4">
        <a  href="dt_product2.php"><img src="images/male/02SAMBA JUVENTUS/SAMBA JUVENTUS1.png"></a>
            <h4>SAMBA JUVENTUS1</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$129.00</p>
        </div>
        <div class="col-4">
        <a  href="dt_product3.php"><img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES4 2.png"></a>
        <h4>ULTRABOOST 22 SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$179.00</p>
        </div>
        <div class="col-4">
        <a  href="dt_product4.php"><img src="images/kid/01 ADVANTAGE SHOES/ADVANTAGE SHOES 1.jpg"></a>
            <h4>ADVANTAGE SHOES </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$69.00</p>
        </div>
    </div>
</div>

<!-------type------->

<section class="type">
    <h1>For All</h1>
    <p>Our shoes are suitable for all ages.</p>

    <div class="row">
        <div class="type-col">
            <img src="images/shoes1.jpg">
            <div class="layer">
                <a href="male_products.php"><h3>Male</h3></a>
            </div>
        </div>
        <div class="type-col">
            <img src="images/shoes2.png">
            <div class="layer">
                <a href="female_products.php"><h3>Female</h3></a>
            </div>
        </div>
        <div class="type-col">
            <img src="images/shoes3.png">
            <div class="layer">
                <a href="kid_products.php"><h3>Kid</h3></a>
            </div>
        </div>
    </div>
</section>


<!-------Shoes--------->

<section class="shoes">
    <h1 id= "about_us">Our Brand</h1>
    <p>PoiPet, Innovation of The hell walking.</p>

    <div class="row">
        <div class="shoes-col">
            <h3>Mirror 100%</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis delectus expedita placeat, totam iure enim 
                quibusdam iusto id, eius distinctio, repudiandae sequi 
                deleniti facere cumque debitis tempora reiciendis! 
                Debitis, rerum.</p>
        </div>
        <div class="shoes-col">
            <h3>Factory New</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis delectus expedita placeat, totam iure enim 
                quibusdam iusto id, eius distinctio, repudiandae sequi 
                deleniti facere cumque debitis tempora reiciendis! 
                Debitis, rerum.</p>
        </div>
        <div class="shoes-col">
            <h3>PoiPet Style</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Facilis delectus expedita placeat, totam iure enim 
                quibusdam iusto id, eius distinctio, repudiandae sequi 
                deleniti facere cumque debitis tempora reiciendis! 
                Debitis, rerum.</p>
        </div>
    </div>

</section>

<!-------popular

<section class="popular">
    <h1><i class="fa fa-star"></i> Popular <i class="fa fa-star"></i></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <div class="row">
        <div class="popular-col">
            <img src="images/pop1.png">
            <h3>Son Sung</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Culpa, tempore eius. In, distinctio ad facere odio vero.</p>
        </div>
        <div class="popular-col">
            <img src="images/pop2.png">
            <h3>Nikee</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Culpa, tempore eius. In, distinctio ad facere odio vero.</p>
        </div>
        <div class="popular-col">
            <img src="images/pop3.png">
            <h3>Chang Dao</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Culpa, tempore eius. In, distinctio ad facere odio vero.</p>
        </div>
    </div>

</section>
------->

<!-------celebrity------->

<section class="celebrity">
    <h1>Celebrity's Rate</h1>
    <p>What's she said about us.</p>

    <div class="row">
        <div class="celebrity-col">
            <img src="images/cele1.webp">
            <div>
                <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Suscipit placeat aperiam nihil modi cumque necessitatibus 
                     voluptas eius harum, natus et magnam, ipsa sed ab voluptatum 
                     dolore vero. Numquam, voluptatum voluptas!"</p>
                <h3>Kondern Rav</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="celebrity-col">
            <img src="images/cele2.webp">
            <div>
                <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Suscipit placeat aperiam nihil modi cumque necessitatibus 
                     voluptas eius harum, natus et magnam, ipsa sed ab voluptatum 
                     dolore vero. Numquam, voluptatum voluptas!"</p>
                <h3>Ving Tee</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
</section>

<!-------Call To Action------->

<section class="cta">
    <h1><img src="images/logo.png" style="height: 150px; width:300px"></h1>
    <h1>The Innovation of Hell walking</h1>
    <a href="all_products.php" class="hero-btn">Get One!</a>
</section>

<!-------Footer------->

<section class="footer">
    <h4 id="contact">Contact Us</h4>
    <p>Address: Plot No.8, Salt Lake Bypass, LB Block, Sector III, Salt Lake City, Kolkata, West Bengal, India
        <br>E-mail: thongchaiboonchan@poipet.com
        <br>Tel: 033 2335 5215
        <br>????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? 4122306 ????????????????????????????????? 1 ?????????????????????????????? 2565</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by O</p>
</section>

<!-------JavaScript for Toggle Menu-------> 
<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>