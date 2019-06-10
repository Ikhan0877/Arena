<?php
   
    if(isset($_POST['submit'])){
        if($_POST['name']=='admin' && $_POST['password'] == 'arenaqtr@123'){
            $_SESSION["user"] = "admin";
            exit(header("Location: /arena/admin/addevents.php"));
        }
    }
?>