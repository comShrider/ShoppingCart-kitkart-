<?php @session_start();

    include("dbconnect.php");
    $username = $_SESSION['uname'];
    $amount = $_REQUEST['amount'];

    mysqli_query($con,"insert into order_master(username,amount,reg_date) values('$username','$amount',now() )");

    $rsOrder = mysqli_query($con,"select max(order_id) from order_master");
    $row = mysqli_fetch_array($rsOrder);
    $ref_id = $row[0];

    $rsCart = mysqli_query($con,"select * from cart_info where username = '$username'" );
    while($row = mysqli_fetch_array($rsCart)){
        $item_id = $row['item_id'];
        $item_qty = $row['item_qty'];
        $item_price = $row['item_price'];

        mysqli_query($con,"insert into order_details(item_id,item_qty,item_price,ref_id) values('$item_id','$item_qty','$item_price','$ref_id') ");
    }

    mysqli_query($con,"delete from cart_info where username = '$username' ");

    echo "your order has been placed";

?>