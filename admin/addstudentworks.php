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
<?php
        if(isset($_POST['submit']))
        {
            // Include the database configuration file
            include_once 'dbConfig.php';
            // File upload configuration
            $targetDir = "uploads/";
            $allowTypes = array('jpg','png','jpeg','gif','PNG','JPG','JPEG','GIF');
            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            
            if(empty($_POST['name']))
            {
                $errorMsg = 'Empty Name';
            }
            else if(empty($_POST['course'])){
                $errorMsg = 'Empty descrition';
            }
            else if(empty($_POST['type']))
            {
                $errorMsg = 'Empty place';
            }
            else
            {
                   
                            $name=$_POST['name'];
                            $course=$_POST['course'];
                            $type=$_POST['type'];
                            if($type=='Image'){
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["imglink"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                move_uploaded_file($_FILES["imglink"]["tmp_name"], $target_file);
                                $link=basename( $_FILES["imglink"]["name"]);
                            }
                            else{
                                $link=$_POST['vidlink'];
                            }
                            if(isset($_FILES["link"]))
                            move_uploaded_file($_FILES["link"]["tmp_name"], $bannertargetFilePath);
                            $db->query("INSERT INTO `studentworks` (`name`, `course`, `type`, `link`) VALUES ( '$name', '$course', '$type', '$link');");
                           

            }
        // Display status message

        }

?>
    <div class="container-fluid text-center mt-5">
       <a href="viewstudentworks.php" class="btn btn-primary">View student Works</a>
        <div class="row">
            <div class="col-md-4 mx-auto card-1 mt-5 p-4 text-center">
                     <?php 
                        if(isset($errorMsg))
                        {
                            echo "<div class='alert alert-danger'>$errorMsg</div>";
                        }
                        else if(isset($statusMsg))
                        {
                            echo "<div class='alert alert-success'>Sucessfully Uploaded Event details</div>";
                        }
                    ?>
                     
                      <form action="" method="post" enctype="multipart/form-data">
                          <h2 class="p-2 m-2">ADD STUDENT WORKS</h2>
                          <div class="form-group mt-4"> 
                               <input class="form-control" placeholder="Student Name" type="text" name="name"  />
                           </div>
                           <div class="form-group"> 
                               <input type="text" name="course" placeholder="Course" class="form-control" />
                           </div>
                           <select id="course-type" name="type" class="form-control" name="type">
                             <option>Select Type</option>
                             <option value="Image">Image</option>
                             <option value="Video">Video</option>
                          </select>
                          <div class="mt-3" id="course-img">
                              <p class="text-danger">Select Banner image 450:720px images to Upload:</p>
                              <input type="file" name="imglink"  />
                          </div> 
                           <div class="mt-3" id="course-vid" class="form"> 
                              <p class="text-danger">"Enter the link in between code from embed link" src="https://www.youtube.com/embed/ccnwzScp6bM"</p>
                              <input type="text" placeholder="video" class="form-control" name="vidlink"  />
                           </div>
                            <input type="submit" class="btn btn-primary mt-5" name="submit" value="UPLOAD"/>
                        </form> 
            </div>
        </div>
            
    </div>
   <script>

    </script>
<?php include 'includes/footer.php';?>    
    
