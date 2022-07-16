<?php
    include("header.php");
?>

<div class="content">
    <div class="leftBox">
        <ul>
            <li><a class="clicked" href="createCategoryForm.php">Create Category</a></li>
            <li><a href="createItemForm.php">Create Item</a></li>
            <li><a href="createNewsForm.php">Create News</a></li>
            <li><a href="createOfferForm.php">Create Offer</a></li>
            <li class="report">Reports</li>
            <li><a href="">Inbox</a></li>
            <li><a href="">Order List</a></li>
            <li><a href="">Category List</a></li>
            <li><a href="">Item List</a></li>
            <li><a href="">Customer List</a></li>
        </ul>
    </div><!-- end of leftBox -->

    <div class="rightBox">
    <div class="categoryForm form">
    <?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>Category Created</p>");
                    }
                    else{
                        echo("<p>Error</p>");
                    }
                    echo("</div>");
                }
    ?>

        <form action="insertCategory.php" method="post" enctype="multipart/form-data">
            <label>Enter Category Name</label>
            <input type="text" name="txtName">
            <label>Enter Category Display Name</label>
            <input type="text" name="txtDname">
            <label>Choose Category Image</label>
            <input type="file" name="flImg">
            <label>Choose Category Type</label>
            <select name="cat_type">
                <option value="primary">Primary</option>
                <option value="secondary">Secondary</option>
            </select>
            <label>Choose Parent Category</label>
            <select name="parent_cat">
                <option value="0">Select Parent Category</option>
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
    </div><!-- end of categoryForm -->
    </div><!-- end of rightBox -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>