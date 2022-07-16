<?php session_start();

    include("dbconnect.php");
    $heading = $_REQUEST['txtHeading'];
    $details = $_REQUEST['txtDetails'];
    $username = $_SESSION['uname'];
    $receiver = $_REQUEST['txtTo'];

    mysqli_query($con," insert into msg_info(msg_heading,msg_detail,sender,receiver,sent_date) values('$heading','$details','$username','$receiver',now()) ")or die("insertion error");

    if($username=='user')
    header("location:complainForm.php?resmsg=1");
    else
    header("location:displayAdminInbox.php?resmsg=1");
?>