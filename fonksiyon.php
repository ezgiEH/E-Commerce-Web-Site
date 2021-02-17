<?php
function ProductListView($Product)
{
?>                          
<div class="product-item">
    <a href="ProDetail.php?id=<?php echo $Product['pro_id']?>">
    <div class="pi-pic">
        <img src="./img/product/1.jpg" alt="">
        <div class="pi-links">
    <a href="" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
        </div>
    </div>
    <div class="pi-text">
    <h6><?php echo number_format($Product['pro_price'],2,",",".")," TL" ?></h6>
    <p><?php echo $Product['pro_name']?></p>
    </div>
    </a> 
</div>          				
<?php
}
?>
