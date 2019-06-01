<?php 
    include 'confiq.php'; 
    $query=mysqli_query($conn,"SELECT * from review where course='vfx'");
    $row = mysqli_num_rows($query);
    
    function fivevfx(){
            include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='vfx' and rating='5'");
        echo $GLOBALS['fivevfx'] = mysqli_num_rows($query);
    }
    function fourvfx()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='vfx' and rating='4'");
        echo $GLOBALS['fourvfx'] = mysqli_num_rows($query);
    }
    function threevfx()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='vfx' and rating='3'");
        echo $GLOBALS['threevfx'] = mysqli_num_rows($query);
    }
    function twovfx()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='vfx' and rating='2'");
        echo $GLOBALS['twovfx'] = mysqli_num_rows($query);
    }
    function onevfx()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='vfx' and rating='1'");
        echo $GLOBALS['onevfx'] = mysqli_num_rows($query);
    }
?>
                <h2 class="p-2 text-center bg-primary text-white">VFX</h2>
                <div class="row ">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                        <?php fivevfx(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fivevfx/$row)*100?>%;"></div>
                    </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                     <p class="mt-3">4 star</p></div>
                     <div class="col-md-6">
                     <?php fourvfx(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fourvfx/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                     <p class="mt-3">3 star</p></div>
                     <div class="col-md-6">
                     <?php threevfx(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($threevfx/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                     <p class="mt-3">2 star</p></div>
                     <div class="col-md-6">
                     <?php twovfx(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($twovfx/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                     <?php onevfx(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="<?=($onevfx/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
