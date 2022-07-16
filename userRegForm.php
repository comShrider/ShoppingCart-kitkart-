<?php
    include("header.php");
?>

<div class="content">
    <div class="regForm form">
        <form action="insertUser.php">
            <label>Enter Your Name</label>
            <input type="text" name="txtName">
            <label>Enter Your Email</label>
            <input type="text" name="txtEmail">
            <label>Enter Your Mobile No.</label>
            <input type="text" name="txtMobile">
            <label>Enter Your Address</label>
            <textarea name="txtAddress" cols="30" rows="10"></textarea>
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