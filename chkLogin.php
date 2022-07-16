<?php @session_start();
    include("dbconnect.php");

    $username =  $_REQUEST["txtUserName"];
    $password =  $_REQUEST["txtPass"];

    $rsUser = mysqli_query($con,"select * from user_info where user_username='$username'")or die("query failed");

    if(mysqli_num_rows($rsUser)==0){
        header("location:userLoginForm.php?resmsg=1");
    }
    else{
        $row = mysqli_fetch_array($rsUser);
        if($row['user_pass']==$password){
            $_SESSION['uname'] = $username;

            if($row['user_type']=='admin'){
                $_SESSION['utype'] = 'admin';
                header("location:adminMain.php");
            }
            else{
                $_SESSION['utype'] = 'user';
                header("location:userMain.php");
            }
        }
        else{
            header("location:userLoginForm.php?resmsg=2");
        }
    }

    
?>