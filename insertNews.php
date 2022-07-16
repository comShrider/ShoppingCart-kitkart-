<?php
    include("dbconnect.php");
    $heading = $_REQUEST['txtHeading'];
    $details = $_REQUEST['txtDetails'];

    mysqli_query($con," insert into news_info(news_heading,news_details,reg_date) values('$heading','$details',now()) ")or die("insertion error");

    header("location:createNewsForm.php?resmsg=1");
?>