
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="site-wrapper overflow-hidden bg-default-2">
    <!-- Header Area -->
    <header class="site-header site-header--menu-right bg-default position-fixed py-7 py-xs-0 site-header--absolute">
      <div class="container-fluid-fluid px-10">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="./index.html">
              <!-- light version logo (logo must be black)-->
              <img src="image/logo-main-black.png" alt="" class="light-version-logo default-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/logo-main-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="mobile-menu">
            <div class="navbar-nav-wrapper">
              <ul class="navbar-nav main-menu">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="drop-menu-item">
                      <a href="home-1.html">
                        Homepage 01
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-2.html">
                        Homepage 02
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-3.html">
                        Homepage 03
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Job Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="./search-grid.html">
                            Job Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-1.html">
                            Job List
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./jobdetails.html">
                            Job Details
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown21" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown21">
                        <li class="drop-menu-item">
                          <a href="./dashboard-main.html">
                            Dashboard Main
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-settings.html">
                            Settings
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-posted-applicants.html">
                            Applicants
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./dashboard-posted-jobs.html">
                            Posted Jobs
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown25g" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Candidate Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown25g">
                        <li class="drop-menu-item">
                          <a href="./candidate-profile-main.html">
                            Candidate Profile
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./candidate-profile.html">
                            Candidate Profile 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="./search-grid.html">
                            Search Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-1.html">
                            Search List 01
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./search-list-2.html">
                            Search List 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item">
                      <a href="./company-profile.html">
                        Company Profile
                      </a>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#login">
                            Sign In
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#signup">
                            Sign Up
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown26" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Essential
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown26">
                        <li class="drop-menu-item">
                          <a href="faq.html">
                            Faq
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./error-404.html">
                            404
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./pricing-page.html">
                            Pricing page
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="./contact.html">Contact</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Support</a>
                </li>
              </ul>
            </div>
            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
          </div>
          <div class="header-btn-devider ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">
            <div>
              <a href="#" class="px-3 ml-7 font-size-7 notification-block flex-y-center position-relative">
                <i class="fas fa-bell heading-default-color"></i>
                <span class="font-size-3 count font-weight-semibold text-white bg-primary circle-24 border border-width-3 border border-white">3</span>
              </a>
            </div>
            <div>
              <div class="dropdown show-gr-dropdown py-5">
                <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="circle-40">
                    <img src="./image/header-profile.png" alt="">
                  </div>
                  <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                </a>
                <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="dashboard-settings.html">Settings </a>
                  <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="candidate-profile-main.html">Edit Profile</a>
                  <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#">Log Out</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Mobile Menu Hamburger-->
          <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
            <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    
        <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog max-width-px-840 position-relative">
            <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="fas fa-times"></i></button>
            <div class="login-modal-main bg-white rounded-8 overflow-hidden">
              <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                  <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                    <div class="pb-9">
                      <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                        Welcome Back
                      </h3>
                      <p class="mb-0 font-size-4 text-white">Log in to continue your account
                        and explore new jobs.</p>
                    </div>
                    <div class="border-top border-default-color-2 mt-auto">
                      <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                        <div class="pt-5 px-9">
                          <h3 class="font-size-7 text-white">
                            295
                          </h3>
                          <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                            posted today</p>
                        </div>
                        <div class="pt-5 px-9">
                          <h3 class="font-size-7 text-white">
                            14
                          </h3>
                          <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                            registered</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-6">
                  <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                    <div class="row">
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with LinkedIn</span></a>
                      </div>
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Google</span></a>
                      </div>
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Facebook</span></a>
                      </div>
                    </div>
                    <div class="or-devider">
                      <span class="font-size-3 line-height-reset ">Or</span>
                    </div>
                    <form action="/">
                      <div class="form-group">
                        <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                      </div>
                      <div class="form-group">
                        <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                        <div class="position-relative">
                          <input type="password" class="form-control" id="password" placeholder="Enter password">
                          <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                        </div>
                      </div>
                      <div class="form-group d-flex flex-wrap justify-content-between">
                        <label for="terms-check" class="gr-check-input d-flex  mr-3">
                          <input class="d-none" type="checkbox" id="terms-check">
                          <span class="checkbox mr-5"></span>
                          <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember password</span>
                        </label>
                        <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                      </div>
                      <div class="form-group mb-8">
                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                      </div>
                      <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Sign Up Modal -->
        <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog max-width-px-840 position-relative">
            <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
            <div class="login-modal-main bg-white rounded-8 overflow-hidden">
              <div class="row no-gutters">
                <div class="col-lg-5 col-md-6">
                  <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                    <div class="pb-9">
                      <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                        Create a free account today
                      </h3>
                      <p class="mb-0 font-size-4 text-white">Create your account to continue
                        and explore new jobs.</p>
                    </div>
                    <div class="border-top border-default-color-2 mt-auto">
                      <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                        <div class="pt-5 px-9">
                          <h3 class="font-size-7 text-white">
                            295
                          </h3>
                          <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                            posted today</p>
                        </div>
                        <div class="pt-5 px-9">
                          <h3 class="font-size-7 text-white">
                            14
                          </h3>
                          <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                            registered</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-6">
                  <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                    <div class="row">
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from LinkedIn</span></a>
                      </div>
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                      </div>
                      <div class="col-4 col-xs-12">
                        <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                      </div>
                    </div>
                    <div class="or-devider">
                      <span class="font-size-3 line-height-reset">Or</span>
                    </div>
                    <form action="/">
                      <div class="form-group">
                        <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com" id="email2">
                      </div>
                      <div class="form-group">
                        <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                        <div class="position-relative">
                          <input type="password" class="form-control" id="password2" placeholder="Enter password">
                          <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password23" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                        <div class="position-relative">
                          <input type="password" class="form-control" id="password23" placeholder="Enter password">
                          <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password23"></a>
                        </div>
                      </div>
                      <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                        <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                          <input class="d-none" type="checkbox" id="terms-check2">
                          <span class="checkbox mr-5"></span>
                          <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="" class="text-primary">Terms & Conditions</a></span>
                        </label>
                        <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                      </div>
                      <div class="form-group mb-8">
                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                      </div>
                      <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="dashboard-sidebar-wrapper pt-11" id="sidebar">
      <div class="brand-logo px-11">
        <a href="https://shade.uxtheme.net/shade-pro">
          <img src="image/logo-main-black.png" alt="">
        </a>
      </div>
      <div class="my-15 px-11">
        <a href="#" class="btn btn-primary btn-xl w-100 text-uppercase"><span class="mr-5 d-inline-block">+</span>Post a new job</a>
      </div>
      <ul class="list-unstyled dashboard-layout-sidebar">
        <li class="active"><a href="./dashboard-main.html" class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i class="icon icon-layout-11 mr-7"></i>Dashboard</a></li>
        <li class=""><a href="dashboard-posted-jobs.html" class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i class="fas fa-briefcase mr-7"></i>Posted Jobs</a></li>
        <li class=""><a href="dashboard-posted-applicants.html" class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i class="fas fa-user mr-7"></i>Applicants <span class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center">14</span></a></li>
        <li class=""><a href="./dashboard-settings.html" class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i class="fas fa-cog mr-7"></i>Settings</a></li>
      </ul>
    </div>
    <a class="sidebar-mobile-button" data-toggle="collapse" href="#sidebar" role="button" aria-expanded="false" aria-controls="sidebar">
      <i class="icon icon-sidebar-2"></i>
    </a>
    <div class="dashboard-main-container mt-25 mt-lg-31" id="dashboard-body">
      <div class="container">
        <div class="row mb-7">
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">
            <!-- Single Category -->
            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
              <div class="text-blue bg-blue-opacity-1 circle-56 font-size-6 mr-7">
                <i class="fas fa-briefcase"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">05</span></h5>
                <p class="font-size-4 font-weight-normal text-gray mb-0">Posted Jobs</p>
              </div>
            </a>
            <!-- End Single Category -->
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">
            <!-- Single Category -->
            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
              <div class="text-pink bg-pink-opacity-1 circle-56 font-size-6 mr-7">
                <i class="fas fa-user"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">256</span></h5>
                <p class="font-size-4 font-weight-normal text-gray mb-0">Total Applicants</p>
              </div>
            </a>
            <!-- End Single Category -->
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">
            <!-- Single Category -->
            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
              <div class="text-orange bg-orange-opacity-1 circle-56 font-size-6 mr-7">
                <i class="fas fa-eye"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">16.5</span>K</h5>
                <p class="font-size-4 font-weight-normal text-gray mb-0">Jobs View</p>
              </div>
            </a>
            <!-- End Single Category -->
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">
            <!-- Single Category -->
            <a href="#" class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
              <div class="text-egg-blue bg-egg-blue-opacity-1 circle-56 font-size-6 mr-7">
                <i class="fas fa-mouse-pointer"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1"><span class="counter">18.6</span>%</h5>
                <p class="font-size-4 font-weight-normal text-gray mb-0">Applied Rate</p>
              </div>
            </a>
            <!-- End Single Category -->
          </div>
        </div>
        <div class="mb-14">
          <div class="row mb-11 align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <h3 class="font-size-6 mb-0">Applicants List (12)</h3>
            </div>
            <div class="col-lg-6">
              <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                <p class="font-size-4 mb-0 mr-6 py-2">Filter by Job:</p>
                <div class="h-px-48">
                  <select name="country" id="country" class="nice-select pl-7 h-100 arrow-3 arrow-3-black min-width-px-273 font-weight-semibold text-black-2">
                    <option value="" data-display="Product Designer">Product Designer</option>
                    <option value="">Graphics Designer</option>
                    <option value="">Web Deverloper</option>
                    <option value="">Front End Developer</option>
                    <option value="">Backend Developer</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white shadow-8 pt-7 rounded pb-8 px-11">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="pl-0  border-0 font-size-4 font-weight-normal">Name</th>
                    <th scope="col" class="border-0 font-size-4 font-weight-normal">Applied as</th>
                    <th scope="col" class="border-0 font-size-4 font-weight-normal">Applied on</th>
                    <th scope="col" class="border-0 font-size-4 font-weight-normal"></th>
                    <th scope="col" class="border-0 font-size-4 font-weight-normal"></th>
                    <th scope="col" class="border-0 font-size-4 font-weight-normal"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 pr-0">
                      <a href="candidate-profile.html" class="media min-width-px-235 align-items-center">
                        <div class="circle-36 mr-6">
                          <img src="./image/table-one-profile-image-1.png" alt="" class="w-100" />
                        </div>
                        <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">Nicolas Bradley</h4>
                      </a>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-235 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Senior Project Manager</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">12 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <div class=""><a href="javacript:" class="font-size-3 font-weight-bold text-black-2 text-uppercase" data-toggle="modal" data-target="#employe-profile">View Application</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-110 pr-0">
                      <div class=""><a href="contact.html" class="font-size-3 font-weight-bold text-green text-uppercase">Contact</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100 pr-0">
                      <div class=""><a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Reject</a></div>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 pr-0">
                      <a href="candidate-profile.html" class="media min-width-px-235 align-items-center">
                        <div class="circle-36 mr-6">
                          <img src="./image/table-one-profile-image-2.png" alt="" class="w-100" />
                        </div>
                        <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">Elizabeth Gomez</h4>
                      </a>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-235 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Senior Project Manager</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">14 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <div class=""><a href="javacript:" class="font-size-3 font-weight-bold text-black-2 text-uppercase" data-toggle="modal" data-target="#employe-profile">View Application</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-110 pr-0">
                      <div class=""><a href="contact.html" class="font-size-3 font-weight-bold text-green text-uppercase">Contact</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100 pr-0">
                      <div class=""><a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Reject</a></div>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 pr-0">
                      <a href="candidate-profile.html" class="media min-width-px-235 align-items-center">
                        <div class="circle-36 mr-6">
                          <img src="./image/table-one-profile-image-3.png" alt="" class="w-100" />
                        </div>
                        <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">Joe Wade</h4>
                      </a>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-235 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Head of Marketing</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">14 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <div class=""><a href="javacript:" class="font-size-3 font-weight-bold text-black-2 text-uppercase" data-toggle="modal" data-target="#employe-profile">View Application</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-110 pr-0">
                      <div class=""><a href="contact.html" class="font-size-3 font-weight-bold text-green text-uppercase">Contact</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100 pr-0">
                      <div class=""><a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Reject</a></div>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 pr-0">
                      <a href="candidate-profile.html" class="media min-width-px-235 align-items-center">
                        <div class="circle-36 mr-6">
                          <img src="./image/table-one-profile-image-4.png" alt="" class="w-100" />
                        </div>
                        <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">Roger Hawkins</h4>
                      </a>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-235 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">UI Designer</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">16 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <div class=""><a href="javacript:" class="font-size-3 font-weight-bold text-black-2 text-uppercase" data-toggle="modal" data-target="#employe-profile">View Application</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-110 pr-0">
                      <div class=""><a href="contact.html" class="font-size-3 font-weight-bold text-green text-uppercase">Contact</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100 pr-0">
                      <div class=""><a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Reject</a></div>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 pr-0">
                      <a href="candidate-profile.html" class="media min-width-px-235 align-items-center">
                        <div class="circle-36 mr-6">
                          <img src="./image/table-one-profile-image-5.png" alt="" class="w-100" />
                        </div>
                        <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">Marie Green</h4>
                      </a>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-235 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Senior Project Manager</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">21 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-170 pr-0">
                      <div class=""><a href="javacript:" class="font-size-3 font-weight-bold text-black-2 text-uppercase" data-toggle="modal" data-target="#employe-profile">View Application</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-110 pr-0">
                      <div class=""><a href="contact.html" class="font-size-3 font-weight-bold text-green text-uppercase">Contact</a></div>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100 pr-0">
                      <div class=""><a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Reject</a></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="pt-2">
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-hover-primary rounded-0 ml-n2">
                  <li class="page-item rounded-0 flex-all-center">
                    <a class="page-link rounded-0 border-0 px-3active" href="#" aria-label="Previous">
                      <i class="fas fa-chevron-left"></i>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link border-0 font-size-4 font-weight-semibold px-3" href="#">1</a></li>
                  <li class="page-item"><a class="page-link border-0 font-size-4 font-weight-semibold px-3" href="#">2</a></li>
                  <li class="page-item"><a class="page-link border-0 font-size-4 font-weight-semibold px-3" href="#">3</a></li>
                  <li class="page-item disabled"><a class="page-link border-0 font-size-4 font-weight-semibold px-3" href="#">...</a></li>
                  <li class="page-item "><a class="page-link border-0 font-size-4 font-weight-semibold px-3" href="#">7</a></li>
                  <li class="page-item rounded-0 flex-all-center">
                    <a class="page-link rounded-0 border-0 px-3" href="#" aria-label="Next">
                      <i class="fas fa-chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="mb-18">
          <div class="row mb-11 align-items-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <h3 class="font-size-6 mb-0">Posted Jobs (4)</h3>
            </div>
            <div class="col-lg-6">
              <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                <p class="font-size-4 mb-0 mr-6 py-2">Filter by Job:</p>
                <div class="h-px-48">
                  <select name="country" id="country" class="nice-select pl-7 h-100 arrow-3 arrow-3-black min-width-px-273 font-weight-semibold text-black-2">
                    <option value="" data-display="Product Designer">Full-Time</option>
                    <option value="">Part Time</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white shadow-8 pt-7 rounded pb-9 px-11">
            <div class="table-responsive ">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="pl-0 border-0 font-size-4 font-weight-normal">Name</th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Job Type</th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">City</th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Created on</th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal">Total Applicants</th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal"></th>
                    <th scope="col" class="pl-4 border-0 font-size-4 font-weight-normal"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 min-width-px-235">
                      <div class="">
                        <a href="jobdetails.html" class="font-size-4 mb-0 font-weight-semibold text-black-2">Senior Project Manager</a>
                      </div>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-135">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Full-Time</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-125">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">New York</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-155">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">12 July, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-205">
                      <h3 class="font-size-4 font-weight-bold text-black-2 mb-0">47</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-80">
                      <a href="" class="font-size-3 font-weight-bold text-green text-uppercase">Edit</a>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100">
                      <a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Delete</a>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 min-width-px-235">
                      <div class="">
                        <a href="jobdetails.html" class="font-size-4 mb-0 font-weight-semibold text-black-2">UI Designer</a>
                      </div>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-135">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Full-Time</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-125">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Remote</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-155">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">24 June, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-205">
                      <h3 class="font-size-4 font-weight-bold text-black-2 mb-0">145</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-80">
                      <a href="" class="font-size-3 font-weight-bold text-green text-uppercase">Edit</a>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100">
                      <a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Delete</a>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 min-width-px-235">
                      <div class="">
                        <a href="jobdetails.html" class="font-size-4 mb-0 font-weight-semibold text-black-2">Head of Marketing</a>
                      </div>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-135">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Full-Time</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-125">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">London</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-155">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">15 June, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-205">
                      <h3 class="font-size-4 font-weight-bold text-black-2 mb-0">62</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-80">
                      <a href="" class="font-size-3 font-weight-bold text-green text-uppercase">Edit</a>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100">
                      <a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Delete</a>
                    </td>
                  </tr>
                  <tr class="border border-color-2">
                    <th scope="row" class="pl-6 border-0 py-7 min-width-px-235">
                      <div class="">
                        <a href="jobdetails.html" class="font-size-4 mb-0 font-weight-semibold text-black-2">Full-Stack Developer</a>
                      </div>
                    </th>
                    <td class="table-y-middle py-7 min-width-px-135">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">Part-Time</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-125">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">California</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-155">
                      <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">29 May, 2020</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-205">
                      <h3 class="font-size-4 font-weight-bold text-black-2 mb-0">184</h3>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-80">
                      <a href="" class="font-size-3 font-weight-bold text-green text-uppercase">Edit</a>
                    </td>
                    <td class="table-y-middle py-7 min-width-px-100">
                      <a href="" class="font-size-3 font-weight-bold text-red-2 text-uppercase">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="employe-profile" tabindex="-1" aria-hidden="true">
      <div class="container">
        <!-- back Button -->
        <div class="row justify-content-center">
          <div class="col-12 mt-13">
            <div class="mb-9">
              <a class="d-flex align-items-center ml-4" href="javacript:" data-dismiss="modal"> <i
              class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
            </i><span class="text-uppercase font-size-3 font-weight-bold text-white">Back</span></a>
            </div>
          </div>
        </div>
        <!-- back Button End -->
        <div class="modal-dialog mw-100">
          <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
              <!-- Left Sidebar Start -->
              <div class="col-12 col-xl-3 col-lg-4 col-md-5 mb-13 mb-lg-0 border-right border-mercury">
                <div class="pl-lg-5">
                  <!-- Top Start -->
                  <div class="bg-white">
                    <div class="px-5 py-11 text-center border-bottom border-mercury">
                      <a class="mb-4" href="#"><img class="circle-54" src="./image/l3/png/pro-img.png" alt=""></a>
                      <h4 class="mb-0">
                        <a class="text-black-2 font-size-6 font-weight-semibold" href="#">David Henricks</a>
                      </h4>
                      <p class="mb-8">
                        <a class="text-gray font-size-4" href="#">Product Designer</a>
                      </p>
                      <div class="icon-link d-flex align-items-center justify-content-center flex-wrap">
                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#">
                          <i class="fab fa-dribbble"></i>
                        </a>
                        <a class="text-smoke circle-32 bg-concrete mr-5 hover-bg-green" href="#">
                          <i class="fab fa-behance"></i>
                        </a>
                      </div>
                    </div>
                    <!-- Top End -->
                    <!-- Bottom Start -->
                    <div class="px-5 px-xs-12 px-lg-5 pt-lg-5 pt-9 px-xl-9 pt-xl-9 pb-5">
                      <h5 class="text-black-2 mb-8 font-size-5">Contact Info</h5>
                      <!-- Single List -->
                      <div class="mb-7">
                        <p class="font-size-4 mb-0 text-gray">Location</p>
                        <h5 class="font-size-4 font-weight-semibold mb-0 text-black-2 text-break">New York , USA</h5>
                      </div>
                      <!-- Single List -->
                      <!-- Single List -->
                      <div class="mb-7">
                        <p class="font-size-4 mb-0 text-gray">E-mail</p>
                        <h5 class="font-size-4 font-weight-semibold mb-0">
                          <a class="text-black-2 text-break" href="mailto:name_ac@gmail.com">name_ac@gmail.com</a>
                        </h5>
                      </div>
                      <!-- Single List -->
                      <!-- Single List -->
                      <div class="mb-7">
                        <p class="font-size-4 mb-0 text-gray">Phone</p>
                        <h5 class="font-size-4 font-weight-semibold mb-0">
                          <a class="text-black-2 text-break" href="tel:+999565562">+999 565 562</a>
                        </h5>
                      </div>
                      <!-- Single List -->
                      <!-- Single List -->
                      <div class="mb-7">
                        <p class="font-size-4 mb-0 text-gray">Website Linked</p>
                        <h5 class="font-size-4 font-weight-semibold mb-0">
                          <a class="text-break" href="#">www.nameac.com</a>
                        </h5>
                      </div>
                      <!-- Single List -->
                    </div>
                    <!-- Bottom End -->
                  </div>
                </div>
              </div>
              <!-- Left Sidebar End -->
              <!-- Middle Content -->
              <div class="col-12 col-xl-6 col-lg-8 col-md-7 order-2 order-lg-1 border-right border-mercury">
                <div class="bg-white rounded-4 overflow-auto h-1173">
                  <!-- Excerpt Start -->
                  <div class="pr-xl-0 pr-xxl-14 p-5 px-xs-12 pt-7 pb-5">
                    <h4 class="font-size-6 font-weight-semibold mb-7 mt-5 text-black-2">About</h4>
                    <p class="font-size-4 mb-8">A talented professional with an academic background in IT and proven
                      commercial development experience as C++ developer since 1999. Has a sound knowledge of the software
                      development life cycle. Was involved in more than 140 software development outsourcing projects.</p>
                    <p class="font-size-4 mb-8">Programming Languages: C/C++, .NET C++, Python, Bash, Shell, PERL, Regular
                      expressions, Python, Active-script.</p>
                  </div>
                  <!-- Excerpt End -->
                  <!-- Skills -->
                  <div class="border-top border-mercury pr-xl-0 pr-xxl-14 p-5 pl-xs-12 pt-7 pb-5">
                    <h4 class="font-size-6 font-weight-semibold mb-7 mt-5 text-black-2">Skills</h4>
                    <ul class="list-unstyled d-flex align-items-center flex-wrap">
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Agile</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Wireframing</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Prototyping</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Information</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Waterfall Model</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">New Layout</a>
                      </li>
                      <li>
                        <a class="bg-polar text-black-2  mr-6 px-7 mt-2 mb-2 font-size-3 rounded-3 min-height-32 d-flex align-items-center" href="#">Browsing</a>
                      </li>
                    </ul>
                  </div>
                  <!-- Skills End -->
                  <!-- Card Section Start -->
                  <div class="border-top border-mercury p-5 pl-xs-12 pt-7 pb-5">
                    <h4 class="font-size-6 font-weight-semibold mb-7 mt-5 text-black-2">Work Exprerience</h4>
                    <!-- Single Card -->
                    <div class="w-100">
                      <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                        <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                          <img src="./image/l2/png/featured-job-logo-1.png" alt="">
                        </div>
                        <div class="w-100 mt-n2">
                          <h3 class="mb-0">
                            <a class="font-size-5 font-weight-semibold text-black-2" href="#">Lead Product Designer</a>
                          </h3>
                          <a href="#" class="font-size-4 text-default-color line-height-2">Airabnb</a>
                          <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                            <a href="" class="font-size-3 text-gray">Jun 2017 - April 2020- 3 years</a>
                            <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img
                              src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Single Card End -->
                    <!-- Single Card -->
                    <div class="w-100">
                      <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                        <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                          <img src="./image/l1/png/feature-brand-1.png" alt="">
                        </div>
                        <div class="w-100 mt-n2">
                          <h3 class="mb-0">
                            <a class="font-size-5 font-weight-semibold text-black-2" href="#">Senior UI/UX Designer</a>
                          </h3>
                          <a href="#" class="font-size-4 text-default-color line-height-2">Google Inc</a>
                          <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                            <a href="" class="font-size-3 text-gray">Jun 2017 - April 2020- 3 years</a>
                            <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img
                              src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Single Card End -->
                  </div>
                  <!-- Card Section End -->
                  <!-- Card Section Start -->
                  <div class="border-top border-mercury p-5 pl-xs-12 pt-7 pb-5">
                    <h4 class="font-size-6 font-weight-semibold mb-7 mt-5 text-black-2">Education</h4>
                    <!-- Single Card -->
                    <div class="w-100">
                      <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                        <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                          <img src="./image/svg/harvard.svg" alt="">
                        </div>
                        <div class="w-100 mt-n2">
                          <h3 class="mb-0">
                            <a class="font-size-5 font-weight-semibold text-black-2" href="#">Masters in Art Design</a>
                          </h3>
                          <a href="#" class="font-size-4 text-default-color line-height-2">Harvard University</a>
                          <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                            <a href="" class="font-size-3 text-gray">Jun 2017 - April 2020- 3 years</a>
                            <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img
                              src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>Brylin, USA</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Single Card End -->
                    <!-- Single Card -->
                    <div class="w-100">
                      <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                        <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                          <img class="circle-72" src="./image/svg/mit.svg" alt="">
                        </div>
                        <div class="w-100 mt-n2">
                          <h3 class="mb-0">
                            <a class="font-size-5 font-weight-semibold text-black-2" href="#">Bachelor in Software Engineering </a>
                          </h3>
                          <a href="#" class="font-size-4 text-default-color line-height-2">Manipal Institute of
                            Technology</a>
                          <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                            <a href="" class="font-size-3 text-gray">Fed 2012 - April 2016 - 4 years</a>
                            <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img
                              src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Single Card End -->
                    <!-- Single Card -->
                    <div class="w-100">
                      <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                        <div class="square-72 d-block mr-8 mb-7 mb-sm-0">
                          <img class="circle-72" src="./image/svg/mit.svg" alt="">
                        </div>
                        <div class="w-100 mt-n2">
                          <h3 class="mb-0">
                            <a class="font-size-5 font-weight-semibold text-black-2" href="#">Bachelor in Software Engineering </a>
                          </h3>
                          <a href="#" class="font-size-4 text-default-color line-height-2">Manipal Institute of
                            Technology</a>
                          <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                            <a href="" class="font-size-3 text-gray">Fed 2012 - April 2016 - 4 years</a>
                            <a href="" class="font-size-3 text-gray">
                              <span class="mr-4" style="margin-top: -2px"><img
                              src="./image/svg/icon-loaction-pin-black.svg" alt=""></span>New York, USA</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Single Card End -->
                  </div>
                  <!-- Card Section End -->
                </div>
              </div>
              <!-- Middle Content -->
              <!-- Right Sidebar Start -->
              <div class="col-12 col-xl-3 order-3 order-lg-2 bg-default-2">
                <div class="text-center mb-13 mb-lg-0 mt-12">
                  <button class="btn btn-primary btn-xl mb-7 d-block mx-auto text-uppercase">Contact</button>
                  <button class="btn btn-outline-gray btn-xl mb-7 d-block mx-auto text-uppercase">Reject</button>
                </div>
              </div>
              <!-- Right Sidebar End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/vendor.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/aos.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <!-- Activation Script -->
  <!-- <script src="js/drag-n-drop.js"></script> -->
  <script src="js/custom.js"></script>
</body>

</html>