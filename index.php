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
                <div class=" main-button-red" style="margin-bottom:20px;">
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
                    <a href="meeting-details.html"><h4><?php echo $arr['content'];?></h4></a>
                    
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
                  <h3>Learn new skills to go ahead for your career</h3>
                  <p>Whether you want to learn you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.
                  </p>
                  <div class="main-button-red">
                    <a href="registration.php">Join Us Now!</a>
                </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <h3>Enroll For the Course</h3>
                  <p>Follow a recommended learning plan, specifically designed to help you build your knowledge and accomplish your career goals.</p>
                  <div class="main-button-yellow">
                    <a href="registration.php">Join Us Now!</a>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordions is-first-expanded">
              <article class="accordion">
                  <div class="accordion-head">
                      <span>About Us</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>One may feel that the journey of MTIS has just begun but the thought process and its roadmap was laid by the management team for a long time thus enabling the three’s E’s for a better career
                          – Education, Experience and Employability, please visit <a href="about.php" target="_parent">our about page</a> for more info.</p>
                      </div>
                  </div>
              </article>
              <article class="accordion">
                  <div class="accordion-head">
                      <span>How MTIS is Helpful?</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>Like other educational and training industry at MTIS you will be offered varieties programs but the instructors makes the difference and make MTIS stand out from others. We have a variety of skilled and trained trainers whose approach is different which you can see anywhere.<br> MTIS contributes a lot to the knowledge of its trainees and we try our level hard to contribute the best to increase our trainee’s ability so that they stand out from others and whatever they contribute to the corporate world automatically becomes productive. </p>
                      </div>
                  </div>
              </article>
              <article class="accordion">
                  <div class="accordion-head">
                      <span>About MTIS Creative</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>Getting a job is as difficult as beating the crowd because being in the corporate world demands a lot from the applicant because of which the applicants are putting their best, which results in the increment of difficulty level. You can see each and every thing is connected but the solution of this problem is either spending years to reach to a desired position or come to MTIS. At MTIS we provide the entire necessary computer training which helps the newbies and also the experienced workers so that they can achieve better recognition in this competitive world.</p>
                      </div>
                  </div>
              </article>
              <article class="accordion last-accordion">
                  <div class="accordion-head">
                      <span>What types of services are offered by MTIS?</span>
                      <span class="icon">
                          <i class="icon fa fa-chevron-right"></i>
                      </span>
                  </div>
                  <div class="accordion-body">
                      <div class="content">
                          <p>MTIS provides the best available programs which helps in enhancing the technical skills which seems to be beneficial for all the applicants.</p>
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
                <h2>A Few Facts About Our Institute</h2>
              </div>
                <?php
                  $sql=mysqli_query($conn,"Select * from institute");
                  if(mysqli_num_rows($sql)>0){
                  while($arr=mysqli_fetch_array($sql)){
                ?>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-12">
                    <div class="count-area-content percentage">
                      <div class="count-digit"><?php echo $arr['no'];?></div>
                      <div class="count-title"><?php echo $arr['heading'];?></div>
                    </div>
                  </div>
                  
                </div>
              </div>
              
              <?php } } ?>
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