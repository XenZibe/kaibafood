<!doctype html>
<html class="no-js" lang="en">
@include('templates.head')
<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="csi-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->
    @include('templates.nav')

    <!--Banner-->
    <section>
        <div class="csi-banner">
            <div class="csi-banner-style">
                <div class="csi-inner">
                    <div class="container">
                        <div class="csi-banner-content">
                            <h3 class="csi-subtitle">Hot & Spicy</h3>
                            <h2 class="csi-title">Delicious Food</h2>
                            <div class="btn-area">
                                <a class="csi-btn" href="#csi-reservation">Book A Table</a>
                                <a class="csi-btn csi-btn-white" href="#csi-menu">Our Menu</a>
                            </div>
                        </div>
                    </div>
                    <!-- //.container -->
                </div>
                <!-- //.INNER -->
            </div>
        </div>
    </section>
    <!--Banner END-->


    <!--ABOUT TOP-->
    <section>
        <div id="csi-about-top" class="csi-about-top">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="about-top-single">
                                <a href="#"><img src=assets/img/about-icon.png alt="about-icon"></a>
                                <h3 class="title"><a href="#">Dinner & Dessert</a></h3>
                                <p>Dinner & Desert? Make your own Menus on our platform! Sell whatever you want! It's yours!</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="about-top-single">
                                <a href="#"><img src=assets/img/about-icon2.png alt="about-icon"></a>
                                <h3 class="title"><a href="#">Clouds</a></h3>
                                <p>We're hosted in the cloud. This means chances of your platform going offline is <1%</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="about-top-single">
                                <a href="#"><img src=assets/img/about-icon3.png alt="about-icon"></a>
                                <h3 class="title"><a href="#">Healthy for Everyone</a></h3>
                                <p>We believe Consumers should have the option to order directly from you. Give them the healthy choice!</p>
                            </div>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--ABOUT TOP END-->

    <!--ABOUT-->
    <section>
        <div id="csi-about" class="csi-about">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading">
                                <h3 class="subtitle">About our History</h3>
                                <h2 class="title">Welcome to The {{ENV('APP_NAME')}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-about-content">
                                <p class="text">
                                    Founded in 2019, we pride ourselves on being a good looking platform, packed with functionality to take your business into the modern era. You'll be in good hands with our team ensuring your site stands out from the rest.
                                    Want to break your business away from the giants? Want to own your own ordering platform? Get in touch.
                                </p>
                                <img src="http://placehold.it/1141x311" alt="about team">
                            </div>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--ABOUT END-->

    <!--SPECIAL-->
    {{--<section>--}}
        {{--<div id="csi-special" class="csi-special">--}}
            {{--<div class="csi-inner">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="csi-heading">--}}
                                {{--<h3 class="subtitle">Special Food Items</h3>--}}
                                {{--<h2 class="title">Chef Selection</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="csi-special-content">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">Mexican Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">Burger Mexicana</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">Italian Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">Chocolate Milkshake</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">Mexican Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">Black Bean Burger</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">Indian Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">Lagrotas Nanos</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">American Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">American Humburger</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                            {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                                {{--<div class="csi-special-single">--}}
                                    {{--<figure>--}}
                                        {{--<a href="#"><img src="http://placehold.it/600x600" alt="Special Food"></a>--}}
                                        {{--<figcaption>--}}
                                            {{--<div class="csi-hover-link">--}}
                                                {{--<div class="csi-vertical">--}}
                                                    {{--<a href="single-item.html">--}}
                                                        {{--<i class="fa fa-cutlery" aria-hidden="true"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</figcaption>--}}
                                    {{--</figure>--}}
                                    {{--<div class="single-info">--}}
                                        {{--<div class="price-area">--}}
                                            {{--<h3 class="price">558 <span>$</span></h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="speacial-info">--}}
                                            {{--<h4 class="subtitle">Mexican Food</h4>--}}
                                            {{--<h3 class="title"><a href="single-item.html">Burger Mexicana</a></h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div><!--//.csi-special-single-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!--//.csi-special-content-->--}}
                {{--</div><!-- //.CONTAINER -->--}}
            {{--</div><!-- //.INNER -->--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--SPECIAL END-->


    <!--MENU ITEMS-->
    {{--<section>--}}
        {{--<div id="csi-menu" class="csi-menu">--}}
            {{--<div class="csi-inner">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="csi-heading">--}}
                                {{--<h3 class="subtitle">Food Recipe Items</h3>--}}
                                {{--<h2 class="title">Menu Of The Day</h2>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12">--}}

                            {{--<div class="csi-nav-pills-area">--}}
                                {{--<ul class="nav nav-pills csi-nav-pills">--}}
                                    {{--<li class="active"><a data-toggle="pill" href="#home"><img src="assets/img/tab-menu1.png" alt=""> Speacial</a></li>--}}
                                    {{--<li><a data-toggle="pill" href="#menu1"><img src="assets/img/tab-menu2.png" alt=""> Breakfast</a></li>--}}
                                    {{--<li><a data-toggle="pill" href="#menu2"><img src="assets/img/tab-menu3.png" alt=""> Lunch</a></li>--}}
                                    {{--<li><a data-toggle="pill" href="#menu3"><img src="assets/img/tab-menu4.png" alt=""> Dinner</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="tab-content csi-tab-content">--}}
                                {{--<div id="home" class="tab-pane fade in active">--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Chocolate Milkshake</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Caesar Salad</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--70<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Black Bean Burger</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">American Humburger</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--40<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Burger Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--40<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                {{--</div>--}}
                                {{--<div id="menu1" class="tab-pane fade">--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                {{--</div>--}}
                                {{--<div id="menu2" class="tab-pane fade">--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                {{--</div>--}}
                                {{--<div id="menu3" class="tab-pane fade">--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Pizza Mexicana</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                    {{--<div class="csi-single-tab">--}}
                                        {{--<div class="menu-thumb">--}}
                                            {{--<a href="single-item.html"><img src="http://placehold.it/600x600" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu-content">--}}
                                            {{--<div class="csi-info">--}}
                                                {{--<div class="title-area">--}}
                                                    {{--<h3 class="title"><a href="single-item.html">Black Bean Burger</a></h3>--}}
                                                    {{--<p class="price">--}}
                                                        {{--150<span>$</span>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<p class="text">--}}
                                                    {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.--}}
                                                {{--</p>--}}
                                            {{--</div> <!--//.single tab-->--}}
                                        {{--</div>--}}
                                    {{--</div><!--//.csi-single-tab-->--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- //.CONTAINER -->--}}
            {{--</div><!-- //.INNER -->--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--MENU ITEMS END-->


    <!--RESERVATION-->
    <section>
        <div id="csi-reservation" class="csi-reservation">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading">
                                <h3 class="subtitle">Book A Table New</h3>
                                <h2 class="title">{{ENV('APP_NAME')}} Reservation</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-reservaton-area">
                                <figure>
                                    <a href="#"><img src="http://placehold.it/1140x638" alt="Special Food"></a>
                                    <figcaption>

                                        <form id="foodiebooking">
                                            <div class="form-group  csi-form-left">
                                                <input class="form-control" name="fb_name" id="foodiebooking_name" placeholder="Enter Your Name" aria-required="true" type="text">
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <input class="form-control" name="fb_email" id="foodiebooking_email" placeholder="Email Address" aria-required="true" type="email">
                                            </div>
                                            <div class="form-group csi-form-left">
                                                <input class="form-control" name="fb_phone" id="foodiebooking_phone" placeholder="Telephone Number" type="text">
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <select class="form-control" name="fb_person" id="foodiebooking_person" aria-required="true">
                                                    <option value="">Number of Guests</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="8">9</option>
                                                    <option value="10">10</option>
                                                    <option value="more">More than 10</option>
                                                </select>
                                            </div>
                                            <div class="form-group csi-form-full csi-form-left">
                                                <div class="input-group date" id="datetimepicker2">
                                                    <input name="fb_date" id="foodiebooking_date" class="form-control" placeholder="Date format ( mm-dd-yyyy )." aria-required="true" type="text">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group csi-form-right">
                                                <select class="form-control" name="fb_time" id="foodiebooking_time" aria-required="true">
                                                    <option value="">Time</option>
                                                    <option value="1">Breakfast</option>
                                                    <option value="2">Lunch</option>
                                                    <option value="3">Dinner</option>
                                                </select>
                                            </div>
                                            <div class="csi-form-group">
                                                <input id="fb_submit" class="csi-btn csi-submit" value="Booking Submit" type="submit">
                                            </div>
                                        </form>
                                    </figcaption>
                                </figure>
                                <div class="call-phone">
                                    <h4 class="title">Or Call Now</h4>
                                    <ul class="list-inline">
                                        <li>+12345 678 555</li>
                                        <li>+12345 678 556</li>
                                        <li>+12345 678 557</li>
                                    </ul>
                                </div>
                            </div> <!--//.reservaton-area-->
                        </div>
                    </div>

                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--RESERVATION END-->


    <!--MILESTONE-->
    {{--<section>--}}
        {{--<div id="csi-milestone-about" class="csi-milestone-about">--}}
            {{--<div class="csi-inner">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="csi-milestone-area">--}}
                                {{--<div class="csi-milestone">--}}
                                    {{--<div class="milestone-inner">--}}
                                        {{--<div class="csi-content">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<div class="csi-counter-area">--}}
                                                        {{--<img src="http://placehold.it/70x70" alt="milestone icon">--}}
                                                        {{--<div class="counter-text">--}}
                                                            {{--<small>Competition Winner</small>--}}
                                                            {{--<span class="csi-counter">500</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div> <!--//.COL-->--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<div class="csi-counter-area">--}}
                                                        {{--<img src="http://placehold.it/70x70" alt="milestone icon">--}}
                                                        {{--<div class="counter-text">--}}
                                                            {{--<small>Year of Experience</small>--}}
                                                            {{--<span class="csi-counter">12</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div> <!--//.COL-->--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<div class="csi-counter-area">--}}
                                                        {{--<img src="http://placehold.it/70x70" alt="milestone icon">--}}
                                                        {{--<div class="counter-text">--}}
                                                            {{--<small>Regular Clients</small>--}}
                                                            {{--<span class="csi-counter">7896</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div> <!--//.COL-->--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<div class="csi-counter-area">--}}
                                                        {{--<img src="http://placehold.it/70x70" alt="milestone icon">--}}
                                                        {{--<div class="counter-text">--}}
                                                            {{--<small>Skilled Chefs</small>--}}
                                                            {{--<span class="csi-counter">600</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div> <!--//.COL-->--}}
                                            {{--</div> <!--//.ROW-->--}}
                                        {{--</div> <!--//. csi CONTENT CONTENT-->--}}
                                    {{--</div><!--//.csi INNER-->--}}
                                {{--</div><!--//.Milestone End -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="csi-video-area">--}}
                                {{--<figure>--}}
                                    {{--<a href="#"><img src="http://placehold.it/1000x614" alt="Special Food"></a>--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="video-icon">--}}
                                            {{--<div class="csi-vertical">--}}
                                                {{--<a id="myModalLabel" class="icon" href="#" data-toggle="modal" data-target="#csi-modal">--}}
                                                    {{--<i class="fa fa-play" aria-hidden="true"></i>--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                                {{--<!-- Modal-->--}}
                                {{--<div id="csi-modal" class="modal fade csi-modal">--}}
                                    {{--<div class="modal-dialog">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<div class="modal-header">--}}
                                                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-body">--}}
                                                {{--<iframe id="modalvideo" src="https://www.youtube.com/embed/5mIdto_5z6c" allowfullscreen></iframe>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div> <!-- //.Modal-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- //.CONTAINER -->--}}
            {{--</div><!-- //.INNER -->--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--MILESTONE END-->


    <!--FEEDBACK-->
    <section>
        <div id="csi-feedback" class="csi-feedback">
            <div class="csi-feedback-bg">
                <div class="csi-testi-feedback">
                    <div class="feedback-inner-bg">
                        <div class="feedback-inner">
                            <div class="csi-heading">
                                <h2>Reviews</h2>
                            </div>
                            <div id="csi-owltestimonial" class="owl-carousel csi-owltestimonial">
                                @forelse($reviews as $r)
                                    <div class="item">
                                        <figure class="csi-client-image">
                                            <img src="http://placehold.it/400x400" alt="testpersion1"/>
                                        </figure>
                                        <div class="testi-info-area">
                                            <p class="csi-review">
                                                Absolutely Fantastic
                                            </p>
                                            <h4 class="csi-client-name">Jonathon Doe</h4>
                                        </div>
                                    </div> <!--//.Item-->
                                @empty
                                    <div class="item">
                                        <figure class="csi-client-image">
                                            <img src="http://placehold.it/400x400" alt="testpersion1"/>
                                        </figure>
                                        <div class="testi-info-area">
                                            <p class="csi-review">
                                                No Reviews Available
                                            </p>
                                            <h4 class="csi-client-name">No Reviews</h4>
                                        </div>
                                    </div> <!--//.Item-->
                                    <div class="item">
                                        <figure class="csi-client-image">
                                            <img src="http://placehold.it/400x400" alt="testpersion1"/>
                                        </figure>
                                        <div class="testi-info-area">
                                            <p class="csi-review">
                                                Why not leave a review?
                                            </p>
                                            <h4 class="csi-client-name">No Reviews</h4>
                                        </div>
                                    </div> <!--//.Item-->
                                    <div class="item">
                                        <figure class="csi-client-image">
                                            <img src="http://placehold.it/400x400" alt="testpersion1"/>
                                        </figure>
                                        <div class="testi-info-area">
                                            <p class="csi-review">
                                                We and our customers want to know what you think about us!
                                            </p>
                                            <h4 class="csi-client-name">No Reviews</h4>
                                        </div>
                                    </div> <!--//.Item-->
                                @endforelse
                            </div><!--l//#csi-OWL TESTIMONIAL-->
                        </div>
                    </div>
                </div> <!--//.Testimonials-->
                <div class="csi-twitter-feedback">
                    <div class="feedback-inner">
                        <div class="csi-heading">
                            <h2>Latest Twitter Updates</h2>
                        </div>
                        <div class="csi-feed-display">
                            <div class="csi-tweet-feed" id="tweetiefeed"></div> <!--//FEED-->
                        </div>
                    </div>
                </div> <!--//.Testimonials-->
            </div>

        </div>
    </section>
    <!--FEEDBACK END-->


    <!--Subscribe-->
    <section>
        <div id="csi-subscribtion" class="csi-subscribtion">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading">
                                <h3 class="subtitle">Join Our Mailing List!</h3>
                                <h2 class="title">Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="csi-subscribe-area">
                                <p class="text">If you want to receive the latest news, offers and service information,<br> please subscribe to us.</p>
                                <div class="subscribe-form">
                                    <form class="subscribe-form-action csi-subscribe-form" action="#">
                                        <div class="form-group csi-subscribe-input">
                                            <input type="email" id="subscribe" class="csi-input csi-input-form form-control" required="required" placeholder="Enter Email Address ...">
                                        </div>
                                        <div class="form-group csi-subscribe-btn">
                                            <button class="csi-btn csi-submit csi-submit-btn" name="csi-submit" type="submit">Subscribe <i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--Subscribe END-->



    <footer>
        <div id="csi-footer" class="csi-footer">
            <div class="csi-inner">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <div class="single">
                                    <h3 class="title">Contact</h3>
                                    <p>8 Clarance Street</p>
                                    <p>sean@streambit.tv</p>
                                    <p>Registered in Scotland, Company Registration No SC 644379</p>
                                </div>
                            </div> <!--//.col-->
                            <div class="col-xs-12 col-sm-3">
                                <div class="single">
                                    <h3 class="title">Book a Demo</h3>
                                    <p>Feel free to give me a call if you'd like some more information!</p>
                                    <p>Mobile: +447403105346</p>
                                </div>
                            </div> <!--//.col-->
                            <div class="col-xs-12 col-sm-3">
                                <div class="single">
                                    <h3 class="title">Opening Times</h3>
                                    <p>{{ENV('APP_OPENING_TIMES')}}</p>

                                </div>
                            </div> <!--//.col-->
                            <div class="col-xs-12 col-sm-3">
                                <div class="single">
                                    <h3 class="title">Social Links</h3>
                                    <ul class="list-inline footer-social">
                                        <li><a href="https://twitter.com/streambittv"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://facebook.com/streambittv"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!--//.col-->
                        </div> <!--//.main row-->
                    </div><!-- //.CONTAINER -->
                </div>
                <div class="csi-footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>{{ENV('APP_NAME')}} is proudly powered by <a href="https://streambit.tv">StreamBitTV LTD</a> | <i class="fa fa-copyright" aria-hidden="true"></i> 2019 all rights reserved by StreamBitTV Ltd</p>
                            </div>
                        </div><!--//.ROW-->
                    </div><!-- //.CONTAINER -->
                </div><!-- //.INNER-->
            </div>
        </div>
    </footer>


</div> <!--//.csi SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- bootstrap date picker js with moment js -->
<script src="assets/libs/datepicker/moment-with-locales.min.js"></script>
<script src="assets/libs/datepicker/bootstrap-datetimepicker.min.js"></script>


<!-- SKILLS SCRIPT  -->
<script src="assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>


<!-- tweetie feed js  -->
<script src="tweetie/tweetie.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- type js -->
<script src="assets/libs/typed/typed.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="assets/libs/jquery.easing.min.js"></script>

<!-- Counter JS -->
<script src="assets/libs/waypoints.min.js"></script>
<script src="assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>


</body>
</html>
