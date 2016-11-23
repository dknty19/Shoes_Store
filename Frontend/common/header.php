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
                        
                               <div class="col-md-8" style="padding-top: 20px"><!--login-->
                            <div class="shop-menu pull-right">
                                <ul class="short-username">
                                    <li style="padding-right: 5px"><span>Chào,</span></li>
                                    <li style="padding-left: 0; text-transform: uppercase"><span><?=$row['username']?></span></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                </ul>
                                <div style="padding-left: 70px">
                                <form action="index.php" method="post">
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
                                <li><a href="about.php">About</a></li>
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
