<?php 
     $conn = mysqli_connect("localhost","root","","arena");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
        $name = $_POST['usr'];        
        $email = $_POST['email'];    
        $course = $_POST['course'];        
        $rating = $_POST['rating'];        
        $comment = $_POST['comment'];
        $sql = "INSERT INTO review (name,email,course,rating,comment) VALUES ('$name','$email','$course','$rating','$comment')";
        echo "<script type='text/javascript'>alert('Thank you for rating');</script>";
        if (mysqli_query($conn, $sql)) 
        {
          echo "<script type='text/javascript'>alert('Thank you for rating');</script>";
        }
        else 
        {
          echo mysqli_error($conn);
        }
      //  exit();
    }
?>
