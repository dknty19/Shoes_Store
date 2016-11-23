<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Converse.com</title>
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/font-awesome.min.css" rel="stylesheet">
        <link href="common/css/prettyPhoto.css" rel="stylesheet">
        <link href="common/css/price-range.css" rel="stylesheet">
        <link href="common/css/animate.css" rel="stylesheet">
        <link href="common/css/main.css" rel="stylesheet">
        <link href="common/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="common/js/html5shiv.js"></script>
        <script src="common/js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="common/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="common/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="common/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="common/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="common/images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="https://s-media-cache-ak0.pinimg.com/originals/e0/2a/b5/e02ab5d11d92bfcd971a0bb45d2df90c.jpg" type="image/x-icon">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i>+84 905 283 594</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> nguyenhoaivinh.1994@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="https://www.facebook.com/nguyenhoaivinh.19"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.google.com.vn/#gfe_rd=cr"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row" style="padding-bottom: 0px; padding-top: 0px">
                        <div class="col-md-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="common/images/home/converse-logo.jpg" alt="" style="height: 100px" /></a>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-top: 20px"><!--login-->
                            <div class="shop-menu pull-right">
                                <ul class="short-username">
                                    <li style="padding-right: 5px"><span>Chào,</span></li>
                                    <li style="padding-left: 0; text-transform: uppercase"><span><?=$crow['username']?></span></li>
                                    <input type="hidden" name="username" value="<?=$crow['username']?>">
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                </ul>
                                <div style="padding-left: 70px">
                                <form action="index.php" method="post" >
                                    <input type="hidden" name="action" value="logout">
                                    <input type="submit" name="logout" value="Logout">
                                </form>
                                </div>
                            </div>
                        </div><!--login-->

                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom" style="padding-top: 10px; padding-bottom: 10px"><!--header-bottom-->
            <div class="container">
                <div class="row" >
                    <div class="col-sm-9" >
                        <div class="navbar-header">

                        </div>
                        <div class="mainmenu navbar-header">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?action=category_id=1"> Chuck II</a></li>
                                        <li><a href="index.php?action=category_id=3"> Sneaker</a></li>
                                        <li><a href="index.php?action=category_id=4"> Classic</a></li>
                                        <li><a href="index.php?action=category_id=5"> Chuck II Shield Canvas</a></li>
                                        <li><a href="index.php?action=category_id=6"> Chuck II Spacer Mash</a></li>
                                        <li><a href="index.php?action=category_id=9"> Rubber</a></li>
                                    </ul>
                                </li> 
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <div id="body">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="left-side">
                            <div class="col-md-3">
                                <div class="left-sidebar">
                                    <div class="brands_products"><!--brands_products-->
                                        <h2>Category</h2>
                                        <div class="brands-name">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="index.php?action=category_id=1"> <span class="pull-right">(50)</span>Chuck II</a></li>
                                                <li><a href="index.php?action=category_id=3"> <span class="pull-right">(27)</span>Sneaker</a></li>
                                                <li><a href="index.php?action=category_id=4"> <span class="pull-right">(56)</span>Classic</a></li>
                                                <li><a href="index.php?action=category_id=5"> <span class="pull-right">(32)</span>Chuck II Shield Canvas</a></li>
                                                <li><a href="index.php?action=category_id=6"> <span class="pull-right">(5)</span>Chuck II Spacer Mash</a></li>
                                                <li><a href="index.php?action=category_id=9"> <span class="pull-right">(5)</span>Rubber</a></li>
                                            </ul>
                                        </div>
                                    </div><!--/brands_products-->
                                    
                                    <div class="price-range"><!--price-range-->
                                        <h2>Price Range</h2>
                                        <div class="well text-center">
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 100</b>
                                        </div>
                                    </div><!--/price-range-->

                                    <div class="shipping text-center" ><!--shipping-->
                                        <img src="http://d2ob0iztsaxy5v.cloudfront.net/holdingimages/hleft-student20-cont.jpg" alt="" style="width: 265px;" />
                                    </div><!--/shipping-->

                                </div>
                            </div>

                        </div>
                        <div class="right-side">
                            <div class="col-md-9">
                                <section id="slider"><!--slider-->

                                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                                        </ol>

                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main.jpg" class="girl img-responsive" alt="" />
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main-slide.jpg" class="girl img-responsive" alt="" />
                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main-slide1.jpg" class="girl img-responsive" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <section>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-9 padding-right">
                                                        <!-- Featured Items -->
                                                        <?php include './views/login/featured_products_login.php'; ?>
                                                        <!--New Items-->
                                                        <?php include './views/login/new_products_login.php'; ?>
                                                        <div class="category-tab"><!--category-tab-->
                                                            <div class="col-sm-12">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active"><a href="#bestseller" data-toggle="tab">Best seller</a></li>
                                                                    <li><a href="#mostview" data-toggle="tab">Most view</a></li>
                                                                    <li><a href="#discount" data-toggle="tab">Discount</a></li>
                                                                    <li><a href="#popular" data-toggle="tab">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade active in" id="bestseller" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/150152v/G17655-CT726U-15F04thumb.png" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/154018v/154018V-1-thumb.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQab8N-_LfB6dA8VCEvz2EUEyZkIcsLaPzWpENm09bbsCtqFQdN" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRdFlU96Ni22eRAAzk-nMrLLh3-RWQAA7bgsgX_4K3S9Xus_XbQ" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="blazers" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQzcG0OJssU66MUwkOkqBQtSDRRxHCLoP6rVdvXSf5II4_xRiT5" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRob8yaearwKbS-ct_1LXSNt1l1rV_2XIkNmBnm6iKnNCKICRWV2Q" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRaAZcJZqZJeFFcCfYeKgkcDu4cTOVTrJqa5c50mWxqD0j6X-IFIA" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS-D0baXG4yWnzILOagslCNvfPRRevix0nRGHV1e8MpXNFyifR9w" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="sunglass" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTVK2m88cGKnV_5qsY9HfYp6EOCIG-PIRzhQ74qW_Il0YJ5OT5-rQ" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcREF6SOmZuBFXeZpcJHEUGItcraC9beO0yEUwvVRK5fTMr67pZA" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery1.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery2.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="kids" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery1.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery2.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery3.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery4.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="poloshirt" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery2.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery4.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery3.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery1.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Chuck II All Star Batman</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--/category-tab-->

                                                        <div class="recommended_items"><!--recommended_items-->
                                                            <h2 class="title text-center">recommended items</h2>

                                                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="item active">	
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/154018v/154018V-1-thumb.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/151146c/151146Cthumb.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/151160v/151160V-thumb.png" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item">	
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/151157v/151157V-thumb.png" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/150146v/BlueHighCHUCKIIstandard-thumb.png" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="http://www.converse.com.vn/pictures/catalog/products/sneakers/chuck-taylor-all-star/150152v/G17655-CT726U-15F04thumb.png" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Chuck II All Star Batman</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                                                    <i class="fa fa-angle-left"></i>
                                                                </a>
                                                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </a>			
                                                            </div>
                                                        </div><!--/recommended_items-->

                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </section><!--/slider-->
        </div>
    </div>
</div>
</div>
</div>
</body>




<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>A</span>MAZON <span>Converse</span></h2>
                        <p>Welcome to our home Converse! At here, each words, each detail and image are all improvement mark the Converse 100 year, and also deveplop strongly and...</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="data:image/png;base64,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" alt="" />
                                </div>
<!--                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>-->
                            </a>
                            <p></p>
                            <h2></h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="data:image/png;base64,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" alt="" />
                                </div>
<!--                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>-->
                            </a>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZsAAAB6CAMAAABeKQ5ZAAAA9lBMVEX///8AhEbtHCQAgkL7/PsAfzsAezTsAAD/+/u2zbvtAAYAgD7tFRUAejH2pp4AgUAxMjLc6+LF2s1Hl2fj7eU/l2by9/P5tqHtEBpUnG6ZwanuIx7R49f5vLH71dIbik/zg4B3sZD6y77m5eU5OzuFtZT4trHS0dGHxKZBQkK9vr61tbWLvJ/q6upzs46mp6f2moqVkpJeXl70jI5tbW2Bfn7Y19dSUVF5d3cnKirvRDn71cmoybFISUlZWVmbm5vzcViIh4cfIiIACAi5ubllpnwskFm+3M0AchzxYEnyeHSu1sOYyLBcp37xal397OrwUUD2k4J9qLKuAAALgklEQVR4nO2ba2ObthqAoQh6Mtc1cRKfJHPreZDDwCHMHAz2Fuw5ddxuXdbt//+ZI64SIC6OcZP0vM+XxiAJ6X3QBUE5DgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC+Ov9qQvOUSWImKOB0eHt7e0NzfXt0ik8UUtayc4Yoy65l5/LsdD1GUY359+vv6nn9PkjaJCVO+1/2hQbD/j3fkbrdriSKYodGFPFhiX/onyaJj3tiDYLAj84uh4Ok9BOpLkdAdxwEaluTtsML/Pb+aHhMotrvJiels7CWt42uF2V4tJvzV/XEbhqkfPXqDdvN53FP6gl8BUJP2n5M3PCVSeMMgije92M3Fw0y8HznKgj3Sa9B2T1JHF1/Tt1I6ZmTyE2j6wX0Tp65mz8FsUEzBP4ocdOQzqj/CDcN44rrfFnqpt5vmuF5u/mzustQ0ejv5gbnGB7MDS5duvzW3QzuOw0b0rtBu7nhO+MDuuH57tE37oa0rD4Wpzu64bsHdSNs0TftBl037TY40oPn5Sa+WZ7azfdvyii4KU2J0xbdDDKrLqETLVTDxXP4F31WvM27ERhkgjfIuemUI+Xd1BUedJwSN+WZsmfaWKed//W2lC9ZN3+Xp3z79seimy5Vb/FsfH1JcX01vqDsCBc5N6OzItsOteqT+lk3o8sK+lk3AqvwkSRRoS5zM8pCq8mdutjfzZufa5Kmbs5/2+0alBthdHmae05Gg9NhPhTEjXB2elxkeENGybCnETfCqLY+xI34kVH2sH+07eUqVHAzGGY4vic5xOPcud2iRaDd1GwuUG4q9mUYUG4698wUN71sKCg3JXcdVeQV92g3Uknc0JZ0rVHgouAmzxW5Wbq1FWjIV3bDMxvG9bvp/k0Y2no35D7tXHOtu8lUOVhFvyA3u12DNLQscOhmnBBEuoGby3TGOYybMzLlPAs3NUnJWuCXH0r5g5Gx3g03SMk9e5a5uSVusmMaz4/LCfcQmrihyheCrYEndnP+85fqbX9qDX1eymvGNRq4yVHvhsxQYnBf0256pcTbdU3cfEzd9IJ++cRuyp9afvk1TNro2fNruRmR+AaxavbsOWru5uiZuSnhvEU322a1qnXzUcqG4v/VzasW3TR8z0S52f5U4ObmnnQb/lN4CXDz9d3wAmPrpUe9cpDCeIObp3BTg/gQbo6Cm4Tz1+UwrrHPfFOJIHZ/ir4YoN1IZXTFb9/N+e8/lsO4RoN12rCfEgS7mRvh7Db9loPa6+yXEyVv4qZPdlOD/bond/N9CQU3v+12jQb7Amfd5N7+FDwfNu030ug232/a2RdAVKyfwb7A+V//KeFd+Iqgjf20Ujck3uIOboJRbZybb1rasyHbAs9jr7MmaRt7ncJnZgpEbSsHt+kO7z2l3Lcc7bi5Jm7Y7wjyvPy9TvwoyWwZmXn5TjC8Z957Fvde6Del0dLv8W5YH2KejkmkX5qb399X8KWQkd5w74wug9dNmXdZw2vqW49cvxG21zmuxuPxBeUuty8gjHKvtrJk33v2Hm7yPDxs+S71WjVy/WLclK8aMN8xvhegvxsURIkfbbdn2wQ8o9PnxaDpdXs2pw+9bCgafssRTR7U9wK9yufaMEVYgRfkpgLGdzaFwFV8OsGLQY7a/TSqK+7khs+5qafkO5s8L9UNd9T8+zReCjLs8k76sG4Egf19Wp4X66bfPBjRZ5rPx41U8l1nnhfrZnDT5Ev1qGG57zrL3JDwHtSNeB892367brjTbbMvO4Vu+OngTu/WDuhGEE/iTaGn3hc4oBtucMKLtRERxG2k5mBu+OZuBEHsbcfJ5Z7GDdlB/qfOTTN+YOf+fHXW6YqdXro0y3z42hOlrnByPYwTH4vp3nHJW4VOsgEnRe/WTrqFbWfmTnQQ2G1N2m4XP+BsL65uya5B/xOpENPNmJT5qTqMzfnyLuXXmqTvmvG+JDs6HvYvbx6CB5tISdCOcB4abR8erm77Q9LowVFKn10aSRBO1qh/1IxBNi+bfh8/HmcUnFInB6z6DHMVeoG0/x9WAQAAAAAAAAAAAAAAgCcB9nMOh2mYe+XfTFuqCMXUarlAc2NyrvbibqOpbuxXwHLP/EUUT2m5RGOxQnbr9Tw05tJw9us42qqlqqSsJi0XiGzNMeZtdxslLhApdAAHLv3LTBIphSCbSgJ5r0GnUhQTo6SHkBLfsQOl+CIERSWZVBuTS1PVSw+ZdG2QZmguKzgoraFJDpGcg+Rv02SG1syVy6hQ+NPN/iw05BGYH6yogM0d3SMdmb6zpuom/Ne9Kwz9s4Usq6oqy3ckwwdyn6M7fAqzSA5pvhf9YS2KQ74Zpl6oKzLi+KoWX9pJGjqPc5rL9BCHJqru+bLNGPEnd3EN0zrgtq7T05ZsR3kcmzHODQxVxeU6WnrEUd2oIapDJzQWmZ/uImj13XyvGQg5XigcTWW6GNW3qfvA1Ofhr3mx+q5haJY+1QyDnJJJ1JG6wqcwbnxAs+3oD8svjiumagWp1zIZBG0vdqOmI8ba98NrmU56CNd+rWma4Xkul0fBNZzqFl1DQyf32MTzoorMnKIbZOlhufYyPTeLL+F6Mzrh0lMzFw1bYvmexu2BIYdxUHSHcjPx5irdRzfh3Wv47BWTpmbDTLuRc/NjtRs5bAruBGkJbDdhGZQbU12ZUU3WzBt1o2ZilHXjL8NozxluFD+6Sww97RUlbnDvotujyG5U69k+U62mh9dwZfqOm89db05f2sa9C639kiJadoOXUX4SYpYbZ+YHV6DcrOLYm/Ml081EzVQj48Y3/FAoy40WRwVN017BdjNz3JlN/Y7doLm6z4LQXMth4T7lRrGn3DTTR4PwG/k40ydp9nZjztQqN3hNFAyulBvHj1IhjT2GVLnRNSusJMvNKp5c8MCYHJrFy++sG2/KrZdU/nbc4Mkw6HbyFGUPWTrdTLRWkVO2Rqx0M0HBQo2kbeIG36aVbhQlqC7lxq4Z1yvduOY8GBBYbiy1MH/NPC1o0ECj3RiehVc51FI/cePv9/hgeOsgKtSqKezBij3LpnJKHyGr3KhLG0MGw1bcuNwM3zl5N9G6lVnD6n6Dx7Vpczd+2CJ76VPxmQaLT3o2VmQNIWQ6+oZZn8bM8Tw3s6kbT1OjPp5RvtZLnwAr3cxWGFLrltyYto/yboyFquqLneebYHxYe0bzfjMNWrRaU/1GcYLJmd7/UHR1sVioyz3VcDO8TnHomX+iW5PJxMkGDx8sK6D1+abeDbfRLZRzo2w2k7n6KDeKPEOsNTTTTXG+MfQZDphFdRJFXeEjm+KKfkdc1XKX5GGMQ56v44c1P9tRJo/rN49cC8h1btBaN+aF+Sb3lEYqX+OG28hGpRsyYzLWaWiqBwHTqclFkffWEiFbK53elcDxDL60dDIPci25cZ3YzZoxfZM1dLoUduIliUIeeUI3nLu0Sb+Z7rGGDi9gOr5TsYbGC8fkEMONok7DT1M1OS2hNTcz29apn84yvlUzcW3JTeJEsZ1iFBM3lpqODoa6QtGhtLGRG7yQ9FM3ihylMmT2wFvrhtOWPuvZU48uYZCJn+HGiEW4ejr6tOZG0TMP/H68nDZ9etH8SDfq2gpJO4mr25ZhTByZseo1o9QreZ3ug6KZPJ0YG3woHS9iN9zSp/dsphNNszybvWStd8NNWW7wxBeW6/hVezbLOCeuRXKoNTemvKCqZaV7gtYHqqXWXakb4y57t2b2OuVFAJXZVWXfl3XWA4kZppb1FT3CrmXVV2VqL2YeR0dbUHudK1n1/MW85GliktnIze513sVTlc/a60QrVfW8BbWKLe51og9J8627pL+7H/baSKMwmZvrB8M0dnsT6k6a3ITupK1wZFEmL+6VGQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAz4//AeReEmzbim5vAAAAAElFTkSuQmCC" alt="" />
                                </div>
<!--                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>-->
                            </a>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="data:image/png;base64,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" alt="" />
                                </div>
<!--                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>-->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="common/images/home/map.png" alt="" />
                        <p>68 Yenbai Street, Haichau District, Danang City, Vietnam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Best sellers</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Us</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/nguyenhoaivinh.19">Hoai Vinh Ng</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<script src="common/js/jquery.js"></script>
<script src="common/js/bootstrap.min.js"></script>
<script src="common/js/jquery.scrollUp.min.js"></script>
<script src="common/js/price-range.js"></script>
<script src="common/js/jquery.prettyPhoto.js"></script>
<script src="common/js/main.js"></script>

</html>
