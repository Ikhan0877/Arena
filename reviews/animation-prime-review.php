<?php 
    include 'confiq.php'; 
    $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION'");
    $row = mysqli_num_rows($query);
    
    function fiveanimation(){
            include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION' and rating='5'");
        echo $GLOBALS['fiveanimation'] = mysqli_num_rows($query);
    }
    function fouranimation()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION' and rating='4'");
        echo $GLOBALS['fouranimation'] = mysqli_num_rows($query);
    }
    function threeanimation()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION' and rating='3'");
        echo $GLOBALS['threeanimation'] = mysqli_num_rows($query);
    }
    function twoanimation()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION' and rating='2'");
        echo $GLOBALS['twoanimation'] = mysqli_num_rows($query);
    }
    function oneanimation()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='ANIMATION' and rating='1'");
        echo $GLOBALS['oneanimation'] = mysqli_num_rows($query);
    }
?>
                <h2 class="p-2 text-center bg-primary text-white">Animation</h2>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                        <?php fiveanimation(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fiveanimation/$row)*100?>%;"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">4 star</p></div>
                     <div class="col-md-6">
                     <?php fouranimation(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fouranimation/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">3 star</p></div>
                     <div class="col-md-6">
                     <?php threeanimation(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($threeanimation/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">2 star</p></div>
                     <div class="col-md-6">
                     <?php twoanimation(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($twoanimation/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                     <?php oneanimation(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="<?=($oneanimation/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
