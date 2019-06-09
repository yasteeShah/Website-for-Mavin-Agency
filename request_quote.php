<script>

  function redirect()
  {
    window.location="index.php";
  }

  function addTheImage() 
  {
    var img = document.createElement('img');
    img.src = "D:/wamp64/www/mavin/assets/defaultmessage.jpg";
    document.body.appendChild(img);
  }

</script>

<!-- Start Get Quote -->
    <div class="reveal req-quote" id="get-quote" data-reveal>
      <form method="POST" action="quote_db.php" onSubmit="alert('Thank you for your feedback.');">                
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <h4>Request a Quote</h4>
          </div>
    
          <div class="large-12 cell">
            <label>Name</label>
            <input class="form-control" type="text" id="quote_name" name="quote_name" placeholder="" required="true" />
          </div>
    
          <div class="large-12 cell">
            <label>Email</label>
            <input class="form-control" type="email" id="quote_email" name="quote_email" placeholder="" required="true"/>
          </div>
    
          <div class="large-12 cell">
            <label>Mobile No</label>
            <input class="form-control" type="number" id="quote_phone" name="quote_phone" placeholder="" required="true"/>
          </div>
    
          <div class="large-12 cell">
            <label>Subject</label>
            <input class="form-control" type="text" id="quote_subject" name="quote_subject" placeholder="" required="true"/>
          </div>
    
          <div class="large-12 cell">
            <label>Detail Information</label>
            <textarea class="form-control" id="quote_detail" name="quote_detail" rows="4" required="true"></textarea>
          </div>

          <div class="large-12 cell">
            <input type="submit" id="send_message" class="button" name="Send Message"/>
           <!-- <button type="submit" onclick="Send_message()" id="send_message" name="send_message" class="button" >Send Message</button> -->
          </div>
        </div>
      </form>
      <button class="close-button" data-close aria-label="Close modal" onclick="redirect()"name="close-button" id="close-button" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<!-- End Get Quote -->  

    <script src="assets/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src='http://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>