<?php
define("AppURL", "http://localhost/PHP/Pugc/");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PUGC</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/fontawesome.css" />
  <link rel="icon" href="../assets/img/android-chrome-192x192.png">
</head>

<body>
  <!-- preloader Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- preloader End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNavbar">
    <div class="container">
      <a href="../index.php" class="navbar-brand">
        <img
          src="../assets/img/android-chrome-512x512.png"
          width="60px"
          height="60px"
          alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Regular navbar for larger screens -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ms-auto text-uppercase">
          <li class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle fw-semibold"
              id="newsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              News
            </a>
            <ul class="dropdown-menu" aria-labelledby="newsDropdown">
              <li><a class="dropdown-item" href="#">Latest News</a></li>
              <li><a class="dropdown-item" href="#">Job Announcements</a></li>
              <li><a class="dropdown-item" href="#">Examination</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle fw-semibold"
              id="departmentsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu" aria-labelledby="departmentsDropdown">
              <li><a class="dropdown-item" href="./departments/bbf.html">Banking & Finance</a></li>
              <li>
                <a class="dropdown-item" href="./departments/bba.html">Business Administration</a>
              </li>
              <li><a class="dropdown-item" href="./departments/commerce.html">Commerce</a></li>
              <li>
                <a class="dropdown-item" href="./departments/english.html">English Language & Lit.</a>
              </li>
              <li>
                <a class="dropdown-item" href="./departments/it.html">Information Technology</a>
              </li>
              <li><a class="dropdown-item" href="./departments/law.html">Law</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="./events.html" class="nav-link fw-semibold">Events</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="./about.html" class="nav-link fw-semibold">About us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Downloads</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Notice Board</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Societies</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Admissions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Offcanvas menu for small screens -->
  <div
    class="offcanvas offcanvas-start"
    tabindex="-1"
    id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <a href="../index.php" class="offcanvas-title" id="offcanvasNavbarLabel"></a>
      <img
        class="bg-transparent"
        src="../assets/img/android-chrome-192x192.png"
        width="60px"
        height="60px"
        alt="" />
      </a>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav flex-grow-1 text-uppercase">
        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle fw-semibold"
            id="offcanvasNewsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            News
          </a>
          <ul class="dropdown-menu" aria-labelledby="offcanvasNewsDropdown">
            <li><a class="dropdown-item" href="#">Latest News</a></li>
            <li><a class="dropdown-item" href="#">Job Announcements</a></li>
            <li><a class="dropdown-item" href="#">Examination</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle fw-semibold"
            id="departmentsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Departments
          </a>
          <ul class="dropdown-menu" aria-labelledby="departmentsDropdown">
            <li><a class="dropdown-item" href="./departments/bbf.html">Banking & Finance</a></li>
            <li>
              <a class="dropdown-item" href="./departments/bba.html">Business Administration</a>
            </li>
            <li><a class="dropdown-item" href="./departments/commerce.html">Commerce</a></li>
            <li>
              <a class="dropdown-item" href="./departments/english.html">English Language & Lit.</a>
            </li>
            <li>
              <a class="dropdown-item" href="./departments/it.html">Information Technology</a>
            </li>
            <li><a class="dropdown-item" href="./departments/law.html">Law</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="./events.html" class="nav-link fw-semibold">Events</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link fw-semibold">Gallery</a>
        </li>
        <li class="nav-item">
          <a href="./about.php" class="nav-link fw-semibold">About us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Downloads</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Notice Board</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Societies</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Admissions</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Main Section Start -->
  <main>
    <div class="container my-5 py-5">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4 fw-bold text-primary">About Us</h1>
          <p class="lead">
            The University of the Punjab, Gujranwala Campus is a public research
            university located in Gujranwala, Punjab, Pakistan. The university
            is ranked among the top universities in Pakistan and is known for
            its research and academic programs.
          </p>
          <p>
            The university offers a wide range of undergraduate and graduate
            programs in various disciplines including Business Administration,
            Banking & Finance, Commerce, English Language & Literature,
            Information Technology, and Law.
          </p>
          <p>
            The university is also known for its research and development
            programs. The university has a number of research centers and
            institutes that are engaged in cutting-edge research in various
            fields.
          </p>
          <p>
            The university is committed to providing quality education to its
            students and preparing them for the challenges of the future. The
            university has a highly qualified faculty that is dedicated to
            providing the best possible education to its students.
          </p>
        </div>
        <div class="col-md-6">
          <img
            src="../assets/img/bg/old-campus-bg.jpg"
            alt="About Us"
            class="img-fluid rounded" />
        </div>
      </div>
    </div>

    <!-- team -->
    <div class="container py-5 mt-5">
      <div class="text-center">
        <h5 class="section-title bg-white text-center text-primary px-3">Departments</h5>
        <h6 class="display-6 mb-5">Our Team</h6>
      </div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="faculty-tab" data-bs-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="true">Faculty</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="administration-tab" data-bs-toggle="tab" href="#administration" role="tab" aria-controls="administration" aria-selected="false">Administration</a>
        </li>
      </ul>

      <!-- Tab content -->
      <div class="tab-content mt-3" id="myTabContent">
        <!-- Faculty Tab -->
        <div class="tab-pane fade show active" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
          <div class="row g-4">

            <?php

            $connection = mysqli_connect("localhost", "root", "", "pugc") or die("Connection Failed!");

            $sql = "SELECT * FROM faculty";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <div class="col-lg-3 col-md-6">
                  <div class="card bg-light card-hover h-100">
                    <img class="card-img-top instructor-image" src="<?php echo AppURL . $row['image'] ?>" alt="<?php echo $row['name'] ?>">
                    <div class="card-body text-center">
                      <h5 class="card-title fw-bold"><?php echo $row['name'] ?></h5>
                      <small class="text-muted"><?php echo $row['designation'] ?></small>
                      <div class="mt-3">
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            }
            ?>

          </div>

        </div>

        <!-- Administration Tab -->
        <div class="tab-pane fade" id="administration" role="tabpanel" aria-labelledby="administration-tab">
          <div class="row g-4">

            <?php

            $connection = mysqli_connect("localhost", "root", "", "pugc") or die("Connection Failed!");

            $sql = "SELECT * FROM administration";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <div class="col-lg-3 col-md-6">
                  <div class="card bg-light card-hover h-100">
                    <img class="card-img-top instructor-image" src="<?php echo AppURL . $row['image'] ?>" alt="<?php echo $row['name'] ?>">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $row['name'] ?></h5>
                      <p class="text-muted"><?php echo $row['designation'] ?></p>
                      <div class="mt-3">
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm mx-1" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
              }
            }

            mysqli_close($connection);
            ?>


          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Main Section End -->

  <!-- Footer start  -->
  <footer class="py-5 text-bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-light">Academics</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Programs</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Admissions</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Scholarships</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">FAQs</a>
            </li>
            <li class="nav-item mb-2">
              <a href="./about.php" class="nav-link p-0 text-light">About Us</a>
            </li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-light">Research</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Projects</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Publications</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Collaborations</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Funding</a>
            </li>
            <li class="nav-item mb-2">
              <a href="./events.html" class="nav-link p-0 text-light">Events</a>
            </li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-light">Campus Life</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Clubs & Societies</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Sports</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Health & Wellness</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Housing</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-light">Dining</a>
            </li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5 class="text-light">Subscribe to our Newsletter</h5>
            <p class="text-light">
              Stay updated with the latest news and events from our
              university.
            </p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input
                id="newsletter1"
                type="text"
                class="form-control"
                placeholder="Email address" />
              <button
                class="btn btn-dark btn-outline-light py-2 fw-bold"
                type="button">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>

      <div
        class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p class="text-light">
          &copy; 2024 University of the Punjab, Gujranwala. All rights
          reserved.
        </p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3">
            <a class="link-body-emphasis text-light" href="#">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <path
                  d="M23.643 4.937a10.004 10.004 0 01-2.828.775 4.92 4.92 0 002.165-2.724 9.933 9.933 0 01-3.127 1.195 4.93 4.93 0 00-8.394 4.482A13.975 13.975 0 011.64 3.15a4.93 4.93 0 001.523 6.573 4.898 4.898 0 01-2.224-.616v.061a4.93 4.93 0 003.946 4.826 4.935 4.935 0 01-2.21.084 4.93 4.93 0 004.601 3.417A9.867 9.867 0 010 19.54a13.93 13.93 0 007.548 2.209c9.055 0 14.008-7.493 14.008-13.986 0-.213-.005-.426-.014-.637A10.014 10.014 0 0023.643 4.937z" />
              </svg>
            </a>
          </li>
          <li class="ms-3">
            <a class="link-body-emphasis text-light" href="#">
              <svg class="bi" width="24" height="24" fill="currentColor">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12c0 5.09 3.8 9.28 8.74 9.88V15.89h-2.63V12h2.63V9.64c0-2.5 1.48-3.88 3.73-3.88 1.08 0 2.19.2 2.19.2v2.41h-1.23c-1.2 0-1.57.75-1.57 1.53V12h2.66l-.43 3.89h-2.23V21.88C18.2 21.28 22 17.09 22 12c0-5.52-4.48-10-10-10z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>