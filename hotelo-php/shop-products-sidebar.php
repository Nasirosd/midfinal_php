<?php $head_title="Hotelo - Hotel Booking PHP Template | Shop"?>
<?php require_once('parts/header/header.php'); ?>  
<?php
$page_title = "Shop";
$page_sub_title = "Products Sidebar";
require_once('parts/page-title.php');
?>

<!-- Featured Products -->
<section class="featured-products">
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="shop-sidebar">
            <div class="sidebar-search">
              <form action="shop-products.php" method="post" class="search-form">
                <div class="form-group">
                  <input type="search" name="search-field" placeholder="Search..." required="">
                  <button><i class="lnr lnr-icon-search"></i></button>
                </div>
              </form>
            </div>
            <div class="sidebar-widget category-widget">
              <div class="widget-title">
                <h5 class="widget-title">Categories</h5>
              </div>
              <div class="widget-content">
                <ul class="category-list clearfix">
                  <li><a href="shop-product-details.php">Cloud Solution</a></li>
                  <li><a href="shop-product-details.php">Cyber Data</a></li>
                  <li><a href="shop-product-details.php">SEO Marketing</a></li>
                  <li><a href="shop-product-details.php">UI/UX Design</a></li>
                  <li><a href="shop-product-details.php">Web Development</a></li>
                  <li><a href="shop-product-details.php">Artifical Intelligence</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-widget price-filters">
              <div class="widget-title">
                <h5 class="widget-title">Filter by Price</h5>
              </div>
              <div class="range-slider clearfix">
                <div class="price-range-slider"></div>
                <div class="clearfix">
                  <p>Price:</p>
                  <div class="title"></div>
                  <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                  <input type="submit" value="Filter">
                </div>
              </div>
            </div>
            <div class="sidebar-widget post-widget">
              <div class="widget-title">
                <h5 class="widget-title">Popular Products</h5>
              </div>
              <div class="post-inner">
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.php"><img src="images/products/thumb-1.jpg" alt=""></a></figure>
                  <a href="shop-product-details.php">Best Headset</a>
                  <span class="price">$45.00</span>
                </div>
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.php"><img src="images/products/thumb-2.jpg" alt=""></a></figure>
                  <a href="shop-product-details.php">Quality Battery</a>
                  <span class="price">$34.00</span>
                </div>
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.php"><img src="images/products/thumb-3.jpg" alt=""></a></figure>
                  <a href="shop-product-details.php">Smart Watch</a>
                  <span class="price">$29.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 content-side">
          <!--MixitUp Galery-->
          <div class="mixitup-gallery mt-5 mt-lg-0">
            <!--Filter-->
            <div class="filters clearfix">
              <ul class="filter-tabs filter-btns clearfix">
                <li class="active filter" data-role="button" data-filter="all">All</li>
                <li class="filter" data-role="button" data-filter=".dairy">Luxury</li>
                <li class="filter" data-role="button" data-filter=".pantry">Mountain</li>
                <li class="filter" data-role="button" data-filter=".meat">Cultural</li>
                <li class="filter" data-role="button" data-filter=".fruit">Hiking</li>
                <li class="filter" data-role="button" data-filter=".vagetables">Ocean</li>
              </ul>
            </div>

            <div class="filter-list row">
              <!--Product Block-->
              <div class="product-block all mix pantry fruit col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/1.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Show Piece</a></h4>
                    <span class="price">$32.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy meat fruit col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/2.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Leather Belt</a></h4>
                    <span class="price">$52.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix pantry fruit vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/1.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Sunglasses</a></h4>
                    <span class="price">$43.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy meat vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/1.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Backpack</a></h4>
                    <span class="price">$22.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix pantry meat fruit col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/5.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Hand Watch</a></h4>
                    <span class="price">$34.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy pantry col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/6.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Party Bag</a></h4>
                    <span class="price">$52.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix fruit vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/7.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Coffee Mug</a></h4>
                    <span class="price">$25.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy pantry meat vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/products/8.jpg" alt=""/></a></div>
                  <div class="content">
                    <h4><a href="shop-product-details.php">Smart Watch</a></h4>
                    <span class="price">$30.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End Featured Products -->

<?php
$new_footer_logo_url = "images/logo/white-logo.png";
?>
<?php require_once('parts/footer/footer.php'); ?>  