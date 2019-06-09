<?php
  include("header.php");

  $query=mysqli_connect("localhost","root","","mavin"); 
  $sql = "SELECT * from testimonial_master ORDER BY rand(testimonial_id) "; 
  $result=mysqli_query($query,$sql);
?>
   <!-- Start Breadcrum -->
    <section class="breadcrum">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <nav aria-label="You are here:" role="navigation">
              <h1>About US</h1>
              <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li>
                  <span class="show-for-sr">Current: </span> About Us
                </li>
    
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrum -->
    
    <!-- Start About Us -->
    <section class="about-us">
      <div class="grid-container">
        <div class="grid-x grid-margin-x" data-equalizer data-equalize-on="medium">
          <div class="large-6 cell" data-equalizer-watch>
            <div class="about-content">
              <h5>Welcome To mavin agency</h5>
    
              <p>Maven Agency is a results-driven Online Marketing Agency based in Cape Town, South Africa. We specialise in custom web design & development, online lead generation and direct marketing strategies to achieve sales for our clients. Our portfolio ranges from JSE listed companies to privately held start-ups. </p>
    
              <p>A Maven is an expert, a person who is exceptionally talented in a particular field of study or work. A Maven is an intense collector of
              information, and is often the first to pick up on new and nascent trends. We are online marketing Mavens – fixated on creating a return on investment for our clients.</p>
    
              <a href="#" class="button">Read More</a>
            </div>
          </div>
          <div class="large-6 cell" data-equalizer-watch>
            <img class="w100" src="assets/img/about.png" />
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->
    
    <!-- Start Our mvp -->
    <section class="our-mvp">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>our mission vision & purpose</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="mvp-box">
              <img src="assets/img/icon-mission.png" />
    
              <h4>Mission</h4>
    
              <p>More split well sentimental publicly regarding distt hello adroit after ocelot cut the abashe explicitly much rabid one goodness within that tartula stung well against cast obscure badger jeep quail congenially along hello where.</p>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="mvp-box">
              <img src="assets/img/icon-vision.png" />
    
              <h4>Vision</h4>
    
              <p>More split well sentimental publicly regarding distt hello adroit after ocelot cut the abashe explicitly much rabid one goodness within that tartula stung well against cast obscure badger jeep quail congenially along hello where.</p>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="mvp-box">
              <img src="assets/img/icon-purpose.png" />
    
              <h4>Purpose</h4>
    
              <p>More split well sentimental publicly regarding distt hello adroit after ocelot cut the abashe explicitly much rabid one goodness within that tartula stung well against cast obscure badger jeep quail congenially along hello where.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Start Our mvp -->
    
    <!-- Start About Us -->
    <section class="about-us">
      <div class="grid-container">
        <div class="grid-x grid-margin-x" data-equalizer data-equalize-on="medium">      
          <div class="cell large-6 medium-12 small-order-2 large-order-1" data-equalizer-watch>
            <img class="w100" src="assets/img/about-1.png" />
          </div>
          <div class="cell large-6 medium-12 small-order-1 large-order-2" data-equalizer-watch>
            <div class="about-content">
              <h4>Who We Are</h4>
    
              <p class="mb-10">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like you and make your dream come true.</p>
    
              <ul class="list">
                <li>We provide a central point of contact.</li>
                <li>Flexible hiring models.</li>
                <li>Track performance with project management tools.</li>
                <li>Easy and seamless communication; anytime, anywhere.</li>
                <li>Highly skilled and certified individuals.</li>
                <li>You have total involvement and control of your teams.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us -->
    
    <!-- Start testimonial -->
    <section class="testimonial inner">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Testimonials</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-12 cell">
            <div id="testimonial-slider" class="testimonial-slider owl-carousel owl-theme">

            <?php while($row = mysqli_fetch_array($result)) 
            {?>

              <div class="item">
                <div class="large-12 cell">
                  <div class="testimonial-review">
                    <p><?php echo $row['testimonial_review']; ?></p>
                  </div>
                </div>
    
                <div class="large-12 cell">
                  <div class="testimonial-detail">
                    <img src="<?php echo 'backend/uploads/Testimonial/thumb_'.$row['testimonial_img']; ?>" />
                    <h5><?php echo $row['testimonial_name']; ?></h5>
                    <p>- <?php echo $row['testimonial_position']; ?></p>
                  </div>
                </div>
              </div>

            <?php } ?>
 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services -->
    
<?php
  include("request_call.php");
  include("footer.php");
  
?>
   
