<div class="new_items"><!-- new_items-->
    <h2 class="title text-center">New Items</h2>
    <?php 
    if (isset($new_products)):
        foreach ($new_products as $row):    
    ?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <?php if (empty($row['image_url'])): ?>
                    <img src="../common/images/home/gallery2.jpg" alt="" />
                    <?php else: ?>
                        <img src="<?= $row['image_url'] ?>" alt="" />
                    <?php endif; ?>
                    <h2>$<?= $row['unit_price'] ?></h2>
                    <p><?= $row['name'] ?></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <p><?= $row['name'] ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
                <?php if ($row['status']=='new'): ?>
                <img src="common/images/home/new.png" class="new" alt="">
                <?php elseif ($row['status']=='Sale'): ?>
                <img src="common/images/home/sale.png" class="new" alt="">
                <?php endif; ?>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
        endforeach;
    endif;
    ?>
</div><!--new_items-->