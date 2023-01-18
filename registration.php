<?php
include('includes/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
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
                            <li><a href="index.php">Home</a></li>
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
                            <li><a href="contact.php" class="active">Contact Us</a></li> 
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

          <section class="heading-page header-text" id="top">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <!-- <h6>Here are our upcoming meetings</h6> -->
                  <h2>Registration Form</h2>
                </div>
              </div>
            </div>
          </section>
          <section class="contact-us" id="contact">
          <div class="container py-5 h-100" >
              <div class="row justify-content-center align-items-center h-100" >
                <div class="col-12 col-lg-9 col-xl-7" >
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-3 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                        <form action="#" method="post" onsubmit="checkName('full_name');return false;" id="myform" onsubmit = "return validateForm()">

                          <div class="row">
                            <div class="col-md-6 mb-3 pb-2">
                              <div class="form-outline">
                                <label class="form-label" for="full_name">Full Name</label>
                                  <input type="text"  class="form-control form-control-lg" name="full_name" id="full_name" maxlength="85" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" title="Please enter your FULL name." required/>
                                  
                              </div>
                            </div>
                            <div class="col-md-6  mb-3 pb-2">
                              <div class="form-outline">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" class="form-control form-control-lg" title="Please enter your Email." required/>
                                <h2 id="result"></h2>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3 pb-2">
                              <div class="form-outline">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <input type="tel"  id="phoneNo" name="phone" class="form-control form-control-lg" maxlength="10" required/>
                                
                              </div>
                              <div id="result"></div>
                            </div>
                            <div class="col-md-6 mb-3 pb-2">
                              <h6 class="mb-2 pb-1">Gender: </h6>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                  value="option1" checked required/>
                                <label class="form-check-label" for="femaleGender">Female</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                  value="option2" />
                                <label class="form-check-label" for="maleGender">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                  value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3 pb-2">
                              <div class="form-outline">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="txtPassword" class="form-control form-control-lg" required/>
                                
                              </div>
                            </div>
                            <div class="col-md-6 mb-3 pb-2">
                              <div class="form-outline">
                                <label class="form-label" for="pass">Confirm Password</label>
                                <input type="password" id="txtConfirmPassword" class="form-control form-control-lg" required/>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-check d-flex justify-content-left mb-5">
                                  <input class="form-check-input me-2 mb-1" type="checkbox" value="" id="form2Example3c" required/>
                                  <label class="form-check-label" for="form2Example3" style="font-size:12px;">
                                    I agree all <a href="#">Terms & Conditions </a>and <a href="#!">Privacy policy</a>
                                  </label>
                                </div>
                            </div>
                          </div>

                          <center><button type="button" class="btn btn-primary btn-block mb-4 ">Submit</button></center>
                            <div class="form-check d-flex justify-content-center ">
                                  <label for="form2Example3">
                                    Already have an account ? <a href="login.php">Sing In </a>
                                  </label>
                            </div>
                          
                        </form>
                    </div>
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
    <script src="assets/js/isotope.js"></script>
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


  </body>

</html>
