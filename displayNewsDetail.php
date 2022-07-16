<?php
    include("header.php");
?>

<div class="content">
    <div class="displayNewsTable">
    <table border=2 align='center'>
        <tr>
            <th>Sl No.</th> <th>News Detail</th>
        </tr>
<?php
include("dbconnect.php");

$nid = $_REQUEST['nid'];
$rsNews = mysqli_query($con,"select * from news_info where news_id = '$nid' ");
$count = 0;
    while($row = mysqli_fetch_array($rsNews)){

        $count++;
        echo("<tr>");

        echo("<td>");
        echo($count);
        echo("</td>");
        
        echo("<td>");
        echo($row['news_details']);
        echo("</td>");

        echo("</tr>");

    }
?>
        
    </table>
    </div><!-- end of displayNewsTable -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>

