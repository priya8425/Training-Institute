<?php
include('includes/configure.php');
 
 
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mode_of_training = $_POST['mode_of_training'];
        $state = $_POST['state'];
        $course_name = $_POST['course_name'];
        
        $query = "INSERT INTO `registration`(`first_name`,`last_name`, `email`, `phone`, `mode_of_training`, `state`, `course_name`) VALUES ('$first_name','$last_name','$email','$phone','$mode_of_training','$state','$course_name')";
        if (mysqli_query($conn, $query)){
          echo "<script> alert ('New record has been added successfully !');window.location='trainers.php'</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
    }
  
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
                              <a href="javascript:void(0)" class="active">Software Training</a>
                              <ul class="sub-menu">
                                  <li><a href="course_schedule.php">Course Schedule</a></li>
                                  <li><a href="trainers.php" class="active">Trainers Profile</a></li>
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

  <section class="trainers-heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <h6>Here are our upcoming meetings</h6> -->
          <h2>Trainers Profile</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page contact-us" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-lg-8" style="color:white;">
                    <h3 style="color:white;"> Trainers Profile</h3>
                <hr>
                "If you can't explain it simply, you don't understand it well enough. ~Albert Einstein
                <hr>
                
                <br>
                <h3 style="color:white;">About Software Trainers Profile</h3>
                <br>    
                <h5 style="color:white; font-size:13px;">The quality and also usefulness connected with any kind of exercise program depends upon the actual Software Trainers.  MTIS Software Trainers are professionals, that are experienced and have real-world connection with the approval advancement. The actual interactive session carried out throughout the Course assists student for you to clear the style and also find out more rapidly.</h5>
                <h5 style="color:white; font-size:13px;">Having rich practical knowledge with technologies asking, providing alternatives for sophisticated and also varied difficulties for you to business, all our own software trainers are knowledgeable and also conversant regarding the newest scientific progress within their field of expertise, that eventually enables them to share technologies beyond study course articles and also guide the actual students with entire understanding of purposes.</h5>
                <br>
                <br>
                <div class="row grid">
                    <?php     
                    $sql=mysqli_query($conn,"select * from trainers");
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                    <div class="col-lg-4 templatemo-item-col all imp">
                        <div class="meeting-item">
                            <div class="thumb">
                            <img src="admin/dist/img/<?php echo $arr['image'];?>" alt="" style="height:200px;">
                            </div>
                            <div class="down-content" style="height:150px;">
                            <h4><?php echo $arr['trainer_name'];?></h4>
                            <h4><?php echo $arr['about'];?></h4>
                            
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </div>
                <h3 style="color:white;">WHY OUR SOFTWARE TRAINERS</h3>
                <br>
                <br>
                  <P style="color:white; font-size:13px;">
                    Assessing individual/group training needs   
                    Planning, preparing and researching lessons   
                    Developing and delivering programmes of learning activities   
                    Preparing teaching/course materials   
                    Teaching time with students on an individual or group basis                      
                     Checking and assessing students work and giving feedback    
                    Making use of new technology such as distance learning or video conferencing</li>
                    Keeping personal IT skills and knowledge up to date 
                  </p>  
            </div>
            <div class="col-lg-4">
                        <div class="right-info" style="color:white;"    >
                        
                            <div class="about_title">Join Courses</div>
                                    <p class="about_text" style="color:white;" style="font-size:15px;">MTIS is a leading Software Training Institute providing software training, project guidance, IT consulting & corporate training.</p> 

                            <div class="contact_info" style="margin-top:-1px;">
                                <hr>
                                <h4 style="font-size:20px;">Registration Info</h4>
                                <hr>
                                <form method="post" style="font-size:15px;">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q">First Name*</label>
                                        <input type="text" id="form3Example1q" placeholder="Enter Your Name" name="first_name"  class="form-control" />
                                    
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q">Last Name*</label>
                                        <input type="text" id="form3Example1q" placeholder="Enter Your Last Name"  name="last_name" class="form-control" />
                                        
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q">Email*</label>
                                        <input type="Email" id="form3Example1q" placeholder="Enter Your Email"  name="email"  class="form-control" />
                                        
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q">Contact No*</label>
                                        <input type="number" id="form3Example1q" placeholder="Enter Your Mobile Number"  name="phone"  class="form-control" />
                                        
                                    </div>

                                    <div class="row">
                            
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q">Mode OF Training*</label>
                                                <select class="form-control" style="height:34px; width:100%;"  name="mode_of_training">
                                                <option  >Online</option>
                                                <option >Offline</option>
                                                <option >Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example1q">State*</label>
                                            <input type="text" id="form3Example1q" placeholder="Enter State" name="state"  class="form-control" />
                                    
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <?php

                                        $sql="select * from course";
                                        $result=mysqli_query($conn,$sql);
                                        ?>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q">Course*</label>
                                                
                                                <select class="form-control" style="height:34px; width:100%;" name="course_name">
                                                <option>select</option>
                                                <?php
                                                while($row=mysqli_fetch_assoc($result)){
                                                ?>
                                                <option><?php echo $row['course_name']?></option>
                                                <?php } ?>
                                                </select>
                                            
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-danger btn-lg mb-1">Submit</button>

                                </form>
                
                            </div>

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
