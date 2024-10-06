<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PUGC</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <link rel="stylesheet" href="./css/fontawesome.css" />
  <link rel="icon" href="../assets/img/android-chrome-192x192.png">
</head>

<body id="main-content">
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
      <a href="index.html" class="navbar-brand">
        <img
          src="./assets/img/android-chrome-512x512.png"
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
              id="offcanvasDepartmentsDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Departments
            </a>
            <ul
              class="dropdown-menu"
              aria-labelledby="offcanvasDepartmentsDropdown">
              <li><a class="dropdown-item" href="./views/departments/bbf.html">Banking & Finance</a></li>
              <li>
                <a class="dropdown-item" href="./views/departments/bba.html">Business Administration</a>
              </li>
              <li><a class="dropdown-item" href="./views/departments/commerce.html">Commerce</a></li>
              <li>
                <a class="dropdown-item" href="./views/departments/english.html">English Language & Lit.</a>
              </li>
              <li>
                <a class="dropdown-item" href="./views/departments/it.html">Information Technology</a>
              </li>
              <li><a class="dropdown-item" href="./views/departments/law.html">Law</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./views/events.html" class="nav-link fw-semibold">Events</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="./views/about.php" class="nav-link fw-semibold">About us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-semibold">Downloads</a>
          </li>
          <li class="nav-item">
            <a href="./views/notices.html" class="nav-link fw-semibold">Notice Board</a>
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
      <a href="index.html" class="offcanvas-title" id="offcanvasNavbarLabel"></a>
      <img
        class="bg-transparent"
        src="./assets/img/android-chrome-512x512.png"
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
            id="offcanvasDepartmentsDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Departments
          </a>
          <ul
            class="dropdown-menu"
            aria-labelledby="offcanvasDepartmentsDropdown">
            <li><a class="dropdown-item" href="./views/departments/bbf.html">Banking & Finance</a></li>
            <li>
              <a class="dropdown-item" href="./views/departments/bba.html">Business Administration</a>
            </li>
            <li><a class="dropdown-item" href="./views/departments/commerce.html">Commerce</a></li>
            <li>
              <a class="dropdown-item" href="./views/departments/english.html">English Language & Lit.</a>
            </li>
            <li>
              <a class="dropdown-item" href="./views/departments/it.html">Information Technology</a>
            </li>
            <li><a class="dropdown-item" href="./views/departments/law.html">Law</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="./views/events.html" class="nav-link fw-semibold">Events</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Gallery</a>
        </li>
        <li class="nav-item">
          <a href="./views/about.php" class="nav-link fw-semibold">About us</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-semibold">Downloads</a>
        </li>
        <li class="nav-item">
          <a href="./views/notices.html" class="nav-link fw-semibold">Notices</a>
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
    <!-- Hero Start -->
    <div class="hero d-flex align-items-center mt-5 py-5 ">
      <div class="overlay-home w-100 d-flex align-items-center justify-content-center">
        <div class="container-fluid">
          <div class="row">
            <!-- Main Content Column -->
            <div class="col-md-8">
              <div class="text-start px-3">
                <h1 class="display-5 fw-bold">
                  Unlock Your Future with Quality Education
                </h1>
                <p class="lead">
                  Join us in a journey of knowledge, innovation, and success.
                </p>
                <a href="#programs" class="btn btn-light btn-outline-primary px-3 py-2 fw-bold">
                  Explore Programs
                </a>
              </div>
            </div>

            <!-- Admissions Information Column -->
            <div class="col-md-4 mt-4 mt-md-0">
              <div class="card" style="background-color: rgba(0, 0, 0, 0.7)">
                <div class="card-body text-light">
                  <h5 class="card-title">Admissions Open</h5>
                  <p class="card-text">
                    Get ready to be a part of one of the leading educational institutions. Admissions for Fall 2024 are now open!
                  </p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent text-light">Application Deadline: October 31, 2024</li>
                    <li class="list-group-item bg-transparent text-light">Entrance Test: November 15, 2024</li>
                    <li class="list-group-item bg-transparent text-light">Start Date: December 1, 2024</li>
                  </ul>
                  <a href="#admissions" class="btn btn-primary mt-3">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero End -->

    <!-- Message Start -->

    <div class="container mt-5 py-5">
      <h2 class="text-start text-muted fw-bolder">
        Messages from Leadership
      </h2>
      <hr class="custom-hr" />
      <div class="row">
        <!-- Vice Chancellor Message Card -->
        <div class="col-md-6 mb-4">
          <div class="card h-100 bg-light rounded-4 shadow-lg border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./assets/img/team/vc.jpg"
                  class="img-fluid rounded-start h-100 w-100"
                  style="object-fit: cover"
                  alt="Vice Chancellor" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">
                    Message from the Vice Chancellor
                  </h5>
                  <p class="card-text">
                    Welcome to our university! We are committed to providing
                    a high-quality education that empowers our students to
                    excel in their chosen fields. Our faculty is dedicated
                    to fostering a supportive and innovative learning
                    environment, and we encourage all students to actively
                    engage in their academic and extracurricular pursuits.
                    Together, let us strive for excellence and make the most
                    of your university experience.
                  </p>
                  <p class="text-muted">- Dr. [Vice Chancellor's Name]</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Director General Message Card -->
        <div class="col-md-6 mb-4">
          <div class="card h-100 bg-light rounded-4 shadow-lg border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="./assets/img/team/dg.jpg"
                  class="img-fluid rounded-start h-100 w-100"
                  style="object-fit: cover"
                  alt="Director General" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">
                    Message from the Director General
                  </h5>
                  <p class="card-text">
                    As you embark on your academic journey, remember that
                    the university is here to support you every step of the
                    way. We offer a range of resources and opportunities
                    designed to enhance your educational experience and
                    prepare you for a successful future. Embrace the
                    challenges ahead, stay curious, and never hesitate to
                    reach out for guidance and support.
                  </p>
                  <p class="text-muted">
                    - Prof. [Director General's Name]
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Message End -->
    <!-- Why us -->
    <div class="container py-5 mt-5">
      <div class="text-center">
        <h3 class="section-title bg-white text-center text-primary px-3">Why Choose Us</h3>
        <h4 class="display-4 mb-5">Qualities PUGC Provides</h4>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-graduation-cap fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Quality Education</h5>
              <p class="card-text">PUGC offers top-tier education with highly qualified faculty and a wide range of undergraduate and graduate programs.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-building fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Modern Infrastructure</h5>
              <p class="card-text">Our campus is equipped with state-of-the-art facilities, including modern labs, libraries, and sports complexes.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-briefcase fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Career Opportunities</h5>
              <p class="card-text">We provide excellent career counseling, internship opportunities, and connections with leading companies to boost your career.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-globe fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Global Recognition</h5>
              <p class="card-text">Degrees from PUGC are globally recognized, opening up opportunities for further education and career abroad.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-users fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Student Community</h5>
              <p class="card-text">A diverse and vibrant student community, with numerous clubs and activities to engage in beyond academics.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 bg-light text-center">
            <div class="card-body">
              <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Scholarship Programs</h5>
              <p class="card-text">PUGC offers a variety of scholarships and financial aid programs to help support deserving students.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container bg-light border-0">
      <div class="row py-5">
        <div class="col-md-6">
          <img src="./assets/img/bg/old-campus-bg.jpg" alt="NTU Building" class="img-fluid rounded-3 shadow-lg">
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h2 class="fw-bold">Why Choose PUGC?</h2>
              <p class="lead">We empower our students to achieve their aspirations and unlock their full potential.</p>
              <p class="lead">Blending academic excellence with a vibrant campus life and countless opportunities for personal growth and unforgettable memories, we offer a student experience like no other.</p>
            </div>
            <div class="col-md-6">
              <div class="row">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-transparent">
                    <h4 class="fs-5 fw-bold">Top 10 in the PK</h4>
                    <p>Ranked 10th in the PK (Uni Compare 2024).</p>
                  </li>
                  <li class="list-group-item bg-transparent">
                    <h4 class="fs-5 fw-bold">Why PUGC?</h4>
                    <p>An Incredible place to study</p>
                  </li>
                  <li class="list-group-item bg-transparent">
                    <h4 class="fs-5 fw-bold">Our Employability Promise</h4>
                    <p>Employability support even after you graduate.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- why us end -->


    <!-- Use full Links -->
    <div class="container mt-5 py-5">
      <h4 class="display-4 text-center mb-4">University Highlights</h4>
      <div class="row">
        <!-- Facilities Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 position-relative bg-light">
            <img
              src="./assets/img/bg/facilities.jpg"
              class="card-img-top"
              alt="Facilities" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Facilities</h5>
              <p class="card-text">
                Explore our state-of-the-art facilities including libraries,
                labs, and study spaces.
              </p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Events Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 position-relative bg-light">
            <img
              src="./assets/img/bg/events.jpg"
              class="card-img-top"
              alt="Events" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Events</h5>
              <p class="card-text">
                Stay updated with upcoming events, workshops, and seminars
                happening at the university.
              </p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Gallery Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 position-relative bg-light">
            <img
              src="./assets/img/bg/gallery.jpg"
              class="card-img-top"
              alt="Gallery" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Gallery</h5>
              <p class="card-text">
                View photos and videos showcasing campus life and student
                activities.
              </p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Programs Card -->
        <div class="col-md-3 mb-4">
          <div class="card h-100 position-relative bg-light">
            <img
              src="./assets/img/bg/programs.jpg"
              class="card-img-top"
              alt="Programs" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Programs</h5>
              <p class="card-text">
                Discover the various academic programs and courses offered by
                our university.
              </p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- use full links end -->

    <!-- Form -->
    <div class="container mt-5 py-5">

      <div class="row">
        <div class="col-md-5">
          <h5 class="display-4">Lets Connect</h5>
          <p class="lead">Feel free to reach out to us with any questions, comments, or concerns. We are here to help!</p>
        </div>
        <div class="col-md-7 mx-auto">
          <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
              <div class="container">
                <?php

                // Check if the form has been submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                  $connection = mysqli_connect("localhost", "root", "", "pugc") or die("Connection Failed!");

                  if (isset($_POST['send-btn'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];


                    $sql = "INSERT INTO student_inquiries (full_name, email, message)
                             VALUES ('{$name}', '{$email}', '{$message}')";

                    $result = mysqli_query($connection, $sql);
                    if ($result) {
                      echo '<script>alert("Message Sent!")</script>';
                    } else {
                      echo '<script>alert("Message failed to Sent!")</script>';
                    }
                    echo "<script type='text/javascript'>
                              window.location.href = 'http://localhost/PHP/Pugc/';
                          </script>";

                    mysqli_close($connection);

                    exit();
                  }
                }
                ?>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="contact-form" role="form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name">Full Name *</label>
                          <input id="form_name" type="text" name="name" class="form-control"
                            placeholder="Please enter your name *" required="required"
                            data-error="Firstname is required.">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Email *</label>
                          <input id="form_email" type="email" name="email" class="form-control"
                            placeholder="Please enter your email *" required="required"
                            data-error="Valid email is required.">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form_message">Message *</label>
                          <textarea id="form_message" name="message" class="form-control"
                            placeholder="Write your message here." rows="4"
                            required="required" data-error="Please, leave us a message."></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 text-start">
                        <button class="btn btn-primary mt-2 pt-2" type="submit" name="send-btn">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.8 -->
      </div>
      <!-- /.row -->
    </div>

    <!-- Form -->

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
              <a href="#" class="nav-link p-0 text-light">About Us</a>
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
              <a href="#" class="nav-link p-0 text-light">Events</a>
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

  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>