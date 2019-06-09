<?php
  include("header.php");

    if(isset($_GET["id"]))
    {
        $workdata_category = $_GET["id"];
    }
    if(isset($_GET["category"]))
    {
        $category = $_GET["category"];
    }

  $query=mysqli_connect("localhost","root","","mavin"); 
  $sql = "SELECT * from workdata_post where workdata_category=".$workdata_category;
  $result=mysqli_query($query,$sql);

?>
   <!-- Start Breadcrum -->
    <section class="breadcrum">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <nav aria-label="You are here:" role="navigation">
              <h1>Mavin Digital Agency Website Design</h1>
              <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li>
                  <span class="show-for-sr">Current: </span> Mavin Digital Agency Website Design
                </li>
    
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- End Breadcrum -->

    <section class="single-project">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <h2 class="project-title">Mavin Digital Agency Website Design</h2>
    
            <ul class="list-tags">
              <li>UI/UX Design</li>
              <li>Front End Design</li>
            </ul>
    
            <div class="list-project-img">        
              <div class="pro-img">
                <img src="assets/img/branding-2.jpg" />
              </div>
            </div>
    <?php while($row = mysqli_fetch_array($result)) 
    {?>
            <div class="list-project-img">
              <h4><?php echo $category; ?> (Style Guide)</h4>                                                         <!----Portfolio category-------->
              <h5><?php echo $row['workdata_subject']; ?> (Subject)</h5>                                                                                                      <!----Portfolio category-------->
              <div class="pro-img">          
                <img src="<?php echo 'backend/uploads/WorkData/thumb_'.$row['workdata_img']; ?>" />                      <!----Portfolio Image-------->
              </div>
            </div>
            
      <?php } ?>
            <div class="list-project-img">
              <h4>01. Home Screen</h4>
              <div class="pro-img">            
                <img src="assets/img/branding-2.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
  include("footer.php");
?>
    