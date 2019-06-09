<?php
  include("header.php");

  $query=mysqli_connect("localhost","root","","mavin"); 
  $sql = "SELECT * from testimonial_master ORDER BY rand(testimonial_id) LIMIT 5"; 
  $result=mysqli_query($query,$sql);
?>
    <!-- Start Banner -->
    <section class="full-height hero">
      <div class="hero-content">
        <div class="grid-container">
          <div class="grid-x grid-margin-x">
            <div class="large-8 large-offset-2 cell hero-width">
              <h1 class="hero-title">Mavin agency provide solutions to grow your business</h1>
            </div>
            <div class="large-10 large-offset-1 cell">
              <h5 class="hero-sub-title">We specialise in custom web design & development, online lead generation and direct marketing strategies to achieve sales for our clients.</h5>
            </div>
            <div  class="large-12 cell text-center">
              <a href="#" class="button">About Us</a>
              <a href="contact.php" class="hollow button">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner -->
    
    <!-- Start Services -->
    <section class="our-services">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Our services</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-1.png" />
              </div>
              <div class="feature-content">
                <h5>Digital Marketing</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-2.png" />
              </div>
              <div class="feature-content">
                <h5>Search Engine Optimization</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-3.png" />
              </div>
              <div class="feature-content">
                <h5>Social Media Marketing</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-4.png" />
              </div>
              <div class="feature-content">
                <h5>Pay Per Click</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-5.png" />
              </div>
              <div class="feature-content">
                <h5>Web Design / Development</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="feature-box">
              <div class="feature-img">
                <img src="assets/img/feature-6.png" />
              </div>
              <div class="feature-content">
                <h5>Ecommerce Solution</h5>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobort nisl ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services -->
    
    <!-- Start Counter -->
    <section class="counter">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Why Choose Us ?</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-10 large-offset-1 cell">
            <div class="grid-x grid-margin-x">
              <div class="large-3 medium-6 cell">
                <div class="counter-box">
                  <div class="counter-img">
                    <img src="assets/img/counter-1.png" />
                  </div>
                  <div class="counter-content">
                    <h5>30+</h5>
                    <p>IT Expert</p>
                  </div>
                </div>
              </div>
    
              <div class="large-3 medium-6 cell">
                <div class="counter-box">
                  <div class="counter-img">
                    <img src="assets/img/counter-2.png" />
                  </div>
                  <div class="counter-content">
                    <h5>7+</h5>
                    <p>Years Experience</p>
                  </div>
                </div>
              </div>
    
              <div class="large-3 medium-6 cell">
                <div class="counter-box">
                  <div class="counter-img">
                    <img src="assets/img/counter-3.png" />
                  </div>
                  <div class="counter-content">
                    <h5>700+</h5>
                    <p>Projects Completed</p>
                  </div>
                </div>
              </div>
    
              <div class="large-3 medium-6 cell">
                <div class="counter-box">
                  <div class="counter-img">
                    <img src="assets/img/counter-4.png" />
                  </div>
                  <div class="counter-content">
                    <h5>500+</h5>
                    <p>Happy Client</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <!-- End Counter -->
    
    <!-- Start Portfolio -->
    <section class="portfolio">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>Finish Project</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-1.png" / alt="portfolio 1">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-2.png" / alt="portfolio 2">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-3.png" / alt="portfolio 3">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-4.png" / alt="portfolio 4">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-5.png" / alt="portfolio 5">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="large-4 medium-6 cell">
            <div class="portfolio-box">
              <div class="portfolio-img">
                <img src="assets/img/portfolio-6.png" / alt="portfolio 6">
              </div>
              <div class="portfolio-overlay">
                <div class="overlay-inner">
                  <div class="overlay-content">
                    <h5><a href="single-portfolio.php">FINISHED PROJECTS</a></h5>
                    <p>BUSINESS, MARKETING</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio -->
    
    <!-- Start Testimonial & Call Back Portfolio -->
    <section class="testimonial">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          

          <div class="large-6 cell">
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
          <div class="large-6 cell">
            <div class="call-back">
              <div class="grid-x grid-padding-x">
                <div class="medium-12 cell">
                  <h5>We are always ready</h5>
                  <h3>Request a Call Back</h3>
                </div>
              </div>          
    
              <form class="call-back-form">
                <div class="grid-x grid-padding-x">
                  <div class="medium-6 cell">
                    <input type="text" placeholder="Full Name" />
                  </div>
                  <div class="medium-6 cell">
                    <input type="text" placeholder="Email Address" />
                  </div>
    
                  <div class="medium-12 cell">
                    <input type="text" placeholder="Subject" />
                  </div>
    
                  <div class="medium-12 cell">
                    <textarea rows="4" placeholder="Message"></textarea>
                  </div>
    
                  <div class="medium-12 cell text-right">
                    <button type="button" class="button">Send Message</button> 
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial & Call Back Portfolio -->
    
    <!-- Start Blog -->
    <section class="blogs">
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-12 cell">
            <div class="section-title">
              <h4>latest blogs</h4>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore<br>eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="blog-box">
              <h5>TIPS FOR COMBATING</h5>
    
              <ul>
                <li><img src="assets/img/icon-user.png">POSTed by : <span>JOHN DEO</span></li>
                <li><img src="assets/img/icon-calendar.png">22.04.2107</li>
              </ul>
    
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>
    
              <a href="single-blog.php">Read More >></a>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="blog-box">
              <h5>TIPS FOR COMBATING</h5>
    
              <ul>
                <li><img src="assets/img/icon-user.png">POSTed by : <span>JOHN DEO</span></li>
                <li><img src="assets/img/icon-calendar.png">22.04.2107</li>
              </ul>
    
              <p> Completely actuaze cent centric cet centric coloration an-sharing without ainstalled and base awesome actua cent centric an coloration event PSD.</p>
    
              <a href="single-blog.php">Read More >></a>
            </div>
          </div>
    
          <div class="large-4 cell">
            <div class="blog-box">
              <h5>TIPS FOR COMBATING</h5>
    
              <ul>
                <li><img src="assets/img/icon-user.png">POSTed by : <span>JOHN DEO</span></li>
                <li><img src="assets/img/icon-calendar.png">22.04.2107</li>
              </ul>
    
              <p> Completely actuaze cent centric cet centric coloration an-sharing without ainstalled and base awesome actua cent centric an coloration event PSD.</p>
    
              <a href="single-blog.php">Read More >></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog -->
<?php 
  if(isset($_GET['q']) && $_GET['q']=='thanks')
  {
    include("thankyou_quote.php");  
  }
  
  include("footer.php");
?>