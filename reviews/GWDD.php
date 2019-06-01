<?php 
    include 'confiq.php'; 
    $query=mysqli_query($conn,"SELECT * from review where course='GWDD'");
    $row = mysqli_num_rows($query);
    
    function fivegwdd(){
            include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='GWDD' and rating='5'");
        echo $GLOBALS['fivegwdd'] = mysqli_num_rows($query);
    }
    function fourgwdd()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='GWDD' and rating='4'");
        echo $GLOBALS['fourgwdd'] = mysqli_num_rows($query);
    }
    function threegwdd()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='GWDD' and rating='3'");
        echo $GLOBALS['threegwdd'] = mysqli_num_rows($query);
    }
    function twogwdd()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='GWDD' and rating='2'");
        echo $GLOBALS['twogwdd'] = mysqli_num_rows($query);
    }
    function onegwdd()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='GWDD' and rating='1'");
        echo $GLOBALS['onegwdd'] = mysqli_num_rows($query);
    }
?>
                <h2 class="p-2 text-center bg-primary text-white">GWDD</h2>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                        <?php fivegwdd(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fivegwdd/$row)*100?>%;"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">4 star</p></div>
                     <div class="col-md-6">
                     <?php fourgwdd(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fourgwdd/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">3 star</p></div>
                     <div class="col-md-6">
                     <?php threegwdd(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($threegwdd/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">2 star</p></div>
                     <div class="col-md-6">
                     <?php twogwdd(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($twogwdd/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                     <?php onegwdd(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="<?=($onegwdd/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
