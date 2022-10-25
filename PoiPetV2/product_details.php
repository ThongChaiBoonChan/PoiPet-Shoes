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

            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>

<!---single Product details--->

<div class="small-container single-product">
    <div class="row sp_row">
        <div class="col-2">
            <img src="images/Product/01test/fp1.png" width="100%" id="ProductImg">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/Product/01test/fp1.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/Product/01test/fp2.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/Product/01test/fp3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/Product/01test/fp4.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <h1>T-Shirt by Enjoy Dude</h1>
            <h4>$29.99</h4>

            <input type="number" value="1" min="1">
            <a href="" class="btn">Add to Cart</a>
            <h3>Product Details<i class="fa fa-indent"></i></h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Architecto aliquam nisi commodi, dolorem delectus dolores ea
                  quod ipsa alias, accusantium sunt sed adipisci odit velit
                   aspernatur. Asperiores at velit voluptatibus?
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

    <div class="row " style="margin-bottom: -100px;">
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