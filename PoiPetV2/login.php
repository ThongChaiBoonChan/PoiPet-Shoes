<?php

@include 'connection.php';

session_start();
//SignUp
if(isset($_POST['su_submit'])){

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $address = $_POST['address'];
   $tel = $_POST['tel'];
   $suemail = $_POST['suemail'];
   $supswd = md5($_POST['supswd']);
   $bdate = $_POST['bdate'];

   $select = " SELECT * FROM tb_customer WHERE cus_email = '$suemail' && password = '$supswd' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

    $error[] = 'user already exist!';

    }else{

        //$insert = "INSERT INTO tb_customer (cus_Fname) VALUES ('$fname')";
        $insert = "INSERT INTO tb_customer (cus_Fname,cus_Lname,cus_address,cus_tel,cus_email,cus_password,cus_birthdate)
            VALUES ('$fname','$lname','$address','$tel','$suemail','$supswd','$bdate')";

        mysqli_query($conn, $insert);
        header('location:login.php');
        
    }


};
//Login
if(isset($_POST['log_submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['log_email']);
    $pass = md5($_POST['log_pswd']);
 
    $select = " SELECT * FROM tb_customer WHERE cus_email = '$email' && cus_password = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
        $row = mysqli_fetch_array($result);
        $_SESSION['user_name'] = $row['cus_Fname'];
        header('location:index.php');
    }else{
       $error[] = 'incorrect email or password!';
    }
 
 };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoiPet - SignUp</title>
        <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <body>
        <div  class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
            <a href="index.php"><h1 style="text-align: center; margin-bottom: -40px; cursor: pointer;"><img src="images/logo.png" style="height: 30px; width: 60px;"></h1></a>

            <div class="signup">
                <form method="POST"> <!--action="insert_signup.php"-->
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="fname" placeholder="First Name" required="">
                    <input type="text" name="lname" placeholder="Last Name" required="">
                    <input placeholder="Birth Date" name="bdate" class="textbox-n" type="text" onfocus="(this.type='date')" id="date">
                    <input type="text" name="address" placeholder="Address" required="">
                    <input type="text" name="tel" placeholder="Phone Number" required="">
                    <input type="email" name="suemail" placeholder="Email" required="">
                    <input type="Password" name="supswd" placeholder="Password" required="">
                    <button type="submit" name="su_submit" value="signup">Sign up</button>
                </form>
            </div>

            <div class="login">
                <form method="POST">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="log_email" placeholder="Email" required="">
                    <input type="Password" name="log_pswd" placeholder="Password" required="">
                    <button type="submit" name="log_submit" value="login">Login</button>
                </form>
            </div>
        </div>
    </body>
    
</body>
</html>