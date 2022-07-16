<?php
    include("header.php");
?>

<div class="content">
    <div class="leftBox">
        <ul>
            <li><a href="createCategoryForm.php">Create Category</a></li>
            <li><a href="createItemForm.php">Create Item</a></li>
            <li><a href="createNewsForm.php">Create News</a></li>
            <li><a class="clicked" href="createOfferForm.php">Create Offer</a></li>
            <li class="report">Reports</li>
            <li><a href="">Inbox</a></li>
            <li><a href="">Order List</a></li>
            <li><a href="">Category List</a></li>
            <li><a href="">Item List</a></li>
            <li><a href="">Customer List</a></li>
        </ul>
    </div><!-- end of leftBox -->

    <div class="rightBox">
    <div class="offerForm form">
    <?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>Offer Created</p>");
                    }
                    else{
                        echo("<p>Error</p>");
                    }
                    echo("</div>");
                }
    ?>

        <form action="insertOffer.php" method="get" enctype="multipart/form-data">
            <label>Enter Offer Name</label>
            <input type="text" name="txtName">
            <label>Enter Offer Start Date</label>
            <input type="date" name="dtStartDate">
            <label>Enter Offer End Date</label>
            <input type="date" name="dtEndDate">
            <label>Enter Offer Discount in %</label>
            <input type="text" name="txtDiscount">
            <label>Choose Category</label>
            <select name="cat_id">
                <option value="0">Select Category</option>
<?php
include("dbconnect.php");
$rsCat = mysqli_query($con,"select * from category_info");
while($row = mysqli_fetch_array($rsCat)){
    $id = $row['cat_id'];
    $dname = $row['cat_dname'];
    echo("<option value='$id'>$dname</option>");
}
?>
            </select>

            <div class="btnGrp">
                <input type="submit" value="OK">
                <input type="reset" value="CANCEL">
            </div><!-- end of btnGrp -->
            
        </form>
    </div><!-- end of OfferForm -->
    </div><!-- end of rightBox -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>