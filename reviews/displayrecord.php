                

<?php
	include('confiq.php');
	if(isset($_POST['show'])){
		?>
		
					<?php
						$quser=mysqli_query($conn,"select * from `review`");
						while($urow=mysqli_fetch_array($quser)){
							?>
                                <div class="row card-1 border-sm p-3 m-2" >
                
              
								<div class="col-md-6">
                                   <div class="comments">
                                      <h4 style="color:black;font-weight:bold;"><?php echo $urow['name'] ?></h5>
                                     
                                      <p style="color:black;font-weight:bold;"><?php echo $urow['course']?> 
                                          <?php 
                                              for($i=0;$i<$urow['rating'];$i++)
                                                {
                                                    echo "<i class='fas fa-star' style='color:green;'></i>";
                                                }     
                                        
                                          ?>
                                       </p>
                                      <p ><?php echo $urow['comment'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
<!--                                    <iframe width="250" class="m-3 card-2" height="150" src="https://www.youtube.com/embed/33rtr3fZvi0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                                </div>
                                    </div> 
							<?php
						}
					
					?>
			
		<?php
	}

?>