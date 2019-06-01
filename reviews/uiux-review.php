<?php 
    include 'confiq.php'; 
    $query=mysqli_query($conn,"SELECT * from review where course='UI/UX'");
    $row = mysqli_num_rows($query);
    
    function fiveUIUX(){
            include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='UI/UX' and rating='5'");
        echo $GLOBALS['fiveUIUX'] = mysqli_num_rows($query);
    }
    function fourUIUX()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='UI/UX' and rating='4'");
        echo $GLOBALS['fourUIUX'] = mysqli_num_rows($query);
    }
    function threeUIUX()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='UI/UX' and rating='3'");
        echo $GLOBALS['threeUIUX'] = mysqli_num_rows($query);
    }
    function twoUIUX()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='UI/UX' and rating='2'");
        echo $GLOBALS['twoUIUX'] = mysqli_num_rows($query);
    }
    function oneUIUX()
    {
        include 'confiq.php'; 
        $query=mysqli_query($conn,"SELECT * from review where course='UI/UX' and rating='1'");
        echo $GLOBALS['oneUIUX'] = mysqli_num_rows($query);
    }
?>
                <h2 class="p-2 text-center bg-primary text-white">UI/UX</h2>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                        <?php fiveUIUX(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fiveUIUX/$row)*100?>%;"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">4 star</p></div>
                     <div class="col-md-6">
                     <?php fourUIUX(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($fourUIUX/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">3 star</p></div>
                     <div class="col-md-6">
                     <?php threeUIUX(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($threeUIUX/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">2 star</p></div>
                     <div class="col-md-6">
                     <?php twoUIUX(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="width:<?=($twoUIUX/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                     <p class="mt-3">5 star</p></div>
                     <div class="col-md-6">
                     <?php oneUIUX(); ?> /<?= $row?>
                     <div class="progress">
                      <div class="progress-bar" style="<?=($oneUIUX/$row)*100?>%"></div>
                    </div>
                    </div>
                </div>
