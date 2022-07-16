<?php
    include("header.php");
?>

<div class="content">
    <div class="displayNewsTable">
    <table border=2 align='center'>
        <tr>
            <th>Sl No.</th> <th>News Heading</th>
        </tr>
<?php
include("dbconnect.php");

$rsNews = mysqli_query($con,"select * from news_info where del_status = 0 order by reg_date desc");
$count = 0;
    while($row = mysqli_fetch_array($rsNews)){
        $nid = $row['news_id'];

        $count++;
        echo("<tr>");

        echo("<td>");
        echo($count);
        echo("</td>");
        
        echo("<td>");
        echo("<a href='displayNewsDetail.php?nid=$nid'>");
        echo($row['news_heading']);
        echo("</a>");
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

