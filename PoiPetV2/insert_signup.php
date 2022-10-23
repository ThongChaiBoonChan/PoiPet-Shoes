<?php

    include 'connection';
    //รับค่าตัวแปลจาก Login
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $suemail = $_POST['suemail'];
    $supswd = $_POST['supswd'];

    //insert
    $sql = "INSERT INTO tb_customer (cus_Fname,cus_Lname,cus_address,cus_tel,cus_email,cus_password)
     VALUES ('$fname','$lname','$address','$tel','$suemail','$supswd')";

    $resualt = mysqli_query($conn,$sql);

    if($resualt){
        echo "<script> alert('signup success'); <script> ";
        echo "<script> window.location='index.php'; <script> ";
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        echo "<script> alert('signup failed'); <script> ";
    }
    mysqli_close($conn);

?>