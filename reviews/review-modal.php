
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Review</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action="/arena/reviews/addnew.php" method="post" id="testimonial">
        <div class="form-group">
          
          <input type="text" class="form-control" id="usr" name="usr"  placeholder="Enter your Name" required>
        </div>
        <div class="form-group">
          
          <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="email" placeholder="Enter your Email" required >
        </div>
          <div class="form-group">
              <select class="form-control" name="course" id="course">
                  <option value="0">SELET COURSE</option>
                <option value="VFX">VFX</option>
                <option value="ANIMATION">ANIMATION</option>
                <option value="GWDD">GWDD</option>
                <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                  <option value="UI/UX">UI/UX</option>
              </select>
            </div>
            <p class="m-0">Rate US </p>
         <div class="stars">
            <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
            <label class="star star-5" for="star-5"></label>
            <input class="star star-4" id="star-4" type="radio" value="4" name="rating"/>
            <label class="star star-4" for="star-4"></label>
            <input class="star star-3" id="star-3" type="radio" value="3" name="rating"/>
            <label class="star star-3" for="star-3"></label>
            <input class="star star-2" id="star-2" type="radio" value="2" name="rating"/>
            <label class="star star-2" for="star-2"></label>
            <input class="star star-1" id="star-1" type="radio" value="1" name="rating"/>
            <label class="star star-1" for="star-1"></label>
         
        </div>

              <br>
          <div class="form-group">
              
              <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Your Comment" required></textarea>
          </div>
              <button class="btn btn-primary" name="submit" id="submit" type="submit">SUBMIT</button>
          </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
    
  </div>
</div>