<?php
    include("header.php");
?>

<div class="content">
<?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>Reply Sent Successfully</p>");
                    }
                    else{
                        echo("<p>Error</p>");
                    }
                    echo("</div>");
                }
?>
    <div class="leftBox">
        <ul>
            <li><a href="createCategoryForm.php">Create Category</a></li>
            <li><a href="createItemForm.php">Create Item</a></li>
            <li><a href="createNewsForm.php">Create News</a></li>
            <li><a href="createOfferForm.php">Create Offer</a></li>
            <li class="report">Reports</li>
            <li><a class="clicked" href="">Inbox</a></li>
            <li><a href="">Order List</a></li>
            <li><a href="">Category List</a></li>
            <li><a href="">Item List</a></li>
            <li><a href="">Customer List</a></li>
        </ul>
    </div><!-- end of leftBox -->

    <div class="rightBox">
    <div class="displayInboxTable">
    <table border=2 align='center'>
        <tr>
            <th>Sl No.</th> <th>Msg Heading</th> <th>Recieved Date</th> <th>Sender Name</th>
        </tr>
<?php
include("dbconnect.php");

$rsMsg = mysqli_query($con,"select * from msg_info where receiver='admin'");
$count = 0;
    while($row = mysqli_fetch_array($rsMsg)){
        $mid = $row['msg_id'];

        $count++;
        echo("<tr>");

        echo("<td>");
        echo($count);
        echo("</td>");
        
        echo("<td>");
        echo("<a href='displayAdminInboxDetail.php?mid=$mid'>");
        echo($row['msg_heading']);
        echo("</a>");
        echo("</td>");

        echo("<td>");
        echo($row['sent_date']);
        echo("</td>");

        echo("<td>");
        echo($row['sender']);
        echo("</td>");

        echo("</tr>");

    }
?>
        
    </table>
    </div><!-- end of displayNewsTable -->
    </div><!-- end of rightBox -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>