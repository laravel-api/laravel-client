<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <title>
            @yield('tittle')
        </title>
        <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/font-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/prettyPhoto.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/price-range.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/animate.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/main.css') }}" rel="stylesheet"/>
        <link href="{{ asset('../css/responsive.css') }}" rel="stylesheet"/>
    </head>
    <!--/head-->
    <body>
        <header id="header">
            <!--header-->
            <div class="header_top">
                <!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-phone">
                                            </i>
                                            +2 95 01 88 821
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope">
                                            </i>
                                            info@domain.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->
            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="#">
                                    <img alt="" src="{{ asset('../images/home/logo.png') }}"/>
                                </a>
                            </div>
                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" type="button">
                                        USA
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Canada
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                UK
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle usa" data-toggle="dropdown" type="button">
                                        DOLLAR
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Canadian Dollar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Pound
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user">
                                            </i>
                                            Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star">
                                            </i>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-crosshairs">
                                            </i>
                                            Checkout
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart">
                                            </i>
                                            Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-lock">
                                            </i>
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-middle-->
            <div class="header-bottom">
                <!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                                    <span class="sr-only">
                                        Toggle navigation
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                    <span class="icon-bar">
                                    </span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li>
                                        <a class="active" href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            Shop
                                        </a>
                                        <ul class="sub-menu" role="menu">
                                            <li>
                                                <a href="#">
                                                    Products
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Product Details
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Checkout
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Login
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            Blog
                                        </a>
                                        <ul class="sub-menu" role="menu">
                                            <li>
                                                <a href="#">
                                                    Blog List
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Blog Single
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            404
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input placeholder="Search" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>
        <!--/header-->
        <section id="slider">
            <!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel slide" data-ride="carousel" id="slider-carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#slider-carousel">
                                </li>
                                <li data-slide-to="1" data-target="#slider-carousel">
                                </li>
                                <li data-slide-to="2" data-target="#slider-carousel">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1>
                                            <span>
                                                E
                                            </span>
                                            -SHOPPER
                                        </h1>
                                        <h2>
                                            Free E-Commerce Template
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <button class="btn btn-default get" type="button">
                                            Get it now
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img alt="" class="girl img-responsive" src="{{ asset('images/home/girl1.jpg') }}"/>
                                        <img alt="" class="pricing" src="{{ asset('images/home/pricing.png') }}"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1>
                                            <span>
                                                E
                                            </span>
                                            -SHOPPER
                                        </h1>
                                        <h2>
                                            100% Responsive Design
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <button class="btn btn-default get" type="button">
                                            Get it now
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img alt="" class="girl img-responsive" src="{{ asset('images/home/girl2.jpg') }}"/>
                                        <img alt="" class="pricing" src="{{ asset('images/home/pricing.png') }}"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1>
                                            <span>
                                                E
                                            </span>
                                            -SHOPPER
                                        </h1>
                                        <h2>
                                            Free Ecommerce Template
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <button class="btn btn-default get" type="button">
                                            Get it now
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img alt="" class="girl img-responsive" src="{{ asset('images/home/girl3.jpg') }}"/>
                                        <img alt="" class="pricing" src="{{ asset('images/home/pricing.png') }}"/>
                                    </div>
                                </div>
                            </div>
                            <a class="left control-carousel hidden-xs" data-slide="prev" href="#slider-carousel">
                                <i class="fa fa-angle-left">
                                </i>
                            </a>
                            <a class="right control-carousel hidden-xs" data-slide="next" href="#slider-carousel">
                                <i class="fa fa-angle-right">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/slider-->
        @yield('content')
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">
                        Copyright © 2013 E-SHOPPER Inc. All rights reserved.
                    </p>
                    <p class="pull-right">
                        Designed by
                        <span>
                            <a href="http://www.themeum.com" target="_blank">
                                Themeum
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
<!--/Footer-->
<script src="{{ asset('js/jquery.js') }}">
</script>
<script src="{{ asset('js/bootstrap.min.js') }}">
</script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}">
</script>
<script src="{{ asset('js/price-range.js') }}">
</script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}">
</script>
<script src="{{ asset('js/main.js') }}">
</script>
