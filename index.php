<?php
  include('includes/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    <!--TemplateMo 569 Edu Meeting https://templatemo.com/tm-569-edu-meeting -->
  </head>
  <body>
    <!-- Sub Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-8">
            <div class="left-content">
              <!-- <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p> -->
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <div class="right-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                          <div class="logo">
                          <img src="mtis.png" alt="" style="height:30px; width:130px;">
                          <!-- <span>course</span> -->
                          </div>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="internship.php">Internship Program</a></li>
                                    <li><a href="placements.php">Placements</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Software Training</a>
                                <ul class="sub-menu">
                                    <li><a href="course_schedule.php">Course Schedule</a></li>
                                    <li><a href="trainers.php">Trainers Profile</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Career</a>
                                <ul class="sub-menu">
                                    <li><a href="interview.php">Interview Preparation</a></li>
                                    <li><a href="vision_mission.php">Vision & Mission</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">New Batches</a>
                                <ul class="sub-menu">
                                    <li><a href="online_batches.php">Online batches</a></li>
                                    <li><a href="free_workshop.php">Free Online Workshop Demo</a></li>
                                    <li><a href="free_workshop.php">Corporate Training</a></li>
                                    <li><a href="free_workshop.php">Weekends Training</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.php">Gallery</a></li> 
                            <li><a href="contact.php">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
      <!-- <img src="assets/images/course-02.jpg" alt="" style="height:600px;"> -->
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video> 
        <div class="video-overlay header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="caption">
                <h6>Hello Students</h6>
                <h2>Welcome to MTIS</h2>
                <div class="main-button-red">
                    <div class="scroll-to-section"><a href="registration.php">Book Now!</a></div>
                </div>
            </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-service-item owl-carousel">
              <?php
              
              $sql=mysqli_query($conn,"Select * from home_page");
              if(mysqli_num_rows($sql)>0){
              while($arr=mysqli_fetch_array($sql)){
              ?>
              <div class="item" style="height:300px;">
                <div class="icon">
                  <img src="assets/images/<?php echo $arr['image'];?>" alt="">
                </div>
                <div class="down-content">
                  <h4><?php echo $arr['service_name'];?></h4>
                  <p><?php echo $arr['service_content'];?></p>
                </div>
              </div>
                <?php } } ?>
              <!-- <div class="item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <div class="down-content">
                  <h4>Best Teachers</h4>
                  <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="upcoming-meetings" id="meetings">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-4">
            <div class="categories">
                
                <div class=" main-button-red" style="margin-bottom:70px;">
                  <a href="meetings.html">All Upcoming Meetings</a>
                </div>
                <h4>Meeting Catgories</h4>
                <?php
            
                  $sql=mysqli_query($conn,"Select * from meetings");
                  if(mysqli_num_rows($sql)>0){
                  while($arr=mysqli_fetch_array($sql)){
                  ?>
                <ul>
                  <li><a href="https://meet.google.com/enn-dazv-mbz" target="_blank"><?php echo $arr['link'];?></a></li><br>
                
                </ul>
                <?php } } ?>
                  
            </div>
          </div>
          
          <div class="col-lg-8">
            <div class="row">
                <?php
                  $sql=mysqli_query($conn,"Select * from bg_image");
                  if(mysqli_num_rows($sql)>0){
                  while($arr=mysqli_fetch_array($sql)){
                ?>
              <div class="col-lg-6" >
                <div class="meeting-item">
                  <div class="thumb">
                  
                    <a href="meeting-details.html"><img src="admin/dist/img/<?php echo $arr['image'];?>" alt="New Lecturer Meeting" style="height:250px;"></a>
                  </div>
                  <div class="down-content">
                    <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                    <p>Morbi in libero blandit lectus.</p>
                  </div>
                </div>
              </div>
                <?php } } ?>
              <!-- <div class="col-lg-6">
                <div class="meeting-item">
                  <div class="thumb">
                     <div class="price">
                      <span>$48.00</span>
                    </div> 
                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                  </div>
                  <div class="down-content">
                    <div class="date">
                      <h6>Nov <span>30</span></h6>
                    </div>
                    <a href="meeting-details.html"><h4>Student Training Meetup</h4></a>
                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        
        </div>
      </div>
    </section>

    <section class="apply-now" id="apply">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <h3>APPLY FOR BACHELOR DEGREE</h3>
                  <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                  <div class="main-button-red">
                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <h3>APPLY FOR BACHELOR DEGREE</h3>
                  <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                  <div class="main-button-yellow">
                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordions is-first-expanded">
              <article class="accordion">
                  <div class="accordion-head">
                      <span>About Edu Meeting HTML Template</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                      </div>
                  </div>
              </article>
              <article class="accordion">
                  <div class="accordion-head">
                      <span>HTML CSS Bootstrap Layout</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                          Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                      </div>
                  </div>
              </article>
              <article class="accordion">
                  <div class="accordion-head">
                      <span>Please tell your friends</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                          Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                      </div>
                  </div>
              </article>
              <article class="accordion last-accordion">
                  <div class="accordion-head">
                      <span>Share this to your colleagues</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                          Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                      </div>
                  </div>
              </article>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-courses" id="courses">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>Our Popular Courses</h2>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="owl-courses-item owl-carousel">
                <?php
                  $sql=mysqli_query($conn,"Select * from course");
                  if(mysqli_num_rows($sql)>0){
                  while($arr=mysqli_fetch_array($sql)){
                ?>
              <div class="item">
                <img src="admin/dist/img/<?php echo $arr['image'];?>" alt="Course One" style="height:190px;">
                <div class="down-content" style="height:180px;">
                  <h4><a href="course.php?course_id=<?php echo $arr['course_id']?>"><?php echo $arr['course_name'];?></a></h4>
                  <!-- <h4><?php echo $arr['course_description'];?></h4> -->
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                      <?php echo $arr['instructor'];?>
                      </div>
                      <div class="col-4">
                        <span><?php echo $arr['price'];?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <?php } }?>
              <!-- <div class="item">
                <img src="assets/images/course-02.jpg" alt="Course Two">
                <div class="down-content">
                  <h4>Curabitur molestie dignissim purus vel</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$180</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-03.jpg" alt="">
                <div class="down-content">
                  <h4>Nulla at ipsum a mauris egestas tempor</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$140</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-04.jpg" alt="">
                <div class="down-content">
                  <h4>Aenean molestie quis libero gravida</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$120</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-01.jpg" alt="">
                <div class="down-content">
                  <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$250</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-02.jpg" alt="">
                <div class="down-content">
                  <h4>TemplateMo is the best website for Free CSS</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$270</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-03.jpg" alt="">
                <div class="down-content">
                  <h4>Web Design Templates at your finger tips</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$340</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-04.jpg" alt="">
                <div class="down-content">
                  <h4>Please visit our website again</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$360</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-01.jpg" alt="">
                <div class="down-content">
                  <h4>Responsive HTML Templates for you</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$400</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-02.jpg" alt="">
                <div class="down-content">
                  <h4>Download Free CSS Layouts for your business</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$430</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-03.jpg" alt="">
                <div class="down-content">
                  <h4>Morbi in libero blandit lectus cursus</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$480</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="assets/images/course-04.jpg" alt="">
                <div class="down-content">
                  <h4>Curabitur molestie dignissim purus</h4>
                  <div class="info">
                    <div class="row">
                      <div class="col-8">
                        <ul>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                      <div class="col-4">
                        <span>$560</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-facts">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                <h2>A Few Facts About Our University</h2>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-12">
                    <div class="count-area-content percentage">
                      <div class="count-digit">94</div>
                      <div class="count-title">Succesed Students</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="count-area-content">
                      <div class="count-digit">126</div>
                      <div class="count-title">Current Teachers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-12">
                    <div class="count-area-content new-students">
                      <div class="count-digit">2345</div>
                      <div class="count-title">New Students</div>
                    </div>
                  </div> 
                  <div class="col-12">
                    <div class="count-area-content">
                      <div class="count-digit">32</div>
                      <div class="count-title">Awards</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-lg-6 align-self-center">
            <div class="video">
              
              <a href="assets/images/onlinetraining.mp4" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
              <?php 
            include("includes/footer.php");
            ?>
    </section>

 
  
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
  </body>
</html>