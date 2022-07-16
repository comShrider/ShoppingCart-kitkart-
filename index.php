<?php
    include("header.php");

    if(isset($_REQUEST['parent_id'])){
        $parent_id = $_REQUEST['parent_id'];
    }
    else{
        $parent_id = 0;
    }
?>

<div class="content">
    <div class="newsRegLoginBtns">
        <a href="displayNews.php">News </a>
        <a href="userRegForm.php">| SignIn </a>
        <a href="userLoginForm.php">| Login</a>
    </div><!-- end of regSignBtns -->

    <div class="categorySection section">      
            <?php
                include("dbconnect.php");
                $rsCat = mysqli_query($con,"select * from category_info where                 parent_cat_id='$parent_id' ");
                while($row = mysqli_fetch_array($rsCat)){
                    $id = $row['cat_id'];
                    echo("<a href = 'index.php?parent_id=$id'>");
                    echo("<div class='categoryBox box'>");
                    echo($row['cat_name']);
                    echo("<br>");
                    $img_path = $row['img_path'];
                    echo("<img src='.\\collection\\$img_path'>");
                    echo("</div>");
                    echo("</a>");
                }
            ?>
    </div><!-- end of categorySection -->

                <hr class="home-hr">

    <div class="itemSection section">      
            <?php
                include("dbconnect.php");
                $rsCat = mysqli_query($con,"select * from item_info where                 parent_cat_id='$parent_id' ");
                while($row = mysqli_fetch_array($rsCat)){
                    echo("<div class='itemBox box'>");
                    echo($row['item_name']);
                    echo("<br>");
                    $img_path = $row['img_path'];
                    echo("<br>");
                    echo("<img src='.\\collection\\$img_path'>");
                    echo("<br>");
                    echo("Details = ".$row['item_details']);
                    echo("<br>");
                    echo("Price = <s>".$row['item_price']."</s>");
                    echo("<br>");
                    $price = $row['item_price'];
                    $item_id = $row['item_id'];

                    echo("<div class= 'offerDiscountAdd'>");
                    $special_discount = 0;
                    $discount = $row['item_discount'];
                    $rsOffer = mysqli_query($con,"select * from offer_info where now() between offer_start_date and offer_end_date" );
                    while($row = mysqli_fetch_array($rsOffer)){
                        $special_discount = $row['offer_discount'];
                        $cats = $row['offer_category'];
                        $catarr = explode("-",$cats);
                        if(in_array($parent_id,$catarr)){
                            $discount += $special_discount;
                        }
                    }
                    echo("</div>");
                    
                    echo("Discount = ".$discount."%");
                    echo("<br>");
                    $discountedPrice = $price - 
                    ( ($discount/100)*$price );
                    


                    echo("Discounted Price = ". $discountedPrice);
                    echo("<br>");
                    echo("<div class='btnAddToCart'>");
                    echo("<a href='chkAlreadyLogin.php?item_price=$discountedPrice&item_id=$item_id'>Add To Cart</a>");
                    echo("</div>");

                    echo("</div>");
                }
            ?>
    </div><!-- end of itemSection -->

</div><!-- end of content -->

<?php
    include("footer.php");
?>

