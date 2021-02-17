<?php
include"Top.php";
?>
<?php
$products=$pdo->query("SELECT * FROM product WHERE pro_id=25");
$Product=$products->fetch() 
?>	
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="./">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th class="total-th">Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-col">
										<img src="img/cart/1.jpg" alt="">
										<div class="pc-title">
											<h4><?php echo $Product['pro_name']?></h4>
											<p><?php echo $Product['pro_price']?></p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									
									<td class="total-col"><h4><?php echo $Product['pro_price']?> TL</h4></td>
								</tr>
								
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span><?php echo $Product['pro_price']?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<a href="" class="site-btn">Proceed to checkout</a>
					<a href="./" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>CONTINUE SHOPPING</h2>
			</div>
			<div class="product-slider owl-carousel">
            <?php
                $products=$pdo->query("SELECT * FROM product WHERE pro_vitrin =1 ORDER BY pro_views LIMIT 8");
                    while($Product=$products->fetch())
                    ProductListView($Product);  
            ?>
			</div>
		</div>
	</section>
<?php
include "Footer.php";
?>