@extends('front-end.master')
@section('title')
    Home
@endsection
@section('body')


    <!-- HEADER END HERE -->

    <!-- HERO AREA START HERE -->
    <section class="hero-area overly-bg" data-stellar-background-ratio=".9"
             style="background-image: url({{ asset('/') }}front-end/images/banner/hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-wrap">
                        <h2 class="hero-title">785500+ Items For Sale</h2>
                        <p class="hero-intro">We Are specialize in creating some of the Best Free and Premium Bootstrap
                            PSD Templates, HTML Templates, Wordpress Themes & Others Graphics</p>
                        <form action="#" class="item-search">
                            <input type="text" placeholder="Search your Items">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO AREA END HERE -->

    <!-- FREATURE PRODUCT AREA START HERE -->
    <section class="feature-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-intro">
                        <h2 class="section-title">Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-4">
                    <div class="item-demo">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item1.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="{{route ('/product-details')}}">View Details <span><i
                                                            class="fa fa-eye"></i></span></a>
                                            </div>
                                            <div>
                                                <a href="cart.html">Add to Cart<span><i class="fa fa-shopping-cart"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <div class="product-header">
                                <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                        Template</a> <span>$20</span></h3>
                                <span class="p-author">
                                    <a href="#">@andarson</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>102
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>23500
                                </span>
                                <span class="meta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    (35)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-4">
                    <div class="item-demo">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item2.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="{{route ('/product-details')}}">View Details <span><i
                                                            class="fa fa-eye"></i></span></a>
                                            </div>
                                            <div>
                                                <a href="cart.html">Add to Cart<span><i class="fa fa-shopping-cart"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <div class="product-header">
                                <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                        Template</a> <span>$20</span></h3>
                                <span class="p-author">
                                    <a href="#">@andarson</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>102
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>23500
                                </span>
                                <span class="meta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    (35)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-4">
                    <div class="item-demo">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item3.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="{{route ('/product-details')}}">View Details <span><i
                                                            class="fa fa-eye"></i></span></a>
                                            </div>
                                            <div>
                                                <a href="cart.html">Add to Cart<span><i class="fa fa-shopping-cart"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <div class="product-header">
                                <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                        Template</a> <span>$20</span></h3>
                                <span class="p-author">
                                    <a href="#">@andarson</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>102
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>23500
                                </span>
                                <span class="meta-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    (35)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>
        </div>
    </section>
    <!-- FREATURE PRODUCT AREA END HERE -->

    <!-- NEW PRODUCT AREA START HERE -->
    <section class="new-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-intro">
                        <h2 class="section-title">new Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="n-prodruct-wrap">
                    <div class="n-product-list">
                        <ul>
                            <li class="active" data-filter="*"><a href="#">All</a>
                            </li>
                            <li data-filter=".cat1"><a href="#">Logo</a></li>
                            <li data-filter=".cat2"><a href="#">Business Card</a></li>
                            <li data-filter=".cat3"><a href="#">Flyer</a></li>
                            <li data-filter=".cat4"><a href="#">Brochure</a></li>
                            <li data-filter=".cat5"><a href="#">Poster</a></li>
                            <li data-filter=".cat6"><a href="#">Mock UP</a></li>
                        </ul>
                    </div>
                    <!-- Product Container Start -->
                    <div class="product-container">
                        <div class="single-new cat1 cat5">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item4.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>Free</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                        <div class="single-new cat2 cat4">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item5.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>Free</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                        <div class="single-new cat3 cat5">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item6.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>$25</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                        <div class="single-new cat3 cat6">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item7.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>$25</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                        <div class="single-new cat4 cat3">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item8.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>Free</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                        <div class="single-new cat3 cat1">
                            <figure>
                                <img src="{{ asset('/') }}front-end/images/product/item9.jpg" alt="">
                                <div class="product-caption">
                                    <div class="caption-cel">
                                        <div class="product-link">
                                            <div>
                                                <div>
                                                    <a href="{{route ('/product-details')}}">View Details <span><i
                                                                class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div>
                                                    <a href="cart.html">Add to Cart<span><i
                                                                class="fa fa-shopping-cart"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <div class="product-header">
                                    <h3 class="product-name"><a href="{{route ('/product-details')}}">Market Place PSD
                                            Template</a> <span>$25</span></h3>
                                    <span class="p-author">
                                        <a href="#">@andarson</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <span class="meta-download">
                                        <i class="fa fa-cloud-download"></i>102
                                    </span>
                                    <span class="meta-love">
                                        <i class="fa fa-heart"></i>23500
                                    </span>
                                    <span class="meta-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        (35)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single New Product End -->
                    </div>
                    <!-- Product Container End -->
                    <div class="product-button">
                        <button class="custom-btn">View All Products</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATEAR AREA END HERE -->

    <!-- SERVICE-1 AREA START HERE -->
    <section class="sevice-1-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-intro">
                        <h2 class="section-title">Our Custom Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-1">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv1.png" alt="">
                        </div>
                        <h3 class="service-headline">UI/UX Design</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-2">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv2.png" alt="">
                        </div>
                        <h3 class="service-headline">PSD to HTML</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-3">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv3.png" alt="">
                        </div>
                        <h3 class="service-headline">Wordpress Customization</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-4">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv4.png" alt="">
                        </div>
                        <h3 class="service-headline">Theme Development</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-5">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv5.png" alt="">
                        </div>
                        <h3 class="service-headline">Responsive Web</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-6">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv6.png" alt="">
                        </div>
                        <h3 class="service-headline">Mobile App Design</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-7">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv7.png" alt="">
                        </div>
                        <h3 class="service-headline">Logo design</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-8">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv8.png" alt="">
                        </div>
                        <h3 class="service-headline">Branding Design</h3>
                    </div>
                </div>
                <!-- Service Entry End -->
                <div class="col-md-12 col-sm-12">
                    <div class="survice-button">
                        <button class="custom-btn">Create Your Custom Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE-1 AREA END HERE -->

    <!-- CHOOSING AREA START HERE -->
    <section class="choose-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-intro">
                        <h2 class="section-title">WHY YOU SHOULD CHOOSE US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus.</p>
                    </div>
                    <div class="choose-wrap owl-carousel owl-theme">
                        <div class="choose-entry color-1">
                            <span class="choose-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Great Support</h4>
                                <p>We offer quick and professional support, with satisfaction.
                                </p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                        <div class="choose-entry color-2">
                            <span class="choose-icon">
                                <i class="fa fa-heart"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Beautiful Themes</h4>
                                <p>Our Themes are clean, will surely make your site stand out.
                                </p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                        <div class="choose-entry color-3">
                            <span class="choose-icon">
                                <i class="fa fa-globe"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Excellent Quality</h4>
                                <p>We create high quality and professional looking Templates.</p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                        <div class="choose-entry color-1">
                            <span class="choose-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Great Support</h4>
                                <p>We offer quick and professional support, with satisfaction.
                                </p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                        <div class="choose-entry color-2">
                            <span class="choose-icon">
                                <i class="fa fa-heart"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Beautiful Themes</h4>
                                <p>Our Themes are clean, will surely make your site stand out.
                                </p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                        <div class="choose-entry color-3">
                            <span class="choose-icon">
                                <i class="fa fa-globe"></i>
                            </span>
                            <div class="choose-info">
                                <h4>Excellent Quality</h4>
                                <p>We create high quality and professional looking Templates.</p>
                            </div>
                        </div>
                        <!-- Choose Entry End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHOOSING AREA END HERE -->

    <!-- CLIENT AREA START HERE -->
    <section class="client-area overly-bg" data-stellar-background-ratio="0.6"
             style="background-image: url({{ asset('/') }}front-end/images/client/client-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="client-wrap owl-carousel">
                        <div class="single-quote">
                            <div class="quote-thumb">
                                <img src="{{ asset('/') }}front-end/images/client/cl1.jpg" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium</p>
                            <div class="client-name">
                                <h5>albert Hunter</h5>
                                <span>CEO, Jhon Heart, Austalia</span>
                            </div>
                        </div>
                        <!-- Singel Quote End -->
                        <div class="single-quote">
                            <div class="quote-thumb">
                                <img src="{{ asset('/') }}front-end/images/team/tm1.jpg" alt="">
                            </div>
                            <p>consectetur adipisicing elit. Optio omnis possimus accusamus autem odio, nisi iusto nihil
                                illo harum, tempore soluta minus nemo ab at ipsa reprehenderit facilis officiis
                                dolorum?</p>
                            <div class="client-name">
                                <h5>albert Hunter</h5>
                                <span>CEO, Jhon Heart, Austalia</span>
                            </div>
                        </div>

                        <div class="single-quote">
                            <div class="quote-thumb">
                                <img src="{{ asset('/') }}front-end/images/client/cl1.jpg" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium</p>
                            <div class="client-name">
                                <h5>albert Hunter</h5>
                                <span>CEO, Jhon Heart, Austalia</span>
                            </div>
                        </div>
                        <!-- Singel Quote End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CLIENT AREA END HERE -->

    <!-- PROMO AREA START HERE -->
    <section class="promo-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <span class="promo-icon"><i class="fa fa-laptop"></i></span>
                        <h3 class="promo-heading">High Quality Products</h3>
                        <p>Product made BY professionals with 5 years of work experience.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <span class="promo-icon"><i class="fa fa-clock-o"></i></span>
                        <h3 class="promo-heading">24/7 Customer Services</h3>
                        <p>Our Customer Services Managers will always help you.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <span class="promo-icon"><i class="fa fa-thumbs-o-up"></i></span>
                        <h3 class="promo-heading">100% Satisfaction</h3>
                        <p>In case you are not satisfied with the purchased product, we’ll change it.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <span class="promo-icon"><i class="fa fa-money"></i></span>
                        <h3 class="promo-heading">Money Back guarantee</h3>
                        <p>In case you change your mind you’ll get a refund in 30 days.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
