<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events | Arena Animation Kammanahalli | Best Animation Institute in Bangalore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="keywords" content="animation centers in bangalore,Animation, Web designing, 2D Animation, VFX, 3D Animation,Graphic designing,Arena Animation, Bangalore Animation Institute, Arena Kammanahalli,Best Multimedia institute, arena in Bangalore, Animation colleges, arena animation Bangalore, Educational courses, animation education, animation degree in Bangalore, Arena Multimedia etc, animation institute in bangalore">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="description" content="Event organised in Arena animation Kammanahalli to provide more knowledge to their students from industry Experts.">
  <meta name="author" content="Mohamed Imran Khan S.">
  <link rel="icon" media="screen" href="images/arena-animation-icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body><script>document.body.className += ' fade-out';</script>
    <?php 
       
        include 'includes/nav-bar.php';
        ?>
        
                        
<div class="container-fluid " style="margin-top:100px;">
            <h2 class="text-center p-2 ">OUR RECENT EVENTS</h2>
            <p class="text-center p-5">"All works no play" is not just the phrase in arena animation Kammanahalli. We have lods of events lined up every month for our students. Seasonal greetings,Diwali latern Makinf, Clay Ganesh Making, Cut out animation, Pot painting etc... All aimed at improving thier creativity.Students in arena exihibit their talent in various subject they have taken as their subject. This would enable you to trust our arena animation for choosing your career.</p>
        </div>
<?php
	include('reviews/confiq.php');
	?>
	 <div class="container-fluid">
            <div class="row p-2 m-2">
		
					<?php
						$quser=mysqli_query($conn,"select * from `events`");
						while($urow=mysqli_fetch_array($quser)){
							?>
                            <div class="col-md-4 mt-2">
                                <a href="/arena/arena-kamanahalli-eventsdetails.php?id=<?=$urow['id']?>"><div class="card card-1 border-sm p-4 event-card">
                                    <img src="uploads/<?=$urow['banner']?>" alt="" height="300" width="">
                                    <h3><?=$urow['name']?></h3>
                                    <p class=""><?=$urow['date']?></p><p><?=$urow['place']?></p>
                                </div>
                                </a>
                            </div>    
							<?php
						}
					
					?>
			
       
                
            </div>
        </div>
        
        <?php
    
        include 'includes/footer.php';
    ?>