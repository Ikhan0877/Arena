<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arena Animation Kammanahalli | Best Animation Institute in Bangalore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="keywords" content="animation centers in bangalore,Animation, Web designing, 2D Animation, VFX, 3D Animation,Graphic designing,Arena Animation, Bangalore Animation Institute, Arena Kammanahalli,Best Multimedia institute, arena in Bangalore, Animation colleges, arena animation Bangalore, Educational courses, animation education, animation degree in Bangalore, Arena Multimedia etc, animation institute in bangalore">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="description" content="Arena Animation Kammanahalli">
  <meta name="author" content="Jobith M Basheer">
  <link rel="icon" media="screen" href="images/arena-animation-icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <?php include 'includes/nav-bar.php' ?>
    <div class="container-fluid">
        <h2 class="text-center p-2 mt-5">OUR STUDENT WORKS</h2>
        <p class="text-center p-5">Students in arena exihibit their talent in various subject they have taken as their subject. This would enable you to trust our arena animation for choosing your career.</p>
    </div>
    <div class="student-card container-fluid mb-4 p-3 border" style="height:600px;">
        <?php
					include 'reviews/confiq.php';	
                    $quser=mysqli_query($conn,"select * from studentworks");
						while($urow=mysqli_fetch_array($quser)){
							?>
           <div class="row card-1 m-3 text-center  p-3">
            <div class="col-md-6 col-sm-6 mt-5">
               	
                <h4><?php echo $urow['name'] ?></h4>
                <p><?php echo $urow['course'] ?></p>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
               <?php if($urow['type']=='image'){   ?>
                    <img src="<?php echo $urow['link']?>" alt="" height="250" width="250">
               <?php }else{?>
                <iframe width="250" class="m-3 card-2" height="150" src="<?php echo $urow['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php } ?>
               
                
            </div>
        </div>
        <?php }?>
    </div>
    <?php include 'includes/footer.php' ?>