<?php
    include("dbconnect.php");
    $name = $_REQUEST['txtName'];
    $img = $_FILES['flImg'];
    $img_path = $img['name'];
    move_uploaded_file($img['tmp_name'],".\\collection\\$img_path");
    $details = $_REQUEST['txtDetails'];
    $price = $_REQUEST['txtPrice'];
    $discount = $_REQUEST['txtDiscount'];
    $parent_cat_id = $_REQUEST['parent_cat'];

    mysqli_query($con,"insert into item_info(item_name,img_path,item_details,item_price,item_discount,parent_cat_id,reg_date) values('$name','$img_path','$details','$price','$discount','$parent_cat_id',now())")or die("insertion error");

    header("location:createItemForm.php?resmsg=1");
?>