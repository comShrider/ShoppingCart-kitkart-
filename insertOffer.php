<?php
$cats = "";
    function getChild($parent_id){
        $GLOBALS['cats'] = $GLOBALS['cats'].$parent_id."-";
        
        include("dbconnect.php");
        $rsCat = mysqli_query($con,"select cat_id from category_info where parent_cat_id = '$parent_id' ")or die("query error");
        if(mysqli_num_rows($rsCat)==0){
            return;
        }
        else{
            while($row = mysqli_fetch_array($rsCat)){
                getChild($row['cat_id']);
            }
        }
    }

    include("dbconnect.php");
    $name = $_REQUEST['txtName'];
    $start_date = $_REQUEST['dtStartDate'];
    $end_date = $_REQUEST['dtEndDate'];
    $discount = $_REQUEST['txtDiscount'];
    $cat_id = $_REQUEST['cat_id'];

    $tmpDate = strtotime('1 day'.$end_date);
    $newDate = date('y-m-d',$tmpDate);

    getChild($cat_id);
    $cats = substr($cats,0,strlen($cats)-1);

    mysqli_query($con,"insert into offer_info(offer_name,offer_category,offer_start_date,offer_end_date,offer_discount,reg_date) values('$name','$cats','$start_date','$newDate','$discount',now()) ");

    header("location:createOfferForm.php?resmsg=1");
?>