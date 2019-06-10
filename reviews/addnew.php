<?php 
     $conn = mysqli_connect("localhost","root","","arena");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
        $name = htmlspecialchars($_POST['usr']);        
        $email = htmlspecialchars($_POST['email']);    
        $course = htmlspecialchars($_POST['course']);        
        $rating = htmlspecialchars($_POST['rating']);        
        $comment = htmlspecialchars($_POST['comment']);
        $sql = "INSERT INTO review (name,email,course,rating,comment) VALUES ('$name','$email','$course','$rating','$comment')";
        echo "<script type='text/javascript'>alert('Thank you for rating');</script>";
        if (mysqli_query($conn, $sql)) 
        {
           header('Location:/arena/reviews/thankyou.php');
        }
        else 
        {
          echo mysqli_error($conn);
        }
      //  exit();
    }
?>
