   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script type="text/javascript">$(function() {
        $('#course-type').change(function(){
            if($(this).val()=='Image'){
                 $('#course-vid').hide();
                $('#course-img').show();
            }
            if($(this).val()=='Video'){
                $('#course-img').hide();
                $('#course-vid').show();
            }
            
          });
        });
       </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

</body>
</html>