<?php
            include 'confiq.php';
            if(isset($_POST['contact']))
            {
                if(empty($_POST['user'])){
                    echo "<script>alert('Enter your name'); </script>";
                }
                else if(empty($_POST['Cemail'])){
                    echo "<script>alert('Enter your email'); </script>";
                }
                else if(empty($_POST['subject'])){
                    echo "<script>alert('Enter your subject'); </script>";
                }
                else if(empty($_POST['mobile'])){
                    echo "<script>alert('Enter your mobil'); </script>";
                }
                else
                {
                    $name = $_POST['user'];
                    $email = $_POST['Cemail'];
                    $subject = $_POST['subject'];
                    $mobile = $_POST['mobile'];
                    $sql = "INSERT INTO contact (name,email,mobileno,subject,status) VALUES ('$name','$email','$mobile','$subject',0)";
                   
                    if (mysqli_query($conn, $sql)) 
                    {
                      echo "<script type='text/javascript'>alert('Thank you for rating')</script>";
                      header('Location:/arena/index.php');
                    }
                    else 
                    {
                      echo mysqli_error($conn);
                    }
                }
            }
    ?>