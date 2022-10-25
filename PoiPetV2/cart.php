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

                <li><a href="cart.php"><i class="fa fa-shopping-cart" style="display: block; color: #fff; margin: 10px; font-size: 22px; cursor: pointer;"></i></a></li>

            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>



<!----cart items details---->

<div class="small-container cart-page">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                <a  href="dt_product1.php"><img src="images/male/01SUPERSTAR SHOES/SUPERSTAR SHOES1.jpg"></a>
                    <div>
                        <p>SUPERSTAR SHOES</p>
                        <small>Price: $199.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1" min="1"></td>
            <td>$199.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                <a  href="dt_product2.php"><img src="images/male/02SAMBA JUVENTUS/SAMBA JUVENTUS1.png"></a>
                    <div>
                        <p>SAMBA JUVENTUS</p>
                        <small>Price: $129.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1" min="1"></td>
            <td>$129.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                <a  href="dt_product3.php"><img src="images/male/03ULTRABOOST 22 SHOES/ULTRABOOST 22 SHOES4 2.png"></a>
                    <div>
                        <p>ULTRABOOST 22 SHOES</p>
                        <small>Price: $179.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1" min="1"></td>
            <td>$179.00</td>
        </tr>
    </table>

    <div class="total-price">

        <table>
            <tr>
                <td>Subtotal</td>
                <td>$507.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$35.49</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$542.49</td>
            </tr>
        </table>
        
    </div>
</div>

<p style="text-align: right; margin-top: -80px;margin-right:210px"><a href="" class="btn">CHECKOUT</a></p>



<!-------Footer------->

<section class="footer">
    <h4 id="contact">Contact Us</h4>
    <p>Address: Plot No.8, Salt Lake Bypass, LB Block, Sector III, Salt Lake City, Kolkata, West Bengal, India
        <br>E-mail: thongchaiboonchan@poipet.com
        <br>Tel: 033 2335 5215
        <br>เว็บไซต์นี้เป็นส่วนหนึ่งของรายวิชาการเขียนโปรแกรมบนเว็บ 4122306 ภาคเรียนที่ 1 ปีการศึกษา 2565</p>
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