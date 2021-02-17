<?php
include"Top.php";
?>

	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/back1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>mechanical keyboard</h2>
							<p>Ultimate Mechanical Keyboard Catalog and Guide. Find and buy the best mechanical keyboard for your gaming and typing </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h3>100 TL</h3>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bacckk2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Gaming Mouse</h2>
							<p class="text-white">We know how important a gaming mouse is for a gamer! Then come on for the RGB Gaming Mouse opportunity.</p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h3>400TL</h3>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
<?php
$products=$pdo->query("SELECT * FROM product ORDER BY pro_id DESC LIMIT 5");
while($Product=$products->fetch())
ProductListView($Product); // fonksiyondan ürünleri çağırdık  
?>			
			</div>
		</div>
	</section>
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">KEYBOARDS</a></li>
				<li><a href="#">GAMER MOUSE</a></li>
				<li><a href="#">HEADSETS</a></li>
				<li><a href="#">MOUSE MATS</a></li>
				<li><a href="#">FULL SET</a></li>
			</ul>
			<div class="row">
			<?php
                $products=$pdo->query("SELECT * FROM product WHERE pro_vitrin =1 ORDER BY RAND() LIMIT 8");
                while($Product=$products->fetch())
                {
            ?>
				<div class="col-lg-3 col-sm-6">
           <?php ProductListView($Product); ?>
				</div>
			<?php
                }
            ?>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
<?php
include"Footer.php"
?>

