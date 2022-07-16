<?php @session_start();
$_SESSION['item_price'] = $_REQUEST['item_price'];
$_SESSION['item_id'] = $_REQUEST['item_id'];

    if(isset($_SESSION['uname'])){
        header("location:quantityForm.php");
    }
    else{
        header("location:LoginAfterAddToCartForm.php");
    }


?>