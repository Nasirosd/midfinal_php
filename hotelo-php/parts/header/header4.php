<?php require_once('header-common.php'); ?>

<div class="page-wrapper body-bg">
<!-- Preloader -->
<?php require_once('parts/preloader/preloader.php'); ?> 

<!-- Main Header-->
<header class="main-header header-style-one header-1 header-5">
  <!-- Header Lower -->
  <div class="header-lower">
    <!-- Main box -->
    <div class="main-box">
      <!--Nav Box-->
      <div class="nav-outer">
        <div class="logo-box2">
          <div class="logo">
            <?php
            $default_logo_url = "images/logo/black-logo.png";
            if(isset($dark_logo_url)&&!empty($dark_logo_url)) {
            $default_logo_url = $dark_logo_url;
            }
            ?>
            <a href="index.php" title=""><img src="<?php echo $default_logo_url;?>" alt="" title="Hotelo"></a>
          </div>
        </div>
        <div class="outer-box">
          <nav class="nav main-menu">
            <?php
            $default_menu_file = "parts/header/menu.php";
            if(isset($single_menu_file)&&!empty($single_menu_file)) {
            $default_menu_file = $single_menu_file;
            }
            ?>
            <?php require_once($default_menu_file); ?>
          </nav>
          <!-- Main Menu End-->
          <div class="ui-btn-outer">
            <div class="header-contact">
              <a href="tel:+1234567890000" class="info-btn">
                <i class="icon fa fa-phone"></i>
                +(123) 456 7890 000
              </a>
            </div>
            <div class="ui-btn-search">
              <button class="ui-btn ui-btn search-btn main-header__search search-toggler">
                <img src="images/home-5/search.png" alt="Search Icon">
              </button>
              <a href="shop-cart.php" class="shop-cart">
                <img src="images/home-5/cart.png" alt="img">
                <span>1</span>
              </a>
            </div>

            <a href="room-details.php" class="theme-btn">
              <span>book Now</span>
            </a>

            <!-- Mobile Nav toggler -->
          </div>
          <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Lower -->

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>

    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    <nav class="menu-box">
      <div class="upper-box">
        <div class="nav-logo">
          <a href="index.php"><img src="images/logo/white-logo.png" alt=""></a>
        </div>
        <div class="close-btn"><i class="icon fa fa-times"></i></div>
      </div>

      <ul class="navigation clearfix">
        <!--Keep This Empty / Menu will come through Javascript-->
      </ul>
      <ul class="contact-list-one">
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box">
            <i class="icon lnr-icon-phone-handset"></i>
            <span class="title">Call Now</span>
            <a href="tel:+92880098670">+92 (8800) - 98670</a>
          </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box">
            <span class="icon lnr-icon-envelope1"></span>
            <span class="title">Send Email</span>
            <a href="mailto:help@company.com">help@company.com</a>
          </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box">
            <span class="icon lnr-icon-clock"></span>
            <span class="title">Send Email</span>
            Mon - Sat 8:00 - 6:30, Sunday - CLOSED
          </div>
        </li>
      </ul>

      <ul class="social-links">
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu -->

  <!-- Sticky Header  -->
  <div class="sticky-header">
    <div class="auto-container">
      <div class="inner-container">
        <!--Logo-->
        <div class="logo">
          <?php
          $default_logo_url = "images/logo/black-logo.png";
          if(isset($sticky_logo_url)&&!empty($sticky_logo_url)) {
          $default_logo_url = $sticky_logo_url;
          }
          ?>
          <a href="index.php" title=""><img src="<?php echo $default_logo_url;?>" alt="" title=""></a>
        </div>

        <!--Right Col-->
        <div class="nav-outer">
          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-collapse show collapse clearfix">
              <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
              </ul>
            </div>
          </nav>
          <!-- Main Menu End-->

          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sticky Menu -->
</header>
<!--End Main Header -->

<!-- Header Search -->
<div class="search-popup">
  <div class="search-popup__overlay search-toggler"></div>
  <div class="search-popup__content">
    <form role="search" method="get" class="search-popup__form" action="#">
      <input type="text" id="search" name="search" placeholder="Search Here...">
      <button type="submit" aria-label="search submit" class="search-btn">
        <span><i class="fa-regular fa-magnifying-glass"></i></span>
      </button>
    </form>
  </div>
</div>