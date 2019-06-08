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
                   
<?php 
       
        include 'includes/nav-bar.php';
        ?>
<?php
	include('reviews/confiq.php');
	?>
					<?php
                        $id =$_GET['id'];
						$quser=mysqli_query($conn,"select * from `events` where id='$id'");
						while($urow=mysqli_fetch_array($quser)){
							?>
                                <div class="container-fluid">
                                    <img src="uploads/<?=$urow['banner'] ?>" class="img-fluid"  alt="" style="object-fit:cover;width:100%; height:300px;">
                                </div>
                                <div class="container-fluid">
                                    <div class="row p-2 m-2">
                                        <div class="col-md-12">
                                            <h2><?=$urow['name'] ?></h2>
                                            <p><?=$urow['date'] ?>,<?= $urow['place']?></p>
                                        </div>
                                    </div>
                                    <div class="row p-2 m-2">
                                        <div class="col-md-12">
                                            <?=$urow['description'] ?>
                                        </div>
                                    </div>
                                    <div class="row p-2 m-2">
                                         <?php $qimages=mysqli_query($conn,"select * from `image` where id='$id'");
						                   while($qimage=mysqli_fetch_array($qimages)){ ?>
                                         <div class="col-md-4">
                                          
                                            <img src="uploads/<?=$qimage['filename']?>" class="img-fluid" alt="" height="300">
                                            
                                        </div>
                                        <?php } ?>
                                        <div class="col-md-4">

                                        </div>
                                    </div>
                                </div>
							<?php
						}
					
					?>
			
	
    
        
        
        <?php
    
        include 'includes/footer.php';
    ?>