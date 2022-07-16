<?php
    include("dbconnect.php");
    $name = $_REQUEST['txtName'];
    $dname = $_REQUEST['txtDname'];
    $img = $_FILES['flImg'];
    $img_path = $img['name'];
    move_uploaded_file($img['tmp_name'],".\\collection\\$img_path");
    $cat_type = $_REQUEST['cat_type'];
    $parent_cat_id = $_REQUEST['parent_cat'];

    if($cat_type == "primary"){
        $parent_cat_id = 0;
    }

    mysqli_query($con,"insert into category_info(cat_name,cat_dname,img_path,cat_type,parent_cat_id,reg_date) values('$name','$dname','$img_path','$cat_type','$parent_cat_id',now())")or die("insertion error");

    header("location:createCategoryForm.php?resmsg=1");
?>