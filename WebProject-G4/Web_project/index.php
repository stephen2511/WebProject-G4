<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZenBlog</h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="recipe_breakfast.php">Breakfast</a></li>
              <li><a href="recipe_lunch.php">Lunch</a></li>
              <li><a href="recipe_dinner.php">Dinner</a></li>
              <li><a href="recipe_supper.php">Supper</a></li>
            </ul>
          </li>
          <li><a href="recipe_video.php">Videos</a></li>
          <li><a href="qrGenerate.php">QR Code</a></li>
          <li><a href="a_login.php">Admin</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
  <?php include 'db.php';?>
  
    <!-- ======= Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Everday Food</h2>
          <div><a href="recipe_all.php" class="more">See All Recipe</a></div>
        </div>

    <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <?php $sql = "SELECT * FROM content WHERE id='1'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
              <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="https://www.delish.com/" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
              <h2><a href="#"><?php echo $row['name']; ?></a></h2>
              <p class="mb-4 d-block"><?php echo $row['description']; ?></p>
            </div>
              <?php }?>
          </div>

          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                <?php $sql = "SELECT * FROM content WHERE id='8'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="https://www.delish.com/" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                <div class="post-entry-1">
                <?php $sql = "SELECT * FROM content WHERE id='2'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="https://www.delish.com/" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>
                
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                <?php $sql = "SELECT * FROM content WHERE id='3'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="https://www.delish.com/" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>


                <div class="post-entry-1">
                <?php $sql = "SELECT * FROM content WHERE id='4'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="https://www.delish.com/" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>
                
              </div>
              
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='5'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2> 
                </div>
                <?php }?>

                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='6'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='7'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='9'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='10'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                <div class="post-entry-1 border-bottom">
                <?php $sql = "SELECT * FROM content WHERE id='11'";
                    $sql_run = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($sql_run)){?> 
                  <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
                  <h2 class="mb-2"><a href="#"><?php echo $row['name']; ?></a></h2>
                </div>
                <?php }?>

                </div>

              </div>
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section><!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>