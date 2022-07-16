<?php
    include("dbconnect.php");
    $cart_id = $_REQUEST['cart_id'];

    mysqli_query($con,"delete from cart_info where cart_id = '$cart_id' ");

    header("location:displayCart.php");

?>