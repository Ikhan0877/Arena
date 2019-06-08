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
     <h2 class="r m-3">Complete Student Works</h2>
     <a href="addstudentworks.php" class="btn btn-primary w-50 m-3">Add Student Works</a>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Course</th>
            <th>Type</th>
            <th>Description</th>
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
                            mysqli_query($conn,"delete from studentworks where id =$id");
                        }
						$quser=mysqli_query($conn,"select * from `studentworks` order by id desc");
						while($urow=mysqli_fetch_array($quser)){
							?>
          <tr>
            <td><?= $urow['name']?></td>
            <td><?= $urow['course'] ?></td>
            <td><?= $urow['type']?></td>
              <td ><div style="overflow-y:auto; height:100px;"> <?php if($urow['type']=='Image'){   ?>
                    <img src="uploads/<?php echo $urow['link']?>" class="img-fluid" alt="" height="100" width="100">
               <?php }else{?>
                <iframe width="100" class="m-3 card-2" height="100" src="<?php echo $urow['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php } ?></div></td>
            <td><a href="viewstudentworks.php?deleteid=<?= $urow['id'] ?>" class="btn btn-danger">Delete</a></td>
          </tr>
        <?php }  ?>
        </tbody>
      </table>
    </div>
<?php include 'includes/footer.php';?>