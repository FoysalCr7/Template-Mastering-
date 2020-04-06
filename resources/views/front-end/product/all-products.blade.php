@extends('front-end.master')
@section('title')
    All Products
@endsection
@section('body')

    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h4>We Are specialize in creating some of the Best Free and Premium Bootstrap PSD Templates,
                            HTML Templates, Wordpress Themes & Others Graphics</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT PROMO END HERE -->

    <!-- BREADCRUMB START HERE -->
    <div class="about-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->


    <!-- PRODUCT AREA START HERE -->
    <main class="product-area main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-item-wrap">
                        <div class="tab-header clearfix">
                            <!-- Nav tabs -->
                            <ul class="product-tab pull-left" role="tablist">
                                <li role="presentation" class="active"><a href="#seller" aria-controls="seller"
                                                                          role="tab" data-toggle="tab">new items</a>
                                </li>
                                <li role="presentation"><a href="#popular" aria-controls="popular" role="tab"
                                                           data-toggle="tab">popular items</a>
                                </li>
                            </ul>
                            <div class="tab-viewport pull-right hidden-xs">
                                <div class="filter-form">
                                    <h5 class="filter-title">sort by: </h5>
                                    <div class="filter-form">
                                        <form action="#">
                                            <select id="seltect-opt">
                                                <option value="Defauld">Default</option>
                                                <option value="Newest">Newest items</option>
                                                <option value="Trending">Trending items</option>
                                                <option value="Best">Best sellers</option>
                                                <option value="Price">Price: low to high</option>
                                                <option value="Price">Price: high to low</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="view-tab">
                                    <ul role="tablist">
                                        <li><a href="product.html"><i class="fa fa-th"></i></a></li>
                                        <li><a href="product-list.html"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- TAB PANES CONTENT START -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="seller">
                                <div class="row">
                                    <!-- Single Product Start -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item1.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Corporate
                                                            Business Logo</a> <span>Free</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item3.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            HTML Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item4.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item5.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item6.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item1.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item3.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item4.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item5.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item6.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                            <!-- BEST SELLTER TAB PANEL END -->

                            <!-- HOT TAB PANEL START -->
                            <div role="tabpanel" class="tab-pane fade" id="popular">
                                <div class="row">
                                    <!-- Single Product Start -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item5.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="item-demo">
                                            <figure>
                                                <img src="{{ asset('/') }}front-end/images/product/item6.jpg" alt="">
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
                                                    <h3 class="product-name"><a href="product-details.html">Market Place
                                                            PSD Template</a> <span>$20</span></h3>
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
                            <!-- HOT TAB PANEL END -->
                        </div>
                        <!-- PAGER  START HERE -->
                        <div class="pager">
                            <a href="#" class="next-btn"> <i class="fa fa-angle-left"></i>
                            </a>
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">7</a>
                            <a href="#">8</a>
                            <a href="#">............</a>
                            <a href="#">20</a>
                            <a href="#" class="next-btn"> <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <!-- PAGER  END HERE -->
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
