<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    <?php 
    if (isset($featured_products)):
        foreach ($featured_products as $row):    
    ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <?php if (empty($row['image_url'])): ?>
                        <img src="" alt="" />
                    <?php else: ?>
                        <a href="index.php?action=product_detail_login&product_id=<?= $row['product_id'] ?>"><img src="<?= $row['image_url'] ?>" alt="" /></a>
                        <input type="hidden" name="product_id" value="<?=$row['product_id']?>">
                    <?php endif; ?>
                    <h2>$<?= $row['unit_price'] ?></h2>
                    <p><?= $row['name'] ?></p>
                    <a href="index.php?action=order_add&product_id=<?=$row['product_id']?>"
                             class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
<!--                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$56</h2>
                        <p><?= $row['name'] ?></p>
                        <a href="cart.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>-->
                <?php if ($row['status']=='New'): ?>
                <img src="common/images/home/new.png" class="new" alt="">
                <?php elseif ($row['status']=='Sale'): ?>
                <img src="common/images/home/sale.png" class="new" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
        endforeach;
    endif;
    ?>
</div><!--features_items-->