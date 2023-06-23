<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Breakfast Recipes</title>
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

   <!-- Google Fonts -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    h6.text-rating {
      font-size: 0.6em;
    }

    hr { 
  display: block;
  margin-top: 0.6em;
  margin-bottom: 0.10em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
}
  </style>

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
          <li><a href="index.php">Home</a></li>
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

    <section class="single-post-content">
      <div class="container">
      <h1 style="text-align: center;">Breakfast Recipe</h1>
      <div class="section-header d-flex justify-content-between align-items-center mb-5" >
        </div>
        <div class="row">
          <div class="col-md-13 post-content" data-aos="fade-up">
            <?php
            include 'db.php';
            $sql = "SELECT * FROM content where category_id='breakfast'";
            $sql_run = mysqli_query($conn, $sql);
            while($row= mysqli_fetch_array($sql_run)){
               ?>

            <!-- ======= Single Post Content ======= -->
            
        <div class="single-post">
          <div class="post-meta"><span class="date"><?php echo $row['category_id']; ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date_time']; ?></span></div>
            <div class="mb-4">
               <h1><?php echo $row['name']; ?></h1>
               <p style="font-style: italic;"><?php echo $row['description']; ?></p>
             </div>
             <div class="mb-4">
              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" alt="" class="img-fluid">
            </div>
              <div class="mb-4">
              <label ><h4>Ingredients</h4></label>
              <p style="text-align: justify;"><?php echo $row['ingredient']; ?></p>
             
            
            <label> <h4>Instruction</h4></label>
              <p style="text-align: justify;"><?php echo $row['direction']; ?></p>
            </div>
              <hr>
              <?php }?>
              
            </div><!-- End Single Post Content -->
            
            </div>
           
            <!-- ======= start of Comments ======= -->
            <section class="single-post-content">
            <div class="container">
            <div class="row">
            <div class="col-md-13 post-content" data-aos="fade-up">
            <?php 
               include 'db.php';

                $sql = "SELECT * FROM comment ORDER BY c_id DESC";

                $result  = $conn->query($sql);
                $countRows = $result->num_rows;                
            ?>

            <!-- ======= Comments ======= -->
            <div class="comments">
                <?php 
                    if ($result->num_rows > 0) {
                        echo '<h5 class="comment-title py-4"> '.$countRows.' Comments</h5>';
    
                        while ($row = $result->fetch_assoc()) {
                          
                          // remove millisecond from the time
                          $date = $row["date_time"];                  
                          $split = explode(' ', $date);                  
                          $time = explode(':', $split[1]);
                          $newDate = $split[0] . " " . $time[0] . ":" . $time[1];

                            echo '
                              <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                  <div class="avatar avatar-sm rounded-circle">
                                    <img class="avatar-img" src="assets/img/unknown.jpg" alt="" class="img-fluid">
                                  </div>
                                </div>
                                
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                  <div class="comment-meta d-flex align-items-baseline">
                                    <h6 class="me-2">'.$row["comment_name"].'</h6>
                                    <span class="text-muted" id="splitDate">
                                    
                                    '.$newDate.'
                                    
                                    </span>
                                  </div>
                                  <div class="comment-body">';
                                  
                                  if($row["rating"] == "1"){
                                    echo '
                                      <h6 class="text-rating">
                                        <i class="fa-solid fa-star"></i>
                                      </h6>';
                                  } else if ($row["rating"] == "2") {
                                    echo '
                                      <h6 class="text-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                      </h6>';
                                  } else if ($row["rating"] == "3") {
                                    echo '
                                      <h6 class="text-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                      </h6>';
                                  } else if ($row["rating"] == "4") {
                                    echo '
                                      <h6 class="text-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                      </h6>';
                                  } else if ($row["rating"] == "5") {
                                    echo '
                                      <h6 class="text-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                      </h6>';
                                  } else {
                                    echo '
                                      <h6 class="text-rating">0 Rating</h6>';
                                  } 

                                  echo '
                                  '.$row["comment"].'
                                  </div>
                                </div>
                              </div>';
                        }
    
                    } else {
                        echo '0 result';
                    }
                ?>
                
            </div><!-- End Comments -->

            <!-- ======= Comments Form ======= -->
            <form action="submitComments.php" method="post">
              <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                  <h5 class="comment-title">Leave a Comment</h5>
                  <div class="row">
                    
                    <div class="col-lg-6 mb-3">
                      <label for="comment-name">Name</label>
                      <input type="text" name="comment-name" class="form-control" id="comment-name" placeholder="Enter your name" required>
                    </div>

                    <div class="col-12 mb-3">
                      <label for="comment-message">Comment</label>
                      <textarea class="form-control" name="comment" id="comment-message" placeholder="Enter your name" cols="30" rows="10" required></textarea>
                    </div>

                    <div class="col-12 mb-3">
                     <p id="message">Rate Your Experience</p>
                      <div class="container">
                        <div class="star-container inactive">
                          <i class="fa-regular fa-star"></i>
                          <span class="number">1</span>
                        </div>

                        <div class="star-container inactive">
                          <i class="fa-regular fa-star"></i>
                          <span class="number">2</span>
                        </div>

                        <div class="star-container inactive">
                          <i class="fa-regular fa-star"></i>
                          <span class="number">3</span>
                        </div>

                        <div class="star-container inactive">
                          <i class="fa-regular fa-star"></i>
                          <span class="number">4</span>
                        </div>

                        <div class="star-container inactive">
                          <i class="fa-regular fa-star"></i>
                          <span class="number">5</span>
                        </div>
                        <input type="text" name="rating-value" id="ratingValue" style="display: none">
                      </div>
                  </div>
                    

                    <div class="col-12 md">
                      <input type="submit" class="btn btn-primary" name="submitBtn" id="submit1" value="Post comment" disabled>
                    </div>

                  </div>
                </div>
              </div>
            </form><!-- End Comments Form -->

            <!-- Code for rating -->
            <?php 
              echo '<script type="text/javascript">
              let starContainer = document.querySelectorAll(".star-container");
              const submitButton = document.querySelector("#submit1");
              const message = document.querySelector("#message");
              let activeElements = document.getElementsByClassName("active1");
              var vocal = document.getElementById("ratingValue");
              
              //Events For touch and mouse
              let events = {
                mouse: {
                  over: "click",
                },
                touch: {
                  over: "touchstart",
                },
              };
              
              let deviceType = "";
              //Detect touch device
              const isTouchDevice = () => {
                try {
                  //We try to create TouchEvent (it would fail for desktops and throw error)
                  document.createEvent("TouchEvent");
                  deviceType = "touch";
                  return true;
                } catch (e) {
                  deviceType = "mouse";
                  return false;
                }
              };
              
              isTouchDevice();
              
              starContainer.forEach((element, index) => {
                element.addEventListener(events[deviceType].over, () => {
                  // submitButton.disabled = false;
                  if (element.classList.contains("inactive")) {
                    //Fill Star
                    ratingUpdate(0, index, true);
                  } else {
                    //Regular stars (remove color)
                    ratingUpdate(index, starContainer.length - 1, false);
                  }
                });
              });
              
              const ratingUpdate = (start, end, get_active) => {
                for (let i = start; i <= end; i++) {
                  if (get_active) {
                    starContainer[i].classList.add("active1");
                    starContainer[i].classList.remove("inactive");
                    starContainer[i].firstElementChild.className = "fa-star fa-solid";
                  } else {
                    starContainer[i].classList.remove("active1");
                    starContainer[i].classList.add("inactive");
                    starContainer[i].firstElementChild.className = "fa-star fa-regular";
                  }
                }
                //Message
                if (activeElements.length > 0) {
                  switch (activeElements.length) {
                    case 1:
                      message.innerText = "Terrible";
                      submitButton.disabled = false;
                      break;
                    case 2:
                      message.innerText = "Bad";
                      submitButton.disabled = false;
                      break;
                    case 3:
                      message.innerText = "Satisfied";
                      submitButton.disabled = false;
                      break;
                    case 4:
                      message.innerText = "Good";
                      submitButton.disabled = false;
                      break;
                    case 5:
                      message.innerText = "Excellent";
                      submitButton.disabled = false;
                      break;
                  }
                  vocal.value = activeElements.length;
                  
                } else {
                  message.innerText = "Rate Your Experience";
                  submitButton.disabled = true;
                }
              };
              
              </script>';
               ?>

          </div>
          </div>
        </div>
      </div>
    </section>
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