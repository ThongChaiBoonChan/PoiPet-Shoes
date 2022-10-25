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
    <title>Kid Products - PoiPet Shop</title>
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
                    <li><a href="" style="font-weight: bold;"><?php echo strtoupper($acc_txt) ?></a></li>
                    <div class="dropdown-content" style="left: 0; text-align: left;">
                        <a href="logout.php" style="font-size: 13px;"><?php echo $log_txt ?> <i class="fa fa-sign-in" style="display: inline-flex;"></i></a>
                    </div>
                </div>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>


<div class="small-container">

    <div class="row roe-2">
        <h2>Kid Products</h2>
        <select>
            <option>Defualt Sorting</option>
            <option>Sort by price</option>
            <option>Sort by popularity</option>
            <option>Sort by rating</option>
            <option>Sort by sale</option>
        </select>
    </div>

    <div class="row" style="margin-bottom: -100px;">
        <div class="col-4">
        <img src="images/kid/01 ADVANTAGE SHOES/ADVANTAGE SHOES 1.jpg">
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
        <img src="images/kid/04 ADIDAS X LEGO® SPORT PRO SHOES/ADIDAS X LEGO® SPORT PRO SHOES 1.jpg">
            <h4>ADIDAS X LEGO® SPORT PRO SHOES</h4>
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

    <div class="row" style="margin-bottom: -100px;">
        <div class="col-4">
        <img src="images/kid/05 ADIDAS X DISNEY MICKEY MOUSE ALTASWIM SANDALS/ADIDAS X DISNEY MICKEY MOUSE ALTASWIM SANDALS 3.png">
            <h4>Button Shoes Summer-800x</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$89.00</p>
        </div>
        <div class="col-4">
        <img src="images/kid/06 Nike Force 1 Premium/Nike Force 1 Premium 1.png">
            <h4>Nikee Force 1</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$99.00</p>
        </div>
        <div class="col-4">
            <img src="images/Featured products/fp3.jpg">
            <h4>SKX49432 Kids</h4>
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
            <img src="images/Featured products/fp4.jpg">
            <h4>Nikee Force-1</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$199.00</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: -10px;">
        <div class="col-4">
            <img src="images/Featured products/fp1.png">
            <h4>U.S. Polo Assn. Men</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$299.00</p>
        </div>
        <div class="col-4">
            <img src="images/Featured products/fp2.png">
            <h4>Button Shoes Summer-800x</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$189.00</p>
        </div>
        <div class="col-4">
            <img src="images/Featured products/fp3.jpg">
            <h4>SKX49432 Kids</h4>
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
            <img src="images/Featured products/fp4.jpg">
            <h4>Nikee Force-1</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$199.00</p>
        </div>
    </div>
    
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>
    
</div>

<!-------Footer------->

<section class="footer">
    <h4 id="contact">Contact Us</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Sunt ipsam enim saepe incidunt fugiat illo.<br> quis minima 
        accusamus architecto a labore illum aliquid nobis officiis
        expedita, est fuga animi assumenda?</p>
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