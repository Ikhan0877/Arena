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
<html>
<?php
        if(isset($_POST['submit']))
        {
        // Include the database configuration file
        include_once 'dbConfig.php';

        // File upload configuration
        $targetDir = "../uploads/";
        $allowTypes = array('jpg','png','jpeg','gif','PNG','JPG','JPEG','GIF');
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $bannername = basename($_FILES['banner']['name']);
        $bannertargetFilePath = $targetDir.$bannername;
        $bannerfileType=pathinfo($bannertargetFilePath,PATHINFO_EXTENSION);
        if(empty($_POST['name']))
        {
            $errorMsg = 'Empty Name';
        }
        else if(empty($_POST['date']))
        {
             $errorMsg = 'Empty Date';
        }
        else if(empty($_POST['description'])){
            $errorMsg = 'Empty descrition';
        }
        else if(empty($_POST['place']))
        {
            $errorMsg = 'Empty place';
        }
        else if(!in_array($bannerfileType,$allowTypes))
        {
            $errorMsg = 'Banner File Format Not Supported';
        }
        else if(empty($_FILES['banner']['name']))
        {
            $errorMsg = 'please select banner image';
        }
        else if(empty(array_filter($_FILES['files']['name'])))
        {
            $errorMsg = 'please select event images';
        }
        else
        {
                
                if(!in_array($bannerfileType, $allowTypes))
                {
                    $errorMsg = 'Banner Image not supported';
                }
                else if(!empty(array_filter($_FILES['files']['name'])))
                {   
                        $name=$_POST['name'];
                        $date=$_POST['date'];
                        $place=$_POST['place'];
                        $description =$_POST['description'];
                        $db->query("insert into events (name,date,place,description,banner) values ('$name','$date','$place','$description','$bannername')");
                        $result = $db->query("select id from events where name='$name'");
                        while ($row = $result->fetch_assoc()) 
                        {
                            $id = $row['id'];
                        }
                        foreach($_FILES['files']['name'] as $key=>$val)
                        {
                            // File upload path
                            $fileName = basename($_FILES['files']['name'][$key]);
                            $targetFilePath = $targetDir . $fileName;

                            // Check whether file type is valid
                            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                            if(in_array($fileType, $allowTypes))
                            {
                                // Upload file to server
                                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath))
                                {
                                    // Image db insert sql
                                    $insertValuesSQL .= "('$id','".$fileName."'),";
                                }
                                else
                                {
                                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                                }
                            }
                            else
                            {
                                $errorUploadType .= $_FILES['files']['name'][$key].', ';
                            }
                        }
                }
                if(!empty($insertValuesSQL))
                {
                    $insertValuesSQL = trim($insertValuesSQL,',');
                    // Insert image file name into database
                    $insert = $db->query("INSERT INTO image (id,filename) VALUES $insertValuesSQL");
                    if($insert)
                    {
                        $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                        $statusMsg = "Files are uploaded successfully.".$errorMsg;
                    }
                    else
                    {
                        $statusMsg = "Sorry, there was an error uploading your event images.";
                    }
                }
    
        }
    // Display status message
    
        }

?>
    <div class="container-fluid ">
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
                          <h2 class="p-2 m-2">ADD EVENTS DETAILS</h2>
                          <p class="text-danger">Select Banner image 1200:720px images to Upload:</p>
                          <input type="file" name="banner"  />
                           <div class="form-group mt-4">
                               <input class="form-control" placeholder="Event Name" type="text" name="name"  />
                           </div>
                           <div class="form-group"> 
                               <input type="date" name="date" class="form-control" />
                           </div>
                           <div class="form-group">
                           <input type="text" name="place" placeholder="Event location" class="form-control"  />
                           </div>
                           <div class="form-group">
                              
                                <textarea name="description" placeholder="Details about event" class="form-control"></textarea>
                           </div>
                          
                           <p class="text-danger">Select Multiple 300:200px images to Upload:</p>
                            <div class="form-group">
                                <input class="form-control" type="file" name="files[]" multiple />
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="UPLOAD"/>
                        </form> 
            </div>
        </div>
            
    </div>
   
</html>
<?php include 'includes/footer.php';?>    
    
</body>
</html>
