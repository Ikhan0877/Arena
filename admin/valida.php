<?php
   session_start();
    if(isset($_POST['submit'])){
        if($_POST['name']=='admin' && $_POST['password'] == 'arenaqtr@123')
        {
            $_SESSION["user"] = "green";
            exit(header("Location: /arena/admin/addevents.php"));
        }
        else{
            exit(header("Location: /arena/admin/index.php?error='invalid'"));
        }
    }
?>