<?php
    include("header.php");
?>

<div class="content">
    <div class="leftBox">
        <ul>
        <li><a href="index.php">Purchase</a></li>
            <li><a href="displayCart.php">Display Cart</a></li>
            <li><a class="clicked" href="complainForm.php">Make Complain</a></li>
            <li><a href="">Cancel Order</a></li>
            <li><a href="">Order History</a></li>
            <li><a href="">Edit Profile</a></li>
            <li><a href="">Inbox</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </div><!-- end of leftBox -->

    <div class="rightBox">
    <div class="complainForm form">
    <?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>Complain Submitted</p>");
                    }
                    else{
                        echo("<p>Error</p>");
                    }
                    echo("</div>");
                }
    ?>

        <form action="insertComplain.php" method="post" enctype="multipart/form-data">

        <?php
            $receiver = $_REQUEST['sender'];
        ?>
            <label>Reply To</label>
            <input type="text" name="txtTo" value=<?=$receiver?> readonly="readonly">
            <label>Enter Reply Heading</label>
            <input type="text" name="txtHeading">
            <label>Enter Reply Details</label>
            <textarea name="txtDetails" cols="30" rows="5"></textarea>

            <div class="btnGrp">
                <input type="submit" value="OK">
                <input type="reset" value="CANCEL">
            </div><!-- end of btnGrp -->
            
        </form>
    </div><!-- end of ItemForm -->
    </div><!-- end of rightBox -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>