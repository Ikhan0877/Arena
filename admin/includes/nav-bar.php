<nav class="navbar navbar-expand-sm bg-white card-2 navbar-light">
        <a class="navbar-brand" href="/arena/">
            <img src="images/arena-animation-logo.jpg" alt="animationkamanahalli-logo" style="width:50px;">
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-primary" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="addevents.php">ADD EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="addstudentworks.php">ADD STUDENT WORKS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="addstudentplacement.php">ADD STUDENT PLACEMENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="viewfeedback.php">VIEW FEEDBACK</a>
        </li>
        <?php 
          include 'dbconfig.php';
          $status_query = "SELECT * FROM contact WHERE status=0";
          $result_query = mysqli_query($db, $status_query);
          $count = mysqli_num_rows($result_query); ?>
        <li class="nav-item">
          <a class="nav-link bg-primary text-white p-2" href="viewrequest.php">VIEW Request <span class="badge badge-danger p-2"><?= $count ?></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-primary p-2" href="invalid.php">Logout</a>
        </li>
        
      </ul>
    </nav>