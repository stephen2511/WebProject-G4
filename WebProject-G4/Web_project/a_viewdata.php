<?php
// Retrieve the admin id from the query parameters
if (isset($_GET['id'])) {
    $adminId = $_GET['id'];

    // Rest of your code to fetch and display the admin details
    // ...
    require('db.php');
    $sql = "SELECT * FROM content WHERE id = $adminId";
    $sql_run = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($sql_run);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Recipe</title>
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
          <li><a href="a_homeadmin.php">Home</a></li>
          <li><a href="a_viewComment.php">Comment</a></li>
          <li><a href="a_logout.php">Logout</a></li>
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
  <section class="category-section">
                    <div class="container px-4">
                        <div class="card mb-4">
                            <div class="container">
                        <div class="row justify-content-center">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">View Recipe</h3></div>
                                <div class="card border-0 rounded-lg mt-5">
                                    
                                    <div class="card-body">
                                    <form action="" method="POST"  enctype='multipart/form-data'>
                                        <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name" type="text" placeholder="name" value="<?php echo $row['name']; ?>"/>
                                                <label for="Name">Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="description" name="description" type="text" placeholder="description" value="<?php echo $row['description']; ?>" />
                                                <label for="Description">Description</label>
                                            </div>
                                            <label for="Ingredients">Ingredients</label>
                                            <div class="form-floating mb-3">
                                            <textarea rows = "5" cols = "147" name = "ingredients"><?php echo $row['ingredient']; ?></textarea>
                                            </div>
                                            <label for="Directions">Directions</label>
                                            <div class="form-floating mb-3">
                                            <textarea rows = "5" cols = "147" name = "direction"><?php echo $row['direction']; ?></textarea>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                <label for="Category">Category</label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                     <select name="category" id="category">
                                                     <option value="choose"><?php echo $row['category_id']; ?></option>
                                                     <option value="breakfast">Breakfast</option>
                                                     <option value="lunch">Lunch</option>
                                                     <option value="dinner">Dinner</option>
                                                     <option value="Supper">Supper</option>
                                                     </optgroup>
                                                     </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <label>Image:</label>
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <img style="width:100px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </main>
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
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>