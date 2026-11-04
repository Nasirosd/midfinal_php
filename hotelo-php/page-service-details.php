<?php $head_title="Hotelo - Hotel Booking PHP Template | Service Details"?>
<?php require_once('parts/header/header.php'); ?>  
<?php
$page_title = "Service Details";
$page_sub_title = "Service Details";
require_once('parts/page-title.php');
?>

<!--Start Services Details-->
<section class="services-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <!--Start Services Details Sidebar-->
        <div class="col-xl-4 col-lg-4">
          <div class="service-sidebar">
            <!--Start Services Details Sidebar Single-->
            <div class="sidebar-widget service-sidebar-single">

              <div class="sidebar-service-list">
                <ul>
                  <li><a href="page-service-details.php" class="current"><i class="fas fa-angle-right"></i><span>Spa and Wellness</span></a></li>
                  <li class="current"><a href="page-service-details.php"><i class="fas fa-angle-right"></i><span>Meeting Room</span></a></li>
                  <li><a href="page-service-details.php"><i class="fas fa-angle-right"></i><span>Restaurant</span></a></li>
                  <li><a href="page-service-details.php"><i class="fas fa-angle-right"></i><span>Free Wi-Fi</span></a></li>
                  <li><a href="page-service-details.php"><i class="fas fa-angle-right"></i><span>Parking Facilities</span></a></li>
                  <li><a href="page-service-details.php"><i class="fas fa-angle-right"></i><span>Room Service</span></a></li>
                </ul>
              </div>

              <div class="service-details-help">
                <div class="help-shape-1"></div>
                <div class="help-shape-2"></div>
                <h2 class="help-title">Contact with <br /> us for any <br /> advice</h2>
                <div class="help-icon">
                  <span class=" lnr-icon-phone-handset"></span>
                </div>
                <div class="help-contact">
                  <p>Need help? Talk to an expert</p>
                  <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                </div>
              </div>

              <!--Start Services Details Sidebar Single-->
              <div class="sidebar-widget service-sidebar-single mt-4">
                <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
                  <a href="#" class="theme-btn btn-style-one d-grid"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                </div>
              </div>
            </div>
            <!--End Services Details Sidebar-->
          </div>
        </div>

        <!--Start Services Details Content-->
        <div class="col-xl-8 col-lg-8">
          <div class="services-details__content">
            <img class="w-100" src="images/service/service-details.jpg" alt="" />
            <h3 class="mt-4">Service Overview</h3>
            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit  </p>
            <div class="content mt-40">
              <div class="text">
                <h3>Service Center</h3>
                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur</blockquote>
              </div>
              <div class="feature-list mt-4">
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="images/service/service-d1.jpg" alt="images" />
                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="images/service/service-d2.jpg" alt="images" />
                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Services Details Content-->
      </div>
    </div>
</section>
<!--End Services Details-->

<?php
$new_footer_logo_url = "images/logo/white-logo.png";
?>
<?php require_once('parts/footer/footer.php'); ?>   