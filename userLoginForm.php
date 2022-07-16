<?php
    include("header.php");
?>

<div class="content">
    <div class="regForm form">
        <form action="chkLogin.php">
        
            <?php           
                if(isset($_REQUEST["resmsg"])){
                    echo("<div class='resmsg'>");
                    if($_REQUEST["resmsg"]==1){
                        echo("<p>invalid username</p>");
                    }
                    else if($_REQUEST["resmsg"]==2){
                        echo("<p>invalid password</p>");
                    }
                    echo("</div>");
                }
            ?>
        

            <label>Enter UserName</label>
            <input type="text" name="txtUserName">
            <label>Enter Password</label>
            <input type="password" name="txtPass">

            <div class="btnGrp">
                <input type="submit" value="OK">
                <input type="reset" value="CANCEL">
            </div><!-- end of btnGrp -->
            
        </form>
    </div><!-- end of regForm -->
</div><!-- end of content -->

<?php
    include("footer.php");
?>