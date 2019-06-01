<?php 
 $conn = mysqli_connect("localhost","root","","area");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
    
        $name = $_POST['firstname'];        
        $email = $_POST['email'];    
        $course = $_POST['course'];        
        $rating = $_POST['rating'];        
        $comment = $_POST['comment'];
        $sql = "INSERT INTO review (user,email,course,rating,comment) VALUES ('$name','$email','$course','$rating','$comment')";
        if (mysqli_query($conn, $sql)) 
        {
          echo "<script>alert('Thank you for rating!!!!!');</script>";
        }
        else 
        {
          echo "<script>alert('Thank you for rating!!!!! ". mysqli_error($conn)." ');</script> ";
        }
      //  exit();
  }
?>
