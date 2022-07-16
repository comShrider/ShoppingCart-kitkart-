<?php
    include("header.php");
?>

<div class="content">
    <div class="displayCartTable">
    <table border=2>
        <tr>
            <th>Sl No.</th> <th>ItemName</th> <th>Image</th> <th>Quantity</th> <th>Price</th>
            <th>Amount</th> <th>Status</th>
        </tr>
<?php
include("dbconnect.php");
$username = $_SESSION['uname'];

$rsItem = mysqli_query($con,"select * from item_info,cart_info where cart_info.username = '$username' and item_info.item_id = cart_info.item_id ");
$count = 0;
$total = 0;
    while($row = mysqli_fetch_array($rsItem)){
        $count++;
        echo("<tr>");

        echo("<td>");
        echo($count);
        echo("</td>");
        

        echo("<td>");
        echo($row['item_name']);
        echo("</td>");

        echo("<td>");
        $img_path = $row['img_path'];
        echo("<img src='.\\collection\\$img_path'>");  
        echo("</td>");

        echo("<td>");
        echo($row['item_qty']);
        echo("</td>");

        echo("<td>");
        echo($row['item_price']);
        echo("</td>");

        $amount = $row['item_price'] * $row['item_qty'];
        echo("<td>");
        echo($amount);
        $total += $amount;
        echo("</td>");

        echo("<td>");
        $cart_id = $row['cart_id'];
        echo("<a href='deleteFromCart.php?cart_id=$cart_id'>delete</a>");
        echo("</td>");

        echo("</tr>");

    }
?>
    <tr>
        <td colspan=5 align='right'>Total : &nbsp; </td><td colspan=2><?=$total?></td>
    </tr>
        
    </table>
    </div><!-- end of displayCartTable -->

    <div class="btnPlaceOrder">
        <a href="insertOrder.php?amount=<?=$total?>">Place Order</a>
    </div><!-- end of btnBuyNow -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>

