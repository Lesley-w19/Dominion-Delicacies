

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

     <!-- Site Metas -->
    <title>Dominion Delicacies</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

     <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
     <!-- start of external css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!-- end of external css links -->

     <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
 <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
     <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

     <!-- start of external css links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css">
     <!-- end of external css links -->

     <!-- [if lt IE 9]> -->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <!-- <![endif] -->

<?php 
require "functions.php";

?>


  </head>

  <body>
     <!-- Start Main Top -->
    <div class="main-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="custom-select-box">
              <select
                id="basic"
                class="selectpicker show-tick form-control"
                data-placeholder="$ USD"
              >
                <option>Ksh KES</option>
                <option>$ USD</option>
                <option>R Rand</option>
              </select>
            </div>
            <div class="right-phone-box">
              <p>Call US :- <a href="#"> +254 722 738 980</a></p>
            </div>
            <div class="our-link">
              <ul>
                <li>
                  <a href="my-account.php"><i class="fa fa-user s_color"></i> My Account</a>
                </li>
                <li>
                  <a href="location.php"
                    ><i class="fas fa-location-arrow"></i> Our location</a
                  >
                </li>
                <li>
                  <a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="login-box">
              <select
                id="basic"
                class="selectpicker show-tick form-control"
                data-placeholder="Sign In">
                <option  type="button" role="button" onclick = "window.location.href='signup-user.php'">Register Here</option>
                <option type="button"  role="button" onclick = "window.location.href='login-user.php'">Sign In</option>
              </select>
            </div>
            <div class="text-slid-box">
              <div id="offer-box" class="carouselTicker">
                <ul class="offer-box">
                  <li>
                    <i class="fab fa-opencart"></i> 20% off Entire Purchase
                    Promo code: offT80
                  </li>
                  <li>
                    <i class="fab fa-opencart"></i> 50% - 80% off on Peanut
                    Butter
                  </li>
                  <li><i class="fab fa-opencart"></i> Off 10%! Shop Flour</li>
                  <li><i class="fab fa-opencart"></i> Off 50%! Shop Now</li>
                  <li><i class="fab fa-opencart"></i> Off 10%! Shop Flour</li>
                  <li>
                    <i class="fab fa-opencart"></i> 50% - 80% off on Peanut
                    Butter
                  </li>
                  <li>
                    <i class="fab fa-opencart"></i> 20% off Entire Purchase
                    Promo code: offT30
                  </li>
                  <li><i class="fab fa-opencart"></i> Off 50%! Shop Now</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- End Main Top -->

 <!-- Start Main Top -->
 <header class="main-header">
      <!-- Start Navigation -->
      <nav
        class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav"
      >
        <div class="container">
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbar-menu"
              aria-controls="navbars-rs-food"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php"
              ><img src="dmnImages/dominion.png" class="logo" alt="" 
            /></a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul
              class="nav navbar-nav ml-auto"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle arrow"
                  data-toggle="dropdown"
                  >SHOP </a
                >
                <ul class="dropdown-menu">
                  <li><a href="shop.php">Sidebar Shop</a></li>
                  <li><a href="shop-detail.php">Shop Detail</a></li>
                  <li><a href="cart.php">Cart</a></li>
                  <li><a href="checkout.php">Checkout</a></li>
                  <li><a href="my-account.php">My Account</a></li>
                  <li><a href="wishlist.php">Wishlist</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->

          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
            <ul>
              <li class="search">
                <a href="#"><i class="fa fa-search"></i></a>
              </li>
              <li class="side-menu">
                <a href="#">
                  <i class="fa fa-shopping-bag"></i>
                  <span class="badge">3</span>
                  <p>My Cart</p>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
          <a href="#" class="close-side"><i class="fa fa-times"></i></a>
          <li class="cart-box">
            <ul class="cart-list">
              <li>
                <a href="#" class="photo"
                  ><img src="images/img-pro-01.jpg" class="cart-thumb" alt=""
                /></a>
                <h6><a href="#">Delica omtantur </a></h6>
                <p>1x - <span class="price">$80.00</span></p>
              </li>
              <li>
                <a href="#" class="photo"
                  ><img src="images/img-pro-02.jpg" class="cart-thumb" alt=""
                /></a>
                <h6><a href="#">Omnes ocurreret</a></h6>
                <p>1x - <span class="price">$60.00</span></p>
              </li>
              <li>
                <a href="#" class="photo"
                  ><img src="images/img-pro-03.jpg" class="cart-thumb" alt=""
                /></a>
                <h6><a href="#">Agam facilisis</a></h6>
                <p>1x - <span class="price">$40.00</span></p>
              </li>
              <li class="total">
                <a href="#" class="btn btn-default hvr-hover btn-cart"
                  >VIEW CART</a
                >
                <span class="float-right"><strong>Total</strong>: $180.00</span>
              </li>
            </ul>
          </li>
        </div>
        <!-- End Side Menu -->
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
      <div class="container">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input type="text" class="form-control" placeholder="Search" />
          <span class="input-group-addon close-search"
            ><i class="fa fa-times"></i
          ></span>
        </div>
      </div>
    </div>
    <!-- End Top Search -->

