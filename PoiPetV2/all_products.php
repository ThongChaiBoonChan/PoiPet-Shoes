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

/*Cart*/
require_once("cartController.php");
$cartCon = new CartController();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - PoiPet Shop</title>
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


<div class="small-container">

    <div class="row roe-2">
        <h2>All Products</h2>
    </div>

<!---?????????1--->
<div class="row" style="margin-bottom: -100px;">
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
            <img src="images/female/01 ADIDAS STAN SMITH X LEGO?? SHOES/ADIDAS STAN SMITH X LEGO?? SHOES 1.jpg">
            <h4>ADIDAS STAN SMITH X LEGO?? SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$159.00</p>
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
    </div>
<!---?????????2--->
    <div class="row" style="margin-bottom: -100px;">
        <div class="col-4">
            <img src="images/female/02 SUPERNOVA SHOES/SUPERNOVA SHOES 3.jpg">
            <h4>SUPERNOVA SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$119.00</p>
        </div>
        <div class="col-4">
            <img src="images/kid/02 DURAMO SL SHOES/DURAMO SL SHOES 1.jpg">
            <h4>DURAMO SL SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$80.00</p>
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
            <img src="images/female/03 ZX 22 BOOST SHOES/ZX 22 BOOST SHOES 2.jpg">
            <h4>ZX 22 BOOST SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$142.00</p>
        </div>
    </div>
<!---?????????3--->
    <div class="row" style="margin-bottom: -10px;">
        <div class="col-4">
            <img src="images/kid/03 NY 90 SHOES/NY 90 SHOES 3.jpg">
            <h4>NY 90 SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$79.00</p>
        </div>
        <div class="col-4">
            <img src="images/male/04GALAXY 6 SHOES/GALAXY 6 SHOES 3.jpg">
            <h4>GALAXY 6 SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$119.00</p>
        </div>
        <div class="col-4">
            <img src="images/female/04 DURAMO 9 SHOES/DURAMO 9 SHOES 2.jpg">
            <h4>DURAMO 9 SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$139.00</p>
        </div>
        <div class="col-4">
            <img src="images/kid/04 ADIDAS X LEGO?? SPORT PRO SHOES/ADIDAS X LEGO?? SPORT PRO SHOES 1.jpg">
            <h4>ADIDAS X LEGO?? SPORT PRO SHOES</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$99.00</p>
        </div>
    </div>
    
    <div class="page-btn">
        <a href="all_products.php"><span>1</span></a>
        <a href="all_products2.php"><span>2</span></a>
        <a href="all_products2.php"><span>&#8594;</span></a>
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

</script>

</body>
</html>