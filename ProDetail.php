<?php
include"Top.php";
$Product=$pdo->prepare("SELECT * FROM product WHERE pro_id=?");
$Product->execute(array(intval($_GET['id'])));
if($Product->rowCount()==1)
{
$Product=$Product->fetch();
    $pdo->query("UPDATE product SET pro_views=(pro_views+1) WHERE pro_id=".$Product['pro_id']);
}
else
{
    header("Location:./");
    exit;
}
?>
	<div class="page-top-info">
		<div class="container">
			<h4>Product Page</h4>
			<div class="site-pagination">
				<a href="./">Home</a> /
				<a href="category.php">Shop</a>
			</div>
		</div>
	</div>
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="./category.php"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="img/single-product/1.jpg" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/thumb-1.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $Product['pro_name'] ?></h2>
					<h3 class="p-price"><?php echo number_format($Product['pro_price'],2,",",".")," TL" ?></h3>
					<h4 class="p-stock">Available: <span><?php echo $Product['pro_stok']?> In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
                        <p><?php echo $Product['pro_views']?> views </p>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="cart.php" class="site-btn">SHOP NOW</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<?php echo $Product['pro_description'] ?>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
<?php
$products=$pdo->query("SELECT * FROM product ORDER BY pro_views");
while($Product=$products->fetch())
    ProductListView($Product);  
?>						
			</div>
		</div>
	</section>	
<?php
include"Footer.php";
?>