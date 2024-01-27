

<?php

// Adjust the file path according to your directory structure

include 'config.php';

include 'contact.php';



// Ensure the inclusion of config.php was successful before proceeding with database operations



if ($con) {

    $sql = "SELECT * FROM `user` WHERE `user`.`id` = 0";

    $result = mysqli_query($con, $sql);



    if ($result) {

        $data = mysqli_fetch_assoc($result);

        // Further processing with $data

    } else {

        // Handle the query error

        echo "Error: " . mysqli_error($con);

    }

} else {

    // Handle the case where the database connection couldn't be established

    echo "Failed to connect to the database.";

}

?>



<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Merga Mesfin</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">



 

</head>



<body>



  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">

    <div class="container d-flex align-items-center justify-content-between">



      <h1 class="logo"><a href="login.php">Merga Mesfin</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->

      <a href="index.html" class="logo"><img src="../logo.png" alt="" class="img-fluid"></a>



      <nav id="navbar" class="navbar">

        <ul>

          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

          <li><a class="nav-link scrollto" href="#about">About</a></li>

          <li><a class="nav-link scrollto" href="#services">Services</a></li>

          <li><a class="nav-link scrollto " href="#blog">Blog</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->



    </div>

  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->

  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Merg.jpg)">

    <div class="overlay-itro"></div>

    <div class="hero-content display-table">

      <div class="table-cell">

        <div class="container">

          <!--<p class="display-6 color-d">Hello, world!</p>-->

          <h1 class="hero-title mb-4">I am <?php if ($data && isset($data['Name'])) { ?>

        <p><span class="title-s"> </span><span><?php echo $data['Name']; ?></span></p>

    <?php } else { ?>

        <p>User data not found.</p>

    <?php } ?></h1>

          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Lecturer, Photo editor"></span></p>

          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->

        </div>

      </div>

    </div>

  </div><!-- End Hero Section -->



  <main id="main">



    <!-- ======= About Section ======= -->

    <section id="about" class="about-mf sect-pt4 route">

      <div class="container">

        <div class="row">

          <div class="col-sm-12">

            <div class="box-shadow-full">

              <div class="row">

                <div class="col-md-6">

                  <div class="row">

                    <div class="col-sm-6 col-md-5">

                      <div class="about-img">

                        <img src="assets/img/MM.png" class="img-fluid rounded b-shadow-a" alt="">

                      </div>

                    </div>

                    <div class="col-sm-6 col-md-7">

                      <div class="about-info">

                        <?php if ($data && isset($data['Name'])) { ?>

                        <p><span class="title-s">Name: </span><span><?php echo $data['Name']; ?></span></p>

                    <?php } else { ?>

                        <p>User data not found.</p>

                    <?php } ?></span></p>

                        <p><span class="title-s">Profile: </span> <span><?php echo $data['title']; ?></span></p>

                        <p><span class="title-s">Email: </span> <span><?php echo $data['Email']; ?></span></p>

                        <p><span class="title-s">Phone: </span> <span><?php echo $data['Phone']; ?></span></p>

                      </div>

                    </div>

                  </div>

                  <div class="skill-mf">

                    <p class="title-s">Skill</p>

                    <span>HTML</span> <span class="pull-right">85%</span>

                    <div class="progress">

                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>

                    <span>CSS3</span> <span class="pull-right">75%</span>

                    <div class="progress">

                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>

                    <span>PHP</span> <span class="pull-right">80%</span>

                    <div class="progress">

                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>

                    <span>JAVASCRIPT</span> <span class="pull-right">60%</span>

                    <div class="progress">

                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>

                  </div>

                </div>

                <div class="col-md-6">

                  <div class="about-me pt-4 pt-md-0">

                    <div class="title-box-2">

                      <h5 class="title-left">

                        About me

                      </h5>

                    </div>

                    <p class="lead">

                      I am Merga Mefin. i graduated from Dambi dollo  University with bachelor of Science degree in computer science in 2023. throughout my academic journey i have gained solid foundation in basic principle of computer science that made me confident to carry any resposiblity in the area of my expertise.

                    </p>

                    <p class="lead">

                     in adition to this i am ethical person and who is interested to serve any person without any discrimination. i have the same attitude for all human being.  

                    </p>

                    <p class="lead">

                     <strong>I proud to serve</strong>

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- End About Section -->



    <!-- ======= Services Section ======= -->

    <section id="services" class="services-mf pt-5 route">

      <div class="container">

        <div class="row">

          <div class="col-sm-12">

            <div class="title-box text-center">

              <h3 class="title-a">

                Services

              </h3>

              <p class="subtitle-a">

                You can get the following services 

              </p>

              <div class="line-mf"></div>

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Developing Online Systems </h2>

                <p class="s-description text-center">

                  I can Develope online systems for Hotels, Schools, for PLC' and for any startups and company.  

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-person-workspace"></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Web Development</h2>

                <p class="s-description text-center">

                  I Can develope some websites for any organization according to their requirement. 

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Consulting on Technological Advancement </h2>

                <p class="s-description text-center">

                  If you need any Consulting regarding to Technology

                  in order to Buy any technological devices You can contact me.  

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Responsive Design</h2>

                <p class="s-description text-center">

                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,

                  provident vitae! Magni

                  tempora perferendis eum non provident.

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Part-time Lecturing </h2>

                <p class="s-description text-center">

                  I am interested to give part-time lecturing at any education institution on the area of my expertise. In addition to this I can  bring tutorial for Computer Science students on University Exit Exam. 

                </p>

              </div>

            </div>

          </div>

          <div class="col-md-4">

            <div class="service-box">

              <div class="service-ico">

                <span class="ico-circle"><i class="bi bi-book"></i></i></span>

              </div>

              <div class="service-content">

                <h2 class="s-title">Home Tutor </h2>

                <p class="s-description text-center">

                  I will Give Home tutor on some subjects like English, Mathematics, Biology, Chemistry, from Grade 5 upto 12. 

                  specially i will give special tutorials for the student who have been  preparing them selves for University intrance Exam (UEE).

                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- End Services Section -->



   





    <!-- ======= Testimonials Section ======= -->

   



    <!-- ======= Contact Section ======= -->

    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">

      <div class="overlay-mf"></div>

      <div class="container">

        <div class="row">

          <div class="col-sm-12">

            <div class="contact-mf">

              <div id="contact" class="box-shadow-full">

                <div class="row">

                  <div class="col-md-6">

                    <div class="title-box-2">

                      <h5 class="title-left">

                        Send Me a Message

                      </h5>

                    </div>

                    <div>

                     <form action="contact.php" method="post" role="form" class="php-email-form">

                        <div class="row">

                          <div class="col-md-12 mb-3">

                            <div class="form-group">

                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>

                            </div>

                          </div>

                          <div class="col-md-12 mb-3">

                            <div class="form-group">

                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

                            </div>

                          </div>

                          <div class="col-md-12 mb-3">

                            <div class="form-group">

                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>

                            </div>

                          </div>

                          <div class="col-md-12">

                            <div class="form-group">

                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>

                            </div>

                          </div>

                          <div class="col-md-12 text-center my-3">

                            <div class="loading">Loading</div>

                            <div class="error-message"></div>

                            <div class="sent-message">Your message has been sent. Thank you!</div>

                          </div>

                          <div class="col-md-12 text-center">

                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>

                          </div>

                        </div>

                      </form>

                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="title-box-2 pt-4 pt-md-0">

                      <h5 class="title-left">

                        Get in Touch

                      </h5>

                    </div>

                    <div class="more-info">

                      <p class="lead">

                        According to above the services, if you are interested to order any project, in addition if you you want to get one of the above services you can contact me here. <br> <br> furthermore if you support me with you idea you are welcome. <br>  <br> <strong> Thank you so much</strong>

                      </p>

                      <ul class="list-ico">

                        <li><span class="bi bi-geo-alt"></span> Bishoftu, oromia, Ethiopia</li>

                        <li><span class="bi bi-phone"></span> <span><?php echo $data['Phone']; ?></span></li>

                        <li><span class="bi bi-envelope"></span><span><?php echo $data['Email']; ?></span></li>

                      </ul>

                    </div>

                    <div class="socials">

                      <ul>

                        <li><a href="https://www.facebook.com/marga.masfin"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>

                        <li><a href="https://www.instagram.com/margamasfin?igsh=MWEzczVhbzF0ajVoeA=="><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>

                        <li><a href="https://twitter.com/Merga96073030"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>

                        <li><a href="https://www.linkedin.com/public-profile/settings"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>

                      </ul>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

  <footer>

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <div class="copyright-box">

            <p class="copyright">&copy; Copyright <strong><span><?php echo $data['Name']; ?></strong>.@2024</p>

            <div class="credits">

            

            

              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </footer><!-- End  Footer -->



  <div id="preloader"></div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/vendor/typed.js/typed.umd.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>



  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>



</body>



</html>
