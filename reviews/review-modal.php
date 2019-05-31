
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
          <form action="" method="post">
        <div class="form-group">
          
          <input type="text" class="form-control" id="usr"  placeholder="Enter your Name" required  >
        </div>
        <div class="form-group">
          
          <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="email" placeholder="Enter your Email" required >
        </div>
          <div class="form-group">
              <select class="form-control" id="course">
                  <option value="0">SELET COURSE</option>
                <option value="VFX">VFX</option>
                <option value="ANIMATION">ANIMATION</option>
                <option value="GWDD">GWDD</option>
                <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                  <option value="UI/UX">UI/UX</option>
              </select>
            </div>
              
          <fieldset class="rating">
            <p class="d-inline-block mt-2 ">Rate The course</p>
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
        
            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
            
            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
            
            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
            
            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
        </fieldset>
              <br>
          <div class="form-group">
              
              <textarea class="form-control" rows="5" id="comment" placeholder="Your Comment" required></textarea>
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