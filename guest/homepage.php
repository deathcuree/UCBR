<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UniverCity Belt Residences</title>
    <link rel="shortcut icon" href="" />

    <!-- Link Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="http://fonts.cdnfonts.com/css/sf-pro-display"
      rel="stylesheet"
    />

    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/styles.css" />

  <body>

    <!-- Start Navigation -->
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Navbar brand -->
            <a class="navbar-brand" href="#" role="button"
            data-toggle="collapse">
              <img src="./images/ucbr_logo.png" alt="logo">
            </a>

          <!-- Toggle button -->
          <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
            <i class="fa fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-sm-1 mb-md-2 mb-lg-0">
              <!-- Link -->
              <li class="nav-item mx-auto"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item mx-auto"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item mx-auto"><a class="nav-link" href="#">Services</a></li>
              <li class="nav-item mx-auto"><a class="nav-link" href="#">Contact</a></li>
              <li class="nav-item mx-auto "><a class="nav-link" href="#">Reserve</a></li>
              
            </ul>

            <!-- Login Button -->
            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-primary btn-sm">
                Sign in
              </button>
            </div>
          </div>
        </div>
      </nav>
            
    <!-- Container wrapper -->
      <!-- Navbar -->
    <!-- End Navigation -->

    <!-- Start of Background 1 -->
    <section>
        <!-- Background image -->
        <div id="intro" class="hero">
          <img class="img-fluid" src="images/background1.jpg" alt="ucbr"  />
              <div class="pt-2 pb-2 col-md-4 mt-sm-3 mt-md-4 mt-lg-5 text-sm-start">We've got it all for you!</div>
              <p class="font col-md-4 mt-sm-3 mt-md-4 mt-lg-5"><br><br>Are you looking for a second home in Manila?</p>
              <p class="font_two col-md-4 mt-sm-3 mt-md-4 mt-lg-5"><br><br><br>Let yourself be guided by our selection of rooms<br>dedicated to our furnished rentals.</p>
        </div>
        <!-- End of Background image -->

        <!-- Search form -->
          <div class="container ms-auto my-auto col-sm-2 col-md3 col-lg-6 col-11 ">
            <div class="col-8">
              <div class="input-group ps-5">

                <div id="search-autocomplete" class="form-outline col-md-3 col-lg-6 pt-md-5">
                  <input type="search-focus" id="form1" class="form-control" placeholder="Search" />
                  <label class="form-label" for="form1"></label>
                </div>

                <div class="justify-content-center">
                  <button type="button" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>  
                
              </div>
            </div>
          </div>
        <!-- End of Search Form -->
      </section>
    <!-- End of Background 1 -->

    <!-- Start of Room Section -->
    <section>
      <div class="Apartment-Deals p-5">
        <h1 class="fw-bold fs-5=6 mb-4">Room Reservation Deals</h1>
        <div class="row">
            <!-- First column -->
                  <div class="col-sm text-center">
                      <div class="card mb-3">
                        <img src="images/room1.jpg" class="card-img-top" alt="image1">
                            <div class="card-body col-md">
                              <h5 class="card-title">Transient Reservation</h5>
                              <p class="card-text">For as low as <span>₱285.00</span> per person.</p>
                                    <a
                                    href="#"
                                    target="_blank"
                                    class="btn btn-primary btn-md text-center"
                                    >Reserve Now</a
                                    >
                            </div>
                        </div>
                    </div>

              <!-- Second column -->
              <div class="col-sm text-center">
                <div class="card mb-3">
                  <img src="images/room2.jpg" class="card-img-top" alt="image1">
                      <div class="card-body col-md">
                        <h5 class="card-title">Bedspace Reservation</h5>
                        <p class="card-text">For as low as <span>₱3,000.00</span> per person.</p>
                              <a
                              href="#"
                              target="_blank"
                              class="btn btn-primary btn-md text-center"
                              >Reserve Now</a
                              >
                      </div>
                  </div>
              </div>

              <!-- Third column -->
              <div class="col-sm text-center">
                <div class="card mb-3">
                  <img src="images/room3.jpg" class="card-img-top" alt="image1">
                      <div class="card-body col-md">
                        <h5 class="card-title">Room Reservation</h5>
                        <p class="card-text">For as low as <span>₱5,700.00</span> per room.</p>
                              <a
                              href="#"
                              target="_blank"
                              class="btn btn-primary btn-md text-center"
                              >Reserve Now</a
                              >
                      </div>
                  </div>
              </div>
        </div>
      </div>
    </section>
    <!-- End of Room Section -->

    <!-- Start of About Section -->
    <div class="container my-5">
      <div class="row py-2">
        <div class="col-lg-4 mb-4 my-lg-auto">
          <h1 class="text-dark font-weight-bold mb-3">
            About Us
          </h1>
          <p class="mb-4">
            Located at the heart of major colleges and universities in Manila. 
            UniverCity Belt Residences (UCBR) is just a walk away from your respective learning institutions.
          </p>
          <a href="#" class="btn btn-primary btn-lg"
            >Read More</a
          >
        </div>

        <div class="col-lg-8">
          <img src="images/about us.jpg" alt="Employee" class="w-100" />
        </div>
      </div>
    </div>
    <!-- End of About Section -->

    <!-- Start of Map Section -->
    <section id="map">
      <div class="mapouter">
        <div class="gmap_canvas">
        <iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=UCB%20Residences%20Building,%201985%20Recto%20Ave,%20Quiapo,%20Manila,%201008%20Metro%20Manila&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
    </section>
    <!-- End of Map Section -->

    <!-- Start Jumbotron -->
    <div class="jumbotron py-5 mb-0">
      <div class="container">
        <div class="text-center">
          <div class="row">
            <div class="col-md-7 col-lg8 col-xl-9 my-auto">
              <h4>For more inquiries, e-mail us!</h4>
            </div>

            <div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
              <a href="#" class="btn btn-primary btn-lg"
                >Send an Email</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Start of Footer -->
    <footer class="navbar-footer text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <a class="footer" href="#" role="button"
            data-toggle="collapse">
              <img class="navbar-brand-footer" src="images/logo_footer.png" alt="logo">
            </a>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="phone mb-0"><img class="phone" src="images/phone-call.png" alt="phone logo"> Contacts</h5>
  
            <ul class="list-unstyled pt-4">
              <li class="names">
                Jayrold J. +63 9123 456 7890<br>
                Aarian p.  +63 9123 456 7890<br>
                Anabelle P. +63 9123 456 7890<br>
                Richard S. +63 9123 456 7890<br>
                Mayeth B.  +63 9123 456 7890<br>
              </li>
            </ul>

            <!-- Social Media Icons -->
          <p class="pt-3">Follow us
            <a
              class="btn btn-floating"
              href="https://www.facebook.com/ucbresidences"
              role="button"
              ><img class="facebook" src="images/facebook.png" alt="facebook icon">
            </a>
          </p>
            
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <!-- Start of Language -->
      <section class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
          
        </div>
      </section>
      <!-- End of Language -->
      <!-- Copyright -->
      <div class="text-center p-3 copyright">
        Copyright © 2022 Modern World Property Management Inc. All rights reserved.
      </div>
      <!-- Copyright -->
    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap JS Bundle -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
  </head>
  </body>
</html>

<style>
@import url("http://fonts.cdnfonts.com/css/sf-pro-display");

/*-- Body Reset --*/
body {
  overflow-x: hidden;
  font-family: "SF Pro Display", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  transition: 0.2s linear;
}

html {
  scroll-padding-top: 9rem;
  scroll-behavior: smooth;
}

a {
  text-decoration: none;
}

ul {
  list-style: none;
}

/* Start of Navigation Style */
.navbar {
  background-color: #284160;
  font-size: 0.8rem;
  font-weight: 600;
  letter-spacing: 0.1rem;
  box-shadow: 0 0.5rem 0.5rem rgba(0, 0, 0, 0.1);
  z-index: 1;
}
.navbar-collapse {
  justify-content: flex-end;
}
.navbar-brand img {
  height: 3rem;
  margin: 1rem;
  margin-left: 2rem;
  cursor: pointer;
}

.navbar-toggler {
  color: #fff;
}
.nav-item {
  padding: 0.5rem;
}

.nav-link {
  color: #fff !important;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: normal;
}

.collapse {
  justify-content: center;
}
.nav-link:hover {
  color: #ffbc57 !important;
}
.btn-primary {
  background-color: #fc7716 !important;
  text-transform: uppercase;
  font-size: 0.8rem;
}
.btn-primary-1:hover {
  color: #ffbc57;
}
.btn-login {
  font-size: 0.8rem;
}

.btn-primary:hover {
  color: #ffbc57;
}

.d-flex {
  justify-content: center;
  padding-top: 1rem;
}

/* End of Navigation Style */

/* Start of Background 1 */
.hero {
  background-size: cover;
}
.img-fluid {
  opacity: 80%;
  background-size: cover;
  width: 100%;
  background-repeat: no-repeat;
}
.hero {
  position: relative;
  text-align: left;
  color: white;
}
.col-md-4 {
  position: absolute;
  color: #284160;
  font-weight: bold;
  letter-spacing: 0.01rem;
  bottom: 1rem;
  left: 2rem;
  top: 1rem;
}
.form1 {
  color: #fc7716;
}
.font {
  bottom: 1rem;
  left: 2rem;
  top: 1rem;
  font-size: 0.8rem;
}
.font_two {
  font-weight: lighter;
  bottom: 1rem;
  left: 2rem;
  top: 1rem;
  font-size: 0.8rem;
}
/* End of Background 1 */

/* Search Form */
.form-control {
  position: relative;
  display: flex;
  min-width: 100px;
  border: 1px solid grey;
  border-radius: 5px;
  outline: 0;
  background-color: #fc7716;
  border-radius: 2rem;
}
.form-label:hover {
  color: #ffbc57;
}
.input-group {
  position: absolute;
  top: 50%;
  bottom: 50%;
  margin-left: 4rem;
  transform: translateY(-50%);
  text-transform: uppercase;
  color: #fc7716;
}
.search-focus {
  position: absolute;
  top: 6px;
  left: 8px;
  width: 14px;
}
.btn {
  border-radius: 2rem;
  border-color: none;
}
.fa-search {
  position: relative;
  top: 8px;
  left: 0px;
  width: 14px;
  bottom: 50%;
  transform: translateY(-50%);
  text-transform: uppercase;
  color: #fff;
  font-size: 1rem;
}

/* About Us  */

/* Jumbotron Design */
.jumbotron {
  background-color: #41beb6;
}

/* Contact Us Design */
input[type="text"],
select,
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type="submit"] {
  background-color: #fc7716;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type="submit"]:hover {
  background-color: #ffbc57;
}

.container-contact {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer Design */
.navbar-footer {
  background-color: #284160;
  font-size: 0.8rem;
  font-weight: lighter;
  letter-spacing: 0.2rem;
  z-index: 1;
}
.navbar-brand-footer {
  width: 30%;
  height: auto;
  cursor: pointer;
  text-align: center;
}

.phone img {
  width: 5%;
  height: auto;
  color: #fc7716;
}
.names {
  text-align: left;
  padding-top: -1rem;
  font-size: smaller;
}
/* Copyright */
.copyright {
  background-color: rgba(0, 0, 0, 0.2);
  font-size: smaller;
}
.translate {
  width: 3%;
  height: auto;
  color: #fc7716;
}

/* Social Media Icons */
.btn-floating img {
  width: 8%;
  height: auto;
  cursor: pointer;
  left: -10%;
}

/* Media Queries */
@media (min-width: 576px) {
  /* Search Form */
  .form-control {
    color: #fc7716;
  }
  .input-group {
    position: absolute;
    top: 60%;
    bottom: 40%;
    margin-left: -5rem;
    transform: translateY(-50%);
    text-transform: uppercase;
    color: #fc7716;
  }
  .fa-search {
    top: 100%;
    position: relative;
    top: 8px;
    left: 0px;
    width: 14px;
    transform: translateY(-50%);
    text-transform: uppercase;
  }
}

@media (min-width: 768px) {
  /* Search Form */
  .form-control {
    color: #fc7716;
  }
  .input-group {
    position: absolute;
    top: 60%;
    bottom: 40%;
    margin-left: -5rem;
    transform: translateY(-50%);
    text-transform: uppercase;
    color: #fc7716;
  }
  .fa-search {
    top: 100%;
    position: relative;
    top: 8px;
    left: 0px;
    width: 14px;
    transform: translateY(-50%);
    text-transform: uppercase;
  }
  /* search button */
  .btn {
    top: 40%;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .d-flex {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    padding-top: 0rem;
  }
  .navbar-brand img {
    margin-left: 10px;
  }
  /* Background Image */
  .img-fluid {
    height: 80vh;
  }
  .col-md-4 {
    font-size: 1.5rem;
    left: 5rem;
  }
  .font {
    left: 5rem;
    top: 3rem;
    font-size: 1rem;
  }
  .font_two {
    bottom: 1rem;
    left: 5rem;
    top: 5rem;
    font-size: 0.8rem;
  }
  /* Search Form */
  .form-control {
    color: #fc7716;
  }
  .input-group {
    position: absolute;
    top: 60%;
    bottom: 40%;
    margin-left: -5rem;
    transform: translateY(-50%);
    text-transform: uppercase;
    color: #fc7716;
  }
  .fa-search {
    top: 100%;
    position: relative;
    top: 8px;
    left: 0px;
    width: 14px;
    transform: translateY(-50%);
    text-transform: uppercase;
  }
  /* search button */
  .btn {
    top: 40%;
  }
  /* Contact form design */

  /* footer */
  .col-lg-6 {
    text-align: left;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 2rem;
    padding-left: 2rem;
  }
  .d-flex {
    padding-right: 2rem;
    padding-left: 2rem;
    padding-top: 0rem;
  }
  .navbar-brand img {
    margin-left: 5rem;
  }
  .img-fluid {
    height: 80vh;
    width: 100%;
  }
  .col-md-4 {
    font-size: 2rem;
  }
  .font {
    font-size: 1rem;
    top: 2rem;
  }
  .font_two {
    bottom: 1rem;
    left: 5rem;
    top: 3rem;
    font-size: 0.8rem;
  }
}
</style>