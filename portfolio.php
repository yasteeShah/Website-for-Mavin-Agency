<?php
  include("header.php");

  $query=mysqli_connect("localhost","root","","mavin"); 
  $sql = "SELECT * from work_master"; 
  $result=mysqli_query($query,$sql);
?>
    <!-- Start Breadcrum -->
    <section class="breadcrum">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <nav aria-label="You are here:" role="navigation">
              <h1>Our Work</h1>
              <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li>
                  <span class="show-for-sr">Current: </span> Our Work
                </li>
    
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrum -->
    
    <!-- Start Portfolio -->
    <section class="portfolio filter">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Our Works</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-12 cell">
            <ul class="filter">
              <li class="active" data-filter="*">All Projects</li>
              <li data-filter=".ecommerce">e-commerce</li>
              <li data-filter=".technology">technology</li>
              <li data-filter=".business">Business</li>
          </ul>
          </div>
          <div class="large-12 cell all-portfolio">
            <div class="grid-x grid-margin-x">
            <?php while($row = mysqli_fetch_array($result)) 
            {?>
              <div class="large-4 medium-6 cell business"> <!---------technology selected----->
                <div class="portfolio-box">

                  <div class="portfolio-img">
                    <img src="<?php echo 'backend/uploads/Work/thumb_'.$row['work_img']; ?>" / alt="portfolio 1">
                  </div>
                  <div class="portfolio-overlay">
                    <div class="overlay-inner">
                      <div class="overlay-content">
                        <h5><a href="single-portfolio.php?id=<?php echo $row['work_id'] ?>&category=<?php echo $row['work_category'] ?>"><?php echo $row['work_category']; ?></a></h5>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            <?php } ?>
         
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio -->
<?php
  include("request_call.php");
  include("footer.php"); 
?>
    