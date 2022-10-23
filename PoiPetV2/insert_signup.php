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
     VALUES ('Thongchai','Boonchan','Bangkok','0933675859','thongchai@gmail.com','1234567')";

    //$sql = "INSERT INTO tb_customer (cus_Fname) VALUES ('Gun')";

    $result = mysqli_query($conn, $sql);

    //$result = mysqli_query($conn,$sql);

    if($result){
        echo "<script> alert('signup success'); <script> ";
        echo "<script> window.location='index.php'; <script> ";
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        echo "<script> alert('signup failed'); <script> ";
    }
    mysqli_close($conn);

?>