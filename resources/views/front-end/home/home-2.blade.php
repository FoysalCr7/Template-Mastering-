@extends('front-end.master')
@section('title')
    Home-2
@endsection
@section('body')

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
             style="background-image: url({{ asset('/') }}front-end/images/banner/hero-2.jpg)">
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

    <!-- PRODUCT AREA START HERE -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-item-wrap">
                        <!-- Nav tabs -->
                        <ul class="storola-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#seller" aria-controls="seller" role="tab"
                                                                      data-toggle="tab">Best Seller</a>
                            </li>
                            <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">HOt
                                    Offer</a>
                            </li>
                            <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab"> New
                                    Items</a>
                            </li>
                            <li role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab">Freebie</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="seller">
                                <div class="row">
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
                                                    <h3 class="product-name"><a href="product-details.html">DotBike -
                                                            Bicycle E-commerce PSD Template</a></h3>
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
                                                        <i class="fa fa-heart"></i>790
                                                    </span>
                                                    <span class="meta-download">
                                                        <i class="fa fa-cloud-download"></i>82
                                                    </span>
                                                    <span class="meta-price">
                                                        $16.00
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
                                                <img src="{{ asset('/') }}front-end/images/product/item11.jpg" alt="">
                                                <div class="product-caption">
                                                    <div class="caption-cel">
                                                        <div class="product-link">
                                                            <div>
                                                                <div>
                                                                    <a href="product-details.html">View Details <span><i
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
                                                    <h3 class="product-name"><a href="product-details.html">Dot -
                                                            Product Landing page PSD Template</a></h3>
                                                    <span class="p-category">
                                                        <a href="#">landing page</a>
                                                        <a href="#">/ Creative </a>
                                                    </span>
                                                </div>
                                                <div class="product-meta">
                                                    <span class="meta-type">
                                                        <i class="fa fa-file-powerpoint-o"></i>PSD
                                                    </span>
                                                    <span class="meta-love">
                                                        <i class="fa fa-heart"></i>20
                                                    </span>
                                                    <span class="meta-download">
                                                        <i class="fa fa-cloud-download"></i>10002
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
                                                    <h3 class="product-name"><a href="product-details.html">Dotapps –
                                                            App Landing Page Template</a></h3>
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
                                                <img src="{{ asset('/') }}front-end/images/product/item13.jpg" alt="">
                                                <div class="product-caption">
                                                    <div class="caption-cel">
                                                        <div class="product-link">
                                                            <div>
                                                                <div>
                                                                    <a href="product-details.html">View Details <span><i
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
                                                    <h3 class="product-name"><a href="product-details.html">Fairness -
                                                            One Page Bootstrap Charity Templete</a></h3>
                                                    <span class="p-category">
                                                        <a href="#">Creative</a>
                                                        <a href="#"> / Charity</a>
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
                                                        <i class="fa fa-cloud-download"></i>60
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
                                                    <h3 class="product-name"><a href="product-details.html">WINNER -
                                                            Multi-Purpose HTML Template</a></h3>
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
                                                    <h3 class="product-name"><a href="product-details.html">Weddy -
                                                            Wedding Planner PSD Template</a></h3>
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
                                </div>
                            </div>
                            <!-- BEST SELLTER TAB PANEL END -->

                            <!-- HOT TAB PANEL START -->
                            <div role="tabpanel" class="tab-pane fade" id="hot">
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
                                                    <h3 class="product-name"><a href="product-details.html">WINNER -
                                                            Multi-Purpose HTML Template</a></h3>
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
                                                    <h3 class="product-name"><a href="product-details.html">Weddy -
                                                            Wedding Planner PSD Template</a></h3>
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
                                                    <h3 class="product-name"><a href="product-details.html">DotBike -
                                                            Bicycle E-commerce PSD Template</a></h3>
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
                                                    <h3 class="product-name"><a href="product-details.html">Dotapps –
                                                            App Landing Page Template</a></h3>
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
                            </div>
                            <!-- HOT TAB PANEL END -->

                            <!-- NEW TAB PANEL START -->
                            <div role="tabpanel" class="tab-pane  fade" id="new">
                                <div class="row">
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
                                                    <h3 class="product-name"><a href="product-details.html">Dotapps –
                                                            App Landing Page Template</a></h3>
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
                            </div>
                            <!-- NEW TAB PANEL END -->

                            <!-- FREE TAB PANEL START -->
                            <div role="tabpanel" class="tab-pane fade" id="free">
                                <div class="row">
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
                                                    <h3 class="product-name"><a href="product-details.html">Weddy -
                                                            Wedding Planner PSD Template</a></h3>
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
                                                    <h3 class="product-name"><a href="product-details.html">DotBike -
                                                            Bicycle E-commerce PSD Template</a></h3>
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
                                </div>
                            </div>
                            <!-- FREE TAB PANEL END -->
                        </div>
                    </div>
                </div>
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
    <!-- PROMO AREA END HERE -->

    <!-- SERVICE AREA START HERE -->
    <section class="service-area overly-bg" style="background-image: url({{ asset('/') }}front-end/images/service.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 spread-full hidden-xs">
                    <figure class="service-thumb">
                        <img src="{{ asset('/') }}front-end/images/serv2.png" alt="">
                    </figure>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="service-details">
                        <h2 class="service-heading">Our Custom Service</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque.</p>
                        <div class="service-list">
                            <ul>
                                <li class="ui"><a href="#">1. UI/UX Design (Website & Mobile</a>
                                </li>
                                <li class="psd"><a href="#">2. PSD To HTML</a>
                                </li>
                                <li class="wp"><a href="#">3. Wordpress Customization</a>
                                </li>
                                <li class="theme"><a href="#">4. Theme Development</a>
                                </li>
                                <li class="web"><a href="#">5. Responsive Web Development</a>
                                </li>
                                <li class="br"><a href="#">6. Branding Design</a>
                                </li>
                            </ul>
                        </div>
                        <button class="custom-btn">create your order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE AREA END HERE -->

    <!-- CLIENT AREA START HERE -->
    <section class="client-area overly-bg client-2" data-stellar-background-ratio="0.6"
             style="background-image: url({{ asset('/') }}front-end/images/client/client-bg.jpg)">
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

    <!-- BLOG AREA START HERE -->
    <section class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-intro">
                        <h2 class="section-title under-line">from our blog</h2>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-md-4 col-sm-4">
                    <div class="single-blog">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/blog/blog1.jpg" alt="">
                        </figure>
                        <div class="s-blog-detiails">
                            <div class="s-blog-meta">
                                <span><a href="#">02 June, 2018</a></span>
                            </div>
                            <h3 class="s-blog-heading">
                                <a href="single-blog.html">9 Best Marketplace for Selling Design Online 2018</a>
                            </h3>
                            <div class="blog-tags">
                                <i class="fa fa-folder-open" aria-hidden="true"></i> <span><a
                                        href="#">marketplace</a></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer dipiscing elit. Aenean commodo ligula eget dolor
                                Lorem ipsum dolor sit amet...</p>
                            <a href="single-blog.html" class="read-more">read more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-md-4 col-sm-4">
                    <div class="single-blog">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/blog/blog2.jpg" alt="">
                        </figure>
                        <div class="s-blog-detiails">
                            <div class="s-blog-meta">
                                <span><a href="#">15 May, 2018</a></span>
                            </div>
                            <h3 class="s-blog-heading">
                                <a href="single-blog.html">7 Best Way for Facebook Marketing Update post 2018</a>
                            </h3>
                            <div class="blog-tags">
                                <i class="fa fa-folder-open" aria-hidden="true"></i> <span><a href="#">trends</a></span>
                            </div>
                            <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed
                                fringilla mauris Nullam quis ante. Etiam sit amet orci.... </p>
                            <a href="single-blog.html" class="read-more">read more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-md-4 col-sm-4">
                    <div class="single-blog">
                        <figure>
                            <img src="{{ asset('/') }}front-end/images/blog/blog3.jpg" alt="">
                        </figure>
                        <div class="s-blog-detiails">
                            <div class="s-blog-meta">
                                <span><a href="#">27 April, 2018</a></span>
                            </div>
                            <h3 class="s-blog-heading">
                                <a href="single-blog.html">Successful Career with artical writing Follow Trend 2018</a>
                            </h3>
                            <div class="blog-tags">
                                <i class="fa fa-folder-open" aria-hidden="true"></i> <span><a
                                        href="#">marketplace</a></span>
                            </div>
                            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla
                                ut metus Aliquam lorem ante, dapibus in, viverra quis...</p>
                            <a href="single-blog.html" class="read-more">read more <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
