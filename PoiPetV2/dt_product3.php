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
    <title>ULTRABOOST 22 SHOES - PoiPet Shop</title>
        <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</head>
<body>
<section class="header" style="min-height: 10vh;;">
    <nav>
        <a href="index.php"><img src="images/logo.png" width="100px" height="100px"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php #about_us">ABOUT</a></li>

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
                    <li><a href="" style="font-weight: bold; cursor:defualt"><?php echo strtoupper($acc_txt) ?></a></li>
                    <div class="dropdown-content" style="left: 0; text-align: left;">
                        <a href="logout.php" style="font-size: 13px;"><?php echo $log_txt ?> <i class="fa fa-sign-in" style="display: inline-flex;"></i></a>
                    </div>
                </div>

                <li><a href="cart.php"><i class="fa fa-shopping-cart" style="display: block; color: #fff; margin: 10px; font-size: 22px; cursor: pointer;"></i></a></li>

            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>

<!---single Product details--->

<div class="small-container single-product">
    <div class="row sp_row">
        <div class="col-2">
            <img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES1.png" width="100%" id="ProductImg">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES1.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES2.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES3.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES4 2.png" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <h1>ULTRABOOST 22 SHOES</h1>
            <h4>$179.00</h4>

            <input type="number" value="1" min="1">
            <a href="" class="btn">Add to Cart</a>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            <br>
            <p>SAY HELLO TO INCREDIBLE ENERGY RETURN.<br>These Ultraboost running shoes serve up comfort and responsiveness. You'll be riding on a BOOST midsole for endless energy, with a Linear Energy Push system and a Continental??? Rubber outsole.
            </p>

        </div>
    </div>
</div>

<!----Relate product---->

<div class="small-container">
    <div class="row">
        <h2>Related Peoducts</h2>
        <p>View more</p>
    </div>
</div>

<div class="small-container">

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


    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }


</script>

</body>
</html>