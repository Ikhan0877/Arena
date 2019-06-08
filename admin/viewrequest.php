<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arena Animation Kammanahalli | Best Animation Institute in Bangalore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="keywords" content="animation centers in bangalore,Animation, Web designing, 2D Animation, VFX, 3D Animation,Graphic designing,Arena Animation, Bangalore Animation Institute, Arena Kammanahalli,Best Multimedia institute, arena in Bangalore, Animation colleges, arena animation Bangalore, Educational courses, animation education, animation degree in Bangalore, Arena Multimedia etc, animation institute in bangalore">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" media="screen" href="images/arena-animation-icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<?php include 'includes/nav-bar.php';?>
   
    <div class="container mt-5 text-center">
     <h2 class="r m-3">Contact Request</h2>
   
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Subject</th>
            <th>Operation</th>
          </tr>
        </thead>
        <tbody>
         <?php
                        $conn = mysqli_connect("localhost","root","","arena");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        if(isset($_GET['deleteid'])){
                            $id=$_GET['deleteid'];
                            mysqli_query($conn,"delete from contact where id =$id");
                        }
						$quser=mysqli_query($conn,"select * from `contact` order by id desc");
						while($urow=mysqli_fetch_array($quser)){
							?>
          <tr>
            <td><?= $urow['name']?></td>
            <td><?= $urow['email'] ?></td>
            <td><?= $urow['mobileno']?></td>
              <td ><div style="overflow-y:auto; height:100px;"><?= $urow['subject']?></div></td>
            <td><a href="viewrequest.php?deleteid=<?= $urow['id'] ?>" class="btn btn-danger">Delete</a></td>
          </tr>
        <?php }  ?>
        </tbody>
      </table>
    </div>
<?php include 'includes/footer.php';?>