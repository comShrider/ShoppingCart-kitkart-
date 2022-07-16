<?php
    include("dbconnect.php");

    $name = $_REQUEST["txtName"];
    $email = $_REQUEST["txtEmail"];
    $mobile = $_REQUEST["txtMobile"];
    $address = $_REQUEST["txtAddress"];
    $username = $_REQUEST["txtUserName"];
    $password = $_REQUEST["txtPass"];

    mysqli_query($con,"insert into user_info(user_name,user_email,user_mobile,user_address,user_username,user_pass,user_type,reg_date) values('$name','$email','$mobile','$address','$username','$password','user',now())")or die("insertion error");

    header("location:index.php?uname=$username&utype=user");
?>