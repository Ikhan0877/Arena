    <footer class="container-fluid">
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="img-fluid mt-5 " width="200" height="200" src="images/arena-animation-logo.jpg">
                <p class="text-white mt-5">Arena Animation is the leader in Animation Multimedia education with over 20 years of experience, backed by excellent faculty for latest education tools.</p>
            </div>
            <div class="col-md-3 text-center text-white">
                <h3 class="mt-5">Navigations</h3>
                <ul class="mt-5">
                    <li class="list-unstyled mt-2">Home</li>
                    <li class="list-unstyled mt-2">Course</li>
                    <li class="list-unstyled mt-2">Students Work</li>
                    <li class="list-unstyled mt-2">Testimonial</li>
                    <li class="list-unstyled mt-2">Events</li>
                </ul>
            </div>
            <div class="col-md-3 text-center text-white">
                <h3 class="mt-5">Contact Information</h3>
                <p class="mt-5 p-5"> 
                    # 436, 4th Cross,
                    Kalyan Nagar HRBR Layout, 
                    2nd Block, Bangalore - 43
                </p>
                <i class="fab fa-facebook-square text-primary p-2" style="font-size:25px;"></i>
                <i class="fab fa-instagram p-2"style="font-size:25px;"></i>
                <i class="fab fa-youtube text-danger p-2"style="font-size:25px;"></i>
                <i class="fab fa-twitter text-primary p-2"style="font-size:25px;"></i>
            </div>
             <div class="col-md-3 text-center text-white">
                <h3 class="mt-5 rounded-circle mx-auto" ><i class="fas fa-headset p-3" style="font-size:60px;"></i></h3>
                 <p>080-25423786 / 9844586786</p>
                 <h3 class="mt-5"><i class="fas fa-envelope-square p-3" style="font-size:60px;"></i></h3>
                 <p>admin@arenakamanahalli.in<br>
                     arenabanaswadi@gmail.com
                 </p>
            </div>
        </div>
    </footer>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        showUser();
		 function isValidEmailAddress(emailAddress) {
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }

        
		$(document).on('click', '#submit', function(e){
            
            var email = $('#email').val();
			if ($('#usr').val()=="")
            {
                
                alert('Please Enter your name');
                $('#usr').focus();
                e.preventDefault();
            }
            else if(!isValidEmailAddress(email)){
                alert('Please Enter proper email address');
                $( "#email" ).focus();
                e.preventDefault();
            }
            else if($('#course').val() == 0){
                alert('Please select any course');
                $( "#course" ).focus();
                e.preventDefault();
            }
            else if($('#comment').val()=="")
            {
				alert('Please enter your comments');
                $('#comment').focus();
                e.preventDefault();
                
			}
			else{
			$usr=$('#usr').val();
			$email=$('#email').val();
            $course=$('#course').val();
            $rating=$('[name=rating]').val();
            $comment=$('#comment').val();
           
				$.ajax({
                    dataType: 'json',
					type: "POST",
					url: "reviews/addnew.php",
					data: {
						usr: $usr,
						email:$email,
                        course:$course,
                        rating:$rating,
                        comment:$comment,
                        submit:1,
					},
					success: function(){
						showUser();
					}
				});
//                
            }
		});
        
        
        function showUser(){
		$.ajax({
			url: 'reviews/displayrecord.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#displayrecord').html(response);
			}
		});
	   }
        
    });
    
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

</body>
</html>