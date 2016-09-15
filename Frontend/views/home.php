<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Amazon.com</title>
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
        <link rel="icon" href="common/images/home/logo title.png" type="image/x-icon">
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
                    <div class="row" style="padding-bottom: 0px">
                        <div class="col-md-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="common/images/home/logo.png" alt=""  /></a>
                            </div>
                            <!--                            <div class="btn-group pull-right">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                                    USA
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Canada</a></li>
                                                                    <li><a href="#">UK</a></li>
                                                                </ul>
                                                            </div>
                            
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                                    DOLLAR
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Canadian Dollar</a></li>
                                                                    <li><a href="#">Pound</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>-->
                        </div>
                        <div class="col-md-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <form action="checklogin.php" method="post">
                                        <input type="text" name="username" placeholder="Username"> 
                                        <input type="password" name ="passwork" placeholder="Password">
                                        <input type="submit" name="submit" value="Login">
                                    </form>
                                    <li><a href="register.html"><i class="fa fa-registered"></i> Register</a></li>
                                    <li><a href="#"><i class="fa fa-question"></i>Forgot your password?</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li><!--
                                    <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom" style="padding-top: 10px; padding-bottom: 10px"><!--header-bottom-->
            <div class="container">
                <div class="row" >
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="#">About</a></li>
<!--                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li> 
                                        <li><a href="checkout.html">Checkout</a></li> 
                                        <li><a href="cart.html">Cart</a></li> 
                                        <li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> -->
                                <li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">All shoes</a></li>
                                        <li><a href="#">Running</a></li>
                                        <li><a href="#">Gym</a></li>
                                        <li><a href="#">Football</a></li>
                                        <li><a href="#">Golf</a></li>
                                        <li><a href="#">Tennis</a></li>
                                        <li><a href="#">Life style</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Popular</a></li>
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
                                    <h2>Category</h2>
                                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                        <span class="badge pull-right"></span>
                                                        Running
                                                    </a>
                                                </h4>
                                            </div>
                                            <!--                                    <div id="sportswear" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <ul>
                                                                                            <li><a href="#">Nike </a></li>
                                                                                            <li><a href="#">Under Armour </a></li>
                                                                                            <li><a href="#">Adidas </a></li>
                                                                                            <li><a href="#">Puma</a></li>
                                                                                            <li><a href="#">ASICS </a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>-->
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                        <span class="badge pull-right"></span>
                                                        Gym
                                                    </a>
                                                </h4>
                                            </div>
                                            <!--                                    <div id="mens" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <ul>
                                                                                            <li><a href="#">Fendi</a></li>
                                                                                            <li><a href="#">Guess</a></li>
                                                                                            <li><a href="#">Valentino</a></li>
                                                                                            <li><a href="#">Dior</a></li>
                                                                                            <li><a href="#">Versace</a></li>
                                                                                            <li><a href="#">Armani</a></li>
                                                                                            <li><a href="#">Prada</a></li>
                                                                                            <li><a href="#">Dolce and Gabbana</a></li>
                                                                                            <li><a href="#">Chanel</a></li>
                                                                                            <li><a href="#">Gucci</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>-->
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                        <span class="badge pull-right"></span>
                                                        Football
                                                    </a>
                                                </h4>
                                            </div>
<!--                                            <div id="womens" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li><a href="#">Fendi</a></li>
                                                        <li><a href="#">Guess</a></li>
                                                        <li><a href="#">Valentino</a></li>
                                                        <li><a href="#">Dior</a></li>
                                                        <li><a href="#">Versace</a></li>
                                                    </ul>
                                                </div>
                                            </div>-->
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Basketball</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Golf</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Tennis</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Lifestyle</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Sandals</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">Popular</a></h4>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#">All Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div><!--/category-products-->

                                    <div class="brands_products"><!--brands_products-->
                                        <h2>Brands</h2>
                                        <div class="brands-name">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                                                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                                                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                                                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                            </ul>
                                        </div>
                                    </div><!--/brands_products-->

                                    <div class="price-range"><!--price-range-->
                                        <h2>Price Range</h2>
                                        <div class="well text-center">
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                                        </div>
                                    </div><!--/price-range-->

                                    <div class="shipping text-center"><!--shipping-->
                                        <img src="common/images/home/shipping.jpg" alt="" />
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
<!--                                                <div class="row">
                                                    <h1><span></span>-SHOPPER</h1>
                                                    <h2>Free E-Commerce Template</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                    <button type="button" class="btn btn-default get">Get it now</button>
                                                </div>-->
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main.jpg" class="girl img-responsive" alt="" />
                                                    <!--<img src="common/images/home/pricing.png"  class="pricing" alt="" />-->
                                                </div>
                                            </div>
                                            <div class="item">
<!--                                                <div class="row">
                                                    <h1><span>E</span>-SHOPPER</h1>
                                                    <h2>100% Responsive Design</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                    <button type="button" class="btn btn-default get">Get it now</button>
                                                </div>-->
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main-slide.jpg" class="girl img-responsive" alt="" />
                                                    <!--<img src="common/images/home/pricing.png"  class="pricing" alt="" />-->
                                                </div>
                                            </div>

                                            <div class="item">
<!--                                                <div class="col-md-6">
                                                    <h1><span>E</span>-SHOPPER</h1>
                                                    <h2>Free Ecommerce Template</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                                    <button type="button" class="btn btn-default get">Get it now</button>
                                                </div>-->
                                                <div class="row">
                                                    <img src="common/images/home/shoes-main-slide1.jpg" class="girl img-responsive" alt="" />
                                                    <!--<img src="common/images/home/pricing.png" class="pricing" alt="" />-->
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
                                                        <!-- Featured Item -->
                                                        <?php include 'products/featured_products.php'; ?>
                                                        <?php include 'products/new_products.php'; ?>
                                                        <div class="category-tab"><!--category-tab-->
                                                            <div class="col-sm-12">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active"><a href="#tshirt" data-toggle="tab">Best seller</a></li>
                                                                    <li><a href="#blazers" data-toggle="tab">Most view</a></li>
                                                                    <li><a href="#sunglass" data-toggle="tab">Discount</a></li>
                                                                    <li><a href="#kids" data-toggle="tab">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade active in" id="tshirt" >
                                                                    <div class="col-sm-3">
                                                                        <div class="product-image-wrapper">
                                                                            <div class="single-products">
                                                                                <div class="productinfo text-center">
                                                                                    <img src="common/images/home/gallery1.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <img src="common/images/home/gallery4.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <img src="common/images/home/gallery3.jpg" alt="" />
                                                                                    <h2>$56</h2>
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                    <p>Easy Polo Black Edition</p>
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
                                                                                        <img src="common/images/home/recommend1.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="common/images/home/recommend2.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="common/images/home/recommend3.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
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
                                                                                        <img src="common/images/home/recommend1.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="common/images/home/recommend2.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="product-image-wrapper">
                                                                                <div class="single-products">
                                                                                    <div class="productinfo text-center">
                                                                                        <img src="common/images/home/recommend3.jpg" alt="" />
                                                                                        <h2>$56</h2>
                                                                                        <p>Easy Polo Black Edition</p>
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
                                    <img src="common/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="common/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="common/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="common/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="common/images/home/map.png" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
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
                            <li><a href="#">T-Shirt</a></li>
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
                        <h2>About Shopper</h2>
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
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
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
</body>
</html>