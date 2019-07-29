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
                    $name = htmlspecialchars($_POST['user']);
                    $email = htmlspecialchars($_POST['Cemail']);
                    $subject = htmlspecialchars($_POST['subject']);
                    $mobile = htmlspecialchars($_POST['mobile']);
                    $sql = "INSERT INTO contact (name,email,mobileno,subject,status) VALUES ('$name','$email','$mobile','$subject',0)";
                   
                    if (mysqli_query($conn, $sql)) 
                    {
                     
                      header('Location: /arena/thankyou.php');
                    }
                    else 
                    {
                      echo mysqli_error($conn);
                    }
                }
            }
    ?>