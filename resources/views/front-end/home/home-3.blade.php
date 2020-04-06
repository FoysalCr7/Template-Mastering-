@extends('front-end.master')
@section('title')
    Home-3
@endsection
@section('body')



    <!-- MOBILE-MENU-AREA START -->
    <div class="mobile-menu-area">
        <div class="mobile-menu">
            <div class="m-logo">
                <a href="#"><img src="{{ asset('/') }}front-end/images/logo.png" alt="">
                </a>
            </div>
            <nav id="dropdown">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="product.html">All Products</a>
                        <ul class="sub-menu">
                            <li><a href="#">Wordpress themes</a>
                            </li>
                            <li><a href="#">HTML Templates</a>
                            </li>
                            <li><a href="#">PSD templates</a>
                            </li>
                            <li><a href="#">Print items</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="mega-menu">
                            <li>
                                <a href="index.html">Home-V1</a>
                                <a href="home-2.html">Home-V2</a>
                                <a href="home-3.html">Home-V3</a>
                                <a href="about.html">About us</a>
                            </li>
                            <li>
                                <a href="product.html">Product list</a>
                                <a href="product-details.html">Product details</a>
                                <a href="cart.html">Cart</a>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="blog.html">Blog Page</a>
                                <a href="single-blog.html">Single Blog</a>
                                <a href="faq.html">FAQ page</a>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="my-account.html">My account</a>
                                <a href="coming-soon.html">Coming Soon</a>
                                <a href="404.html">404 Page</a>

                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Wordpress themes</a>
                    </li>
                    <li><a href="#">HTML Templates</a>
                    </li>
                    <li><a href="#">PSD templates</a>
                    </li>
                    <li><a href="#">Print items</a>
                    </li>
                    <li><a href="#">freebee</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- MOBILE-MENU AREA END -->
    </header>
    <!-- HEADER END HERE -->

    <!-- HERO AREA START HERE -->
    <section class="hero-area overly-bg home-2" data-stellar-background-ratio=".9"
             style="background-image: url({{ asset('/') }}front-end/images/banner/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-wrap">
                        <h2 class="hero-title">PSD, HTML Templates & Wordpress Themes</h2>
                        <p class="hero-intro">Storola is specialize in creating some of the Best Free and Premium
                            Bootstrap PSD Templates, HTML Templates, Wordpress Themes & Others Graphics</p>
                        <form action="#" class="item-search">
                            <input type="text" placeholder="Search your Items">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO AREA END HERE -->

    <!-- FEATURE ITEM AREA START HERE -->
    <section class="feature-item-area">
        <div class="container">
            <div class="row">
                <div class="feature-wrap owl-carousel">
                    <div class="single-feature">
                        <div class="col-md-6 col-sm-6">
                            <div class="item-demo demo-2">
                                <figure>
                                    <img src="{{ asset('/') }}front-end/images/product/feature.jpg" alt="">
                                    <div class="product-caption">
                                        <div class="caption-cel">
                                            <div class="product-link">
                                                <a href="product-details.html">live preview</a>
                                                <a href="product-details.html" class="link-green">Item details</a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <div class="product-info">
                                    <div class="product-meta">
                                        <span class="meta-type">
                                            <i class="fa fa-html5"></i>HTML Template
                                        </span>
                                        <span class="meta-love">
                                            <i class="fa fa-heart"></i>790
                                        </span>
                                        <span class="meta-download">
                                            <i class="fa fa-cloud-download"></i>82
                                        </span>
                                        <span class="meta-price-old">
                                            $16.00
                                        </span>
                                        <span class="meta-price">
                                            $8.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="s-feature-info">
                                <h2 class="violet-title">Featured Items</h2>
                                <div class="feature-desc">
                                    <h3>DotBike - Bicycle e-commerce HTML Template</h3>
                                    <p>DotBike is a modern design HTML5/CSS3 template for bicycles, bikes, mountain
                                        biking, motorcycles, accessories, spare parts online stores, bicycle store,
                                        shop, repair center and any type of eCommerce site. It’s easy to customize &
                                        totally responsive using Bootstrap grid 1170px.</p>
                                    <a href="#" class="custom-btn violet">view details</a>
                                    <a href="#" class="custom-btn">live demo</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Single Feature End -->
                    <div class="single-feature">
                        <div class="col-md-6 col-sm-6">
                            <div class="item-demo demo-2">
                                <figure>
                                    <img src="{{ asset('/') }}front-end/images/product/feature.jpg" alt="">
                                    <div class="product-caption">
                                        <div class="caption-cel">
                                            <div class="product-link">
                                                <a href="product-details.html">live preview</a>
                                                <a href="product-details.html" class="link-green">Item details</a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <div class="product-info">
                                    <div class="product-meta">
                                        <span class="meta-type">
                                            <i class="fa fa-html5"></i>HTML Template
                                        </span>
                                        <span class="meta-love">
                                            <i class="fa fa-heart"></i>790
                                        </span>
                                        <span class="meta-download">
                                            <i class="fa fa-cloud-download"></i>82
                                        </span>
                                        <span class="meta-price-old">
                                            $16.00
                                        </span>
                                        <span class="meta-price">
                                            $8.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="s-feature-info">
                                <h2 class="violet-title">Featured Items</h2>
                                <div class="feature-desc">
                                    <h3>DotBike - Bicycle e-commerce HTML Template</h3>
                                    <p>DotBike is a modern design HTML5/CSS3 template for bicycles, bikes, mountain
                                        biking, motorcycles, accessories, spare parts online stores, bicycle store,
                                        shop, repair center and any type of eCommerce site. It’s easy to customize &
                                        totally responsive using Bootstrap grid 1170px.</p>
                                    <a href="#" class="custom-btn violet">view details</a>
                                    <a href="#" class="custom-btn">live demo</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Single Feature End -->
                    <div class="single-feature">
                        <div class="col-md-6 col-sm-6">
                            <div class="item-demo demo-2">
                                <figure>
                                    <img src="{{ asset('/') }}front-end/images/product/feature.jpg" alt="">
                                    <div class="product-caption">
                                        <div class="caption-cel">
                                            <div class="product-link">
                                                <a href="product-details.html">live preview</a>
                                                <a href="product-details.html" class="link-green">Item details</a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <div class="product-info">
                                    <div class="product-meta">
                                        <span class="meta-type">
                                            <i class="fa fa-html5"></i>HTML Template
                                        </span>
                                        <span class="meta-love">
                                            <i class="fa fa-heart"></i>790
                                        </span>
                                        <span class="meta-download">
                                            <i class="fa fa-cloud-download"></i>82
                                        </span>
                                        <span class="meta-price-old">
                                            $16.00
                                        </span>
                                        <span class="meta-price">
                                            $8.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="s-feature-info">
                                <h2 class="violet-title">Featured Items</h2>
                                <div class="feature-desc">
                                    <h3>DotBike - Bicycle e-commerce HTML Template</h3>
                                    <p>DotBike is a modern design HTML5/CSS3 template for bicycles, bikes, mountain
                                        biking, motorcycles, accessories, spare parts online stores, bicycle store,
                                        shop, repair center and any type of eCommerce site. It’s easy to customize &
                                        totally responsive using Bootstrap grid 1170px.</p>
                                    <a href="#" class="custom-btn violet">view details</a>
                                    <a href="#" class="custom-btn">live demo</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Single Feature End -->
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE ITEM AREA END HERE -->

    <!-- NEW PRODUCT AREA START HERE -->
    <section class="new-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-product-wrap">
                        <h2 class="violet-title">New Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item15.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">WINNER - Multi-Purpose HTML
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">Multi-Purpose</a>
                                    <a href="#">/ Creative </a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-html5"></i>HTML
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>235
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>12
                                </span>
                                <span class="meta-price">
                                    $15.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item10.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">Weddy - Wedding Planner PSD
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">Wedding</a>
                                    <a href="#"> / Event </a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-file-powerpoint-o"></i>PSD
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>23500
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>102
                                </span>
                                <span class="meta-price">
                                    Free
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item16.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">E-commerce</a>
                                    <a href="#">/ Creative </a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-file-powerpoint-o"></i>PSD
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>23500
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>102
                                </span>
                                <span class="meta-price">
                                    $8.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item12.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">Dotapps – App Landing Page
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">PSD Template</a>
                                    <a href="#"> / Techonology</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-file-powerpoint-o"></i>PSD
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>235
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>10
                                </span>
                                <span class="meta-price">
                                    $12.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item2.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">Dotapps – App Landing Page
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">PSD Template</a>
                                    <a href="#"> / Techonology</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-file-powerpoint-o"></i>PSD
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>235
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>10
                                </span>
                                <span class="meta-price">
                                    $12.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->

                <!-- Single Product Start -->
                <div class="col-md-4 col-sm-6">
                    <div class="item-demo demo-2">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/product/item8.jpg" alt="">
                            <div class="product-caption">
                                <div class="caption-cel">
                                    <div class="product-link">
                                        <div>
                                            <div>
                                                <a href="product-details.html">View Details <span><i
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
                                <h3 class="product-name"><a href="product-details.html">Dotapps – App Landing Page
                                        Template</a></h3>
                                <span class="p-category">
                                    <a href="#">PSD Template</a>
                                    <a href="#"> / Techonology</a>
                                </span>
                            </div>
                            <div class="product-meta">
                                <span class="meta-type">
                                    <i class="fa fa-file-powerpoint-o"></i>PSD
                                </span>
                                <span class="meta-love">
                                    <i class="fa fa-heart"></i>235
                                </span>
                                <span class="meta-download">
                                    <i class="fa fa-cloud-download"></i>10
                                </span>
                                <span class="meta-price">
                                    $12.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product End -->
            </div>

            <!-- VIEW ALL BUTTON -->
            <div class="row">
                <div class="col-md-12">
                    <div class="view-btn-wrap text-center">
                        <a href="product.html" class="custom-btn">view all products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCT AREA END HERE -->

    <!-- SERVICE-1 AREA START HERE -->
    <section class="sevice-1-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-intro">
                        <h2 class="violet-title">Our Custom Services</h2>
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
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-2">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv2.png" alt="">
                        </div>
                        <h3 class="service-headline">PSD to HTML</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-3">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv3.png" alt="">
                        </div>
                        <h3 class="service-headline">Wordpress Customization</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-4">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv4.png" alt="">
                        </div>
                        <h3 class="service-headline">Theme Development</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-5">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv5.png" alt="">
                        </div>
                        <h3 class="service-headline">Responsive Web</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-6">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv6.png" alt="">
                        </div>
                        <h3 class="service-headline">Mobile App Design</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-7">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv7.png" alt="">
                        </div>
                        <h3 class="service-headline">Logo design</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-entry color-8">
                        <div class="service-icon">
                            <img src="{{ asset('/') }}front-end/images/service/serv8.png" alt="">
                        </div>
                        <h3 class="service-headline">Branding Design</h3>
                    </div>
                </div><!-- Service Entry End -->
                <div class="col-md-12 col-sm-12">
                    <div class="survice-button">
                        <button class="custom-btn">Create Your Custom Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE-1 AREA END HERE -->

    <!-- CLIENT AREA START HERE -->
    <section class="client-area overly-bg client-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="client-wrap owl-carousel owl-theme">
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
                                <img src="{{ asset('/') }}front-end/images/team/tm3.jpg" alt="">
                            </div>
                            <p>consectetur adipisicing elit. Optio omnis possimus accusamus autem odio, nisi iusto nihil
                                illo harum, tempore soluta minus nemo ab at ipsa reprehenderit facilis officiis
                                dolorum?</p>
                            <div class="client-name">
                                <h5>albert Hunter</h5>
                                <span>CEO, Jhon Heart, Austalia</span>
                            </div>
                        </div>
                        <!-- Singel Quote End -->
                        <div class="single-quote">
                            <div class="quote-thumb">
                                <img src="{{ asset('/') }}front-end/images/team/tm4.jpg" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium</p>
                            <div class="client-name">
                                <h5>Selena Hunter</h5>
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
