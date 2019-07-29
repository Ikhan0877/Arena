<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Works | Arena Animation Kammanahalli </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="keywords" content="animation centers in bangalore,Animation, Web designing, 2D Animation, VFX, 3D Animation,Graphic designing,Arena Animation, Bangalore Animation Institute, Arena Kammanahalli,Best Multimedia institute, arena in Bangalore, Animation colleges, arena animation Bangalore, Educational courses, animation education, animation degree in Bangalore, Arena Multimedia etc, animation institute in bangalore">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="description" content=" we at arena animation kammanahalli want the Best out of our student. We challange them continuously to with competitions like 'I showcase' every month with a given topic.">
  <meta name="author" content="Mohamed Imran Khan S.s">
  <link rel="icon" media="screen" href="images/arena-animation-icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body><script>document.body.className += ' fade-out';</script>
    <?php include 'includes/nav-bar.php' ?>
    <div class="container-fluid" style="margin-top:100px;margin-bottom:10px;    ">
        <h2 class="text-center p-2 ">OUR STUDENT WORKS</h2>
        <p class="text-center ">
            we at arena animation kammanahalli want the Best out of our student. We challange them continuously to with competitions like 'I showcase' every month with a given topic. We are stunned at the results. Creative minds competition is yet another important competition where our students have been winning, year after year. 'PORTFOLIO AND SHOWREEL' is given ultimate preference and is scrutinaised,guideded very carefully by our faculty. This helps them to grap the job very easily.
        </p>
        <a href="students-placed.php" class="blue-btn mx-auto text-center ">Students Placed</a>
<!--
        <div class="row m-2">
            <div class="col-md-4">
                <a href="" class="btn blue-btn">UI/UX</a>
            </div>
            <div class="col-md-4">
                <a href="" class="btn blue-btn">VFX</a>
            </div>
            <div class="col-md-4">
                <a href="" class="btn blue-btn">ANIMATION</a>
            </div>
            
        </div>    
-->
    </div>
    <div class="student-card container-fluid border" >
        <div class="row text-center m-5" >
        <?php
					include 'reviews/confiq.php';	
                    $quser=mysqli_query($conn,"select * from studentworks");
						while($urow=mysqli_fetch_array($quser)){
							?>
           
            <div class="col-md-4 card-1 col-sm-12 mt-4">
                      <div class=" p-1 ml-2">
               	    <?php if($urow['type']=='Image'){   ?>
                    <img src="uploads/<?php echo $urow['link']?>" class="img-fluid" alt="" height="450" width="450">
               <?php }else{?>
                <iframe width="250" class="m-3 card-2" height="150" src="<?php echo $urow['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php } ?>
                <h4 class="mt-3 font-weight-bold text-uppercase"><?php echo $urow['name'] ?></h4>
                <p class="p-0 m-0"><?php echo $urow['course'] ?></p>
                </div>
            </div>
            
        <?php }?>
        </div>

    </div>
    <?php include 'includes/footer.php' ?>