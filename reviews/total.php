<?php include 'confiq.php'; 
    $query=mysqli_query($conn,"SELECT * from review");
    $row = mysqli_num_rows($query);
?>
    <h4 class="text-center bg-success p-3 text-white">Total Review</h4>
    <p style="font-size:30px;"><?php echo $row;?></p>
