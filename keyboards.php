<?php
include"Top.php";
?>
	<div class="page-top-info">
		<div class="container">
			<h4>Keyboards PAge</h4>
			<div class="site-pagination">
				<a href="./">Home</a> /
				<a href="category.php">Shop</a> /
			</div>
		</div>
	</div>
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="#">Keyboards</a>	
									<li><a href="#">Keyboard</a></li>
									<li><a href="#">Semi Mechanical Keyboard</a></li>
									<li><a href="#">Mechanical Keyboard</a></li>
				                    <li><a href="#">Office Keyboard</a></li>			
						</ul>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Asus<span>(2)</span></a></li>
							<li><a href="#">Apple<span>(56)</span></a></li>
							<li><a href="#">Bloody<span>(36)</span></a></li>
							<li><a href="#">Gamepower<span>(27)</span></a></li>
							<li><a href="#">Rampage<span>(19)</span></a></li>
							<li><a href="#">Razer<span>(36)</span></a></li>
							<li><a href="#">Logitec<span>(27)</span></a></li>
							<li><a href="#">MSI<span>(19)</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
                        <?php
                            $products=$pdo->query("SELECT * FROM product WHERE pro_vitrin =1 && pro_category=1 ORDER BY pro_price ");              
                                while($Product=$products->fetch())               
                                    {
                                    ?>
                                    <div class="col-lg-4 col-sm-6">
                                    <?php ProductListView($Product);?>
                                    </div>
                                    <?php
                                    }   
                                    ?>
						        <div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
include"Footer.php"
?>