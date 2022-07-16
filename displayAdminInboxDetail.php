<?php
    include("header.php");
?>

<div class="content">
    <div class="leftBox">
        <ul>
            <li><a href="createCategoryForm.php">Create Category</a></li>
            <li><a href="createItemForm.php">Create Item</a></li>
            <li><a href="createNewsForm.php">Create News</a></li>
            <li><a href="createOfferForm.php">Create Offer</a></li>
            <li class="report">Reports</li>
            <li><a href="displayAdminInbox.php">Inbox</a></li>
            <li><a href="">Order List</a></li>
            <li><a href="">Category List</a></li>
            <li><a href="">Item List</a></li>
            <li><a href="">Customer List</a></li>
        </ul>
    </div><!-- end of leftBox -->

    <div class="rightBox">
            <?php
              include("dbconnect.php");
              $mid = $_REQUEST['mid'];
              $rsMsg = mysqli_query($con,"select * from msg_info where msg_id='$mid'");
              $row = mysqli_fetch_array($rsMsg);
              $heading = $row['msg_heading'];
              $received_date = $row['sent_date'];
              $sender = $row['sender'];
              $detail = $row['msg_detail'];
              ?>
        <div class="adminInboxDetail">
           <b> Heading: </b><?=$heading?>
            <hr>
           <b> Recieved Date: </b><?=$received_date?>
            <hr>
           <b> Sender Name: </b><?=$sender?>
            <hr>
           <b> Detail: </b><?=$detail?> 
        </div><!-- end of box -->

        <div class="btnReplyFromAdmin">
        <a href="adminReplyForm.php?sender=<?=$sender?>">Reply</a>
    </div><!-- end of btnReplyFromAdmin -->
    </div><!-- end of rightBox -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>