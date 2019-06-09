<?php
  include("header.php");

  $query=mysqli_connect("localhost","root","","mavin"); 
  $sql = "SELECT * from experts_master ORDER BY experts_num ASC"; 
  $result=mysqli_query($query,$sql);

  

?>
 
   <!-- Start Breadcrum -->
    <section class="breadcrum">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <nav aria-label="You are here:" role="navigation">
              <h1>Our Teams</h1>
              <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li>
                  <span class="show-for-sr">Current: </span> Our teams
                </li>
    
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrum -->
    
    <!-- Start Services -->
    <section class="our-team">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Our Experts</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>

      <?php while($row = mysqli_fetch_array($result)) 
      {?>
          <div class="large-3 medium-6 cell" data-equalizer>
            <div class="team-box" >
              <div class="team-img" data-equalizer-watch>
                
                
                <img class="team-member" src="<?php echo 'backend/uploads/Experts/thumb_'.$row['experts_img']; ?>"  />
                <div class="overlay-box">
                  <ul class="team-social">
                    <li><a href=<?php echo $row['experts_facebook']; ?> target="_blank"><img src="assets/img/icon-facebook.png"></a></li>
                    <li><a href=<?php echo $row['experts_google']; ?> target="_blank"><img src="assets/img/icon-google.png"></a></li>
                    <li><a href=<?php echo $row['experts_linkedin']; ?> target="_blank"><img src="assets/img/icon-linkedin.png"></a></li>
                    <li><a href=<?php echo $row['experts_twitter']; ?> target="_blank"><img src="assets/img/icon-twitter.png"></a></li>
                  </ul>
                </div>
              </div>
              
              <div class="team-content">
                <h5><a href="#"><?php echo $row['experts_name']; ?></a></h5>
                <p><?php echo $row['experts_position']; ?></p>
              </div>
            </div>
          </div>
        
  <?php } ?>
        </div>
      </div>
    </section>
    <!-- End Services -->
<?php
  include("request_call.php");
  include("footer.php");  
?>
   