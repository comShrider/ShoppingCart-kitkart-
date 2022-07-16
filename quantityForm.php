<?php
    include("header.php");
?>

<div class="content">
    <div class="qtyForm form">
        <form action="insertCart.php">

            <label>Enter Quantity</label>
            <input type="text" name="txtQuantity">

            <div class="btnGrp">
                <input type="submit" value="OK">
                <input type="reset" value="CANCEL">
            </div><!-- end of btnGrp -->
            
        </form>
    </div><!-- end of qtyForm -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>