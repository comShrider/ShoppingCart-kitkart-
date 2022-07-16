<?php @session_start();

    include("dbconnect.php");
    $item_id = $_SESSION['item_id'];
    $item_price = $_SESSION['item_price'];
    $username = $_SESSION['uname'];
    $quantity = $_REQUEST['txtQuantity'];

    mysqli_query($con,"insert into cart_info(item_id,item_qty,item_price,username,reg_date) values('$item_id','$quantity','$item_price','$username',now()) ") or die("insertion failed");

    header("location:displayCart.php?qty=$quantity");

?>