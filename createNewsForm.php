<?php
    include("header.php");
?>

<div class="content">
    <div class="leftBox">
        <ul>
            <li><a href="createCategoryForm.php">Create Category</a></li>
            <li><a href="createItemForm.php">Create Item</a></li>
            <li><a class="clicked" href="createNewsForm.php">Create News</a></li>
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
    <div class="NewsForm form">
    <?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>News Created</p>");
                    }
                    else{
                        echo("<p>Error</p>");
                    }
                    echo("</div>");
                }
    ?>

        <form action="insertNews.php" method="post" enctype="multipart/form-data">
            <label>Enter News Heading</label>
            <input type="text" name="txtHeading">
            <label>Enter News Details</label>
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