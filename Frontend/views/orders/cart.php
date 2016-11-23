<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'common/header.php';?>

<div id="body">
    <div class="row title visible-md-block visible-lg-block" style="text-align: center">
        <div class="col-lg-9">
            <div class="col-lg-4">Product</div>
            <div class="col-lg-1">Price</div>
            <div class="col-lg-1">Quantity</div>
            <div class="col-lg-2">Date</div>
            <div class="col-lg-2">Status</div>
            <div class="col-lg-1">Total</div>
        </div>
        <div class="col-lg-3"></div>
        <form name="add_cart" method="get" action="index.php">
                <input type="hidden" name="action" value="order_add_save">
                <?php 
                if(!empty($result)):
                    foreach ($result as $row):
                ?>
                <div class="col-lg-9">
                    <input type="hidden" name="product_id" value="<?=$row['product_id']?>">
                    <input type="hidden" name="customer_id" value="<?=$row['customer_id']?>">
                    <div class="col-lg-4">
                        <img src="<?=$row['image_url']?>" style="width: 200px; height: 150px">
                        <div><?=$row['name']?></div>
                    </div>
                    <div class="col-lg-1"><?=$row['unit_price']?></div>
                    <div class="col-lg-1"><input type="hidden" name="quantity" value="order_add">
                        <select name="soluong">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="col-lg-2"><input type="date" name="date"  style="width:140px"></div>
                    <div class="col-lg-2"><input type="text" name="status"  style="width:140px" ></div>
                   
                    <div class="col-lg-1">
                        <input type="text" name="total" value="<?=$row['unit_price']?>"  style="width:50px" ></div>
                    </div>
                <div class="col-lg-3">
                    <input type="submit" value="apply now">
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
        </form>
    </div>
    
</div>


    
<?php include 'common/footer.php';?>
