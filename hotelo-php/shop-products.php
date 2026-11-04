<?php $head_title="Hotelo - Hotel Booking PHP Template | Shop Products"?>
<?php require_once('parts/header/header.php'); ?> 
<?php
$page_title = "Shop";
$page_sub_title = "Shop Products";
require_once('parts/page-title.php');
?>

<!-- Featured Products -->
<section class="featured-products">
<div class="auto-container">

	<!--MixitUp Galery-->
	<div class="mixitup-gallery">
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
		<div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
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
		<div class="product-block all mix dairy meat fruit col-lg-3 col-md-6 col-sm-12">
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
		<div class="product-block all mix pantry fruit vagetables col-lg-3 col-md-6 col-sm-12">
		<div class="inner-box">
			<div class="image"><a href="shop-product-details.php"><img src="images/products/1.jpg" alt=""/></a></div>
			<div class="content">
			<h4><a href="shop-product-details.php">Sunglasses</a></h4>
			<span class="price">$42.00</span>
			<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
			</div>
			<div class="icon-box">
			<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
			<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
		</div>

		<!--Product Block-->
		<div class="product-block all mix dairy meat vagetables col-lg-3 col-md-6 col-sm-12">
		<div class="inner-box">
			<div class="image"><a href="shop-product-details.php"><img src="images/products/2.jpg" alt=""/></a></div>
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
		<div class="product-block all mix pantry meat fruit col-lg-3 col-md-6 col-sm-12">
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
		<div class="product-block all mix dairy pantry col-lg-3 col-md-6 col-sm-12">
		<div class="inner-box">
			<div class="image"><a href="shop-product-details.php"><img src="images/products/6.jpg" alt=""/></a></div>
			<div class="content">
			<h4><a href="shop-product-details.php">Party Bag</a></h4>
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
		<div class="product-block all mix fruit vagetables col-lg-3 col-md-6 col-sm-12">
		<div class="inner-box">
			<div class="image"><a href="shop-product-details.php"><img src="images/products/7.jpg" alt=""/></a></div>
			<div class="content">
			<h4><a href="shop-product-details.php">Coffee Mug</a></h4>
			<span class="price">$20.00</span>
			<span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
			</div>
			<div class="icon-box">
			<a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
			<a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
			</div>
		</div>
		</div>

		<!--Product Block-->
		<div class="product-block all mix dairy pantry meat vagetables col-lg-3 col-md-6 col-sm-12">
		<div class="inner-box">
			<div class="image"><a href="shop-product-details.php"><img src="images/products/8.jpg" alt=""/></a></div>
			<div class="content">
			<h4><a href="shop-product-details.php">Smart Watch</a></h4>
			<span class="price">$40.00</span>
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
</section>
<!-- End Featured Products -->

<?php
$new_footer_logo_url = "images/logo/white-logo.png";
?>
<?php require_once('parts/footer/footer.php'); ?>  