@extends('front-end.master')
@section('title')
    Blog Page
@endsection
@section('body')

    <!-- ABOUT PROMO START HERE -->
    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>blog page</h2>
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
                        <li class="breadcrumb-item active">Blog page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- BLOG PAGE START HERE -->
    <main class="blog-page main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <!-- CONTENT AREA START HERE -->
                    <div class="content-area">
                        <!-- SINGLE POST ITEM -->
                        <div class="s-blog-item">
                            <div class="blog-thumb">
                                <a href="single-blog.html" class=" overly-bg"><img
                                        src="{{ asset('/') }}front-end/images/sblog1.jpg" alt="">
                                </a>
                                <a href="single-blog.html" class="thubm-caption">
                                    <span>10 best <br> website design</span>
                                </a>
                            </div>
                            <!-- Blog Details -->
                            <div class="s-blog-details">
                                <h3 class="blog-headline">
                                    <a href="single-blog.html">10 Best website design for any designing agency</a>
                                </h3>
                                <div class="blog-meta">
                                    <span><i class="fa fa-user"></i><a href="#">Ruhul Amin</a></span>
                                    <span><i class="fa fa-clock-o"></i><a href="#">28 may 2017</a></span>
                                    <span>Website, Wordpress, Marketing</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis. Aenean commodo ligula eget dolor. Cum
                                    sociis natoque penatibus et magnis dis parturient montes</p>
                                <div class="post-button-social">
                                    <a href="single-blog.html" class="custom-btn pull-left">read more</a>
                                    <div class="post-social pull-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart"></i> 37</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i> 08</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i> 37</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE BLOT ITEM END -->

                        <!-- SINGLE BLOT ITEM START -->
                        <div class="s-blog-item">
                            <div class="blog-thumb">
                                <a href="single-blog.html" class=" overly-bg"><img
                                        src="{{ asset('/') }}front-end/images/sblog3.jpg" alt="">
                                </a>
                                <a href="single-blog.html" class="thubm-caption">
                                    <span>Artical Writing</span>
                                </a>
                            </div>
                            <!-- Blog Details -->
                            <div class="s-blog-details">
                                <h3 class="blog-headline">
                                    <a href="single-blog.html">Make your successful career on article writing</a>
                                </h3>
                                <div class="blog-meta">
                                    <span><i class="fa fa-user"></i><a href="#">Tariqul Islam</a></span>
                                    <span><i class="fa fa-clock-o"></i><a href="#">28 may 2017</a></span>
                                    <span>Website, Wordpress, Marketing</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis. Aenean commodo ligula eget dolor. Cum
                                    sociis natoque penatibus et magnis dis parturient montes</p>
                                <div class="post-button-social">
                                    <a href="single-blog.html" class="custom-btn pull-left">read more</a>
                                    <div class="post-social pull-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart"></i> 37</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i> 08</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i> 37</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE BLOT ITEM END -->

                        <!-- SINGLE BLOT ITEM START -->
                        <div class="s-blog-item">
                            <div class="blog-thumb">
                                <a href="single-blog.html" class=" overly-bg"><img
                                        src="{{ asset('/') }}front-end/images/sblog2.jpg" alt="">
                                </a>
                                <a href="single-blog.html" class="thubm-caption">
                                    <span> 50 Best <br>Ecommerce site </span>
                                </a>
                            </div>
                            <!-- Blog Details -->
                            <div class="s-blog-details">
                                <h3 class="blog-headline">
                                    <a href="single-blog.html">50 Best E-commerces site for your product business</a>
                                </h3>
                                <div class="blog-meta">
                                    <span><i class="fa fa-user"></i><a href="#">Ruhul Amin</a></span>
                                    <span><i class="fa fa-clock-o"></i><a href="#">28 may 2017</a></span>
                                    <span>Website, Wordpress, Marketing</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis. Aenean commodo ligula eget dolor. Cum
                                    sociis natoque penatibus et magnis dis parturient montes</p>
                                <div class="post-button-social">
                                    <a href="single-blog.html" class="custom-btn pull-left">read more</a>
                                    <div class="post-social pull-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart"></i> 37</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i> 08</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i> 37</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE BLOT ITEM END -->

                        <!-- PAGER  START HERE -->
                        <div class="pager">
                            <a href="#" class="next-btn"> <i class="fa fa-angle-left"></i>
                            </a>
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next-btn"> <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <!-- PAGER  END HERE -->
                    </div>
                    <!-- CONTENT AREA END HERE -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <!-- SIDEBAR AREA START HERE -->
                    <aside class="sidebar">
                        <div class="sidebar-widget">
                            <form action="#" class="search-box">
                                <input type="text" placeholder="Searching kyeword here">
                                <button type="search"><i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Search Widget End -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">categories</h3>
                            <ul>
                                <li><a href="#">Blogging (3)</a>
                                </li>
                                <li><a href="#">E-business (7)</a>
                                </li>
                                <li><a href="#">Make Money Online (6)</a>
                                </li>
                                <li><a href="#">SEO (3)</a>
                                </li>
                                <li><a href="#">Social Media & Marketing (10)</a>
                                </li>
                                <li><a href="#">Video Marketing (1)</a>
                                </li>
                                <li><a href="#">Web Design (4)</a>
                                </li>
                                <li><a href="#">Wordpress (9)</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Categories Widget End -->

                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Post</h3>
                            <div class="popular-post">
                                <div class="single-popular">
                                    <a href="single-blog.html"><img src="{{ asset('/') }}front-end/images/pp1.jpg"
                                                                    alt="">
                                    </a>
                                    <div class="pp-details">
                                        <h4><a href="#">5 Best marketplace for selling your wordpress theme</a></h4>
                                        <span><i class="fa fa-eye"></i> 2500  | </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 450</span>
                                    </div>
                                </div>
                                <div class="single-popular">
                                    <a href="single-blog.html"><img src="{{ asset('/') }}front-end/images/pp2.jpg"
                                                                    alt="">
                                    </a>
                                    <div class="pp-details">
                                        <h4><a href="#">50 Best E-commerces site for your product business</a></h4>
                                        <span><i class="fa fa-eye"></i> 2500  | </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 450</span>
                                    </div>
                                </div>
                                <div class="single-popular">
                                    <a href="single-blog.html"><img src="{{ asset('/') }}front-end/images/pp3.jpg"
                                                                    alt="">
                                    </a>
                                    <div class="pp-details">
                                        <h4><a href="#">Make your successful career on article writing</a></h4>
                                        <span><i class="fa fa-eye"></i> 2500  | </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 450</span>
                                    </div>
                                </div>
                                <div class="single-popular">
                                    <a href="single-blog.html"><img src="{{ asset('/') }}front-end/images/pp4.jpg"
                                                                    alt="">
                                    </a>
                                    <div class="pp-details">
                                        <h4><a href="#">5 Best marketplace for selling your wordpress theme</a></h4>
                                        <span><i class="fa fa-eye"></i> 2500  | </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 450</span>
                                    </div>
                                </div>
                                <div class="single-popular">
                                    <a href="single-blog.html"><img src="{{ asset('/') }}front-end/images/pp5.jpg"
                                                                    alt="">
                                    </a>
                                    <div class="pp-details">
                                        <h4><a href="#">5 Best marketplace for selling your wordpress theme</a></h4>
                                        <span><i class="fa fa-eye"></i> 2500  | </span>
                                        <span><i class="fa fa-thumbs-o-up"></i> 450</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Popular Post Widget End -->

                        <div class="sidebar-widget">
                            <h3 class="widget-title">ARCHIVES</h3>
                            <ul>
                                <li><a href="#">February 2019</a>
                                </li>
                                <li><a href="#">January 2019</a>
                                </li>
                                <li><a href="#">December 2018</a>
                                </li>
                                <li><a href="#">November 2018</a>
                                </li>
                                <li><a href="#">October 2018</a>
                                </li>
                                <li><a href="#">September 2018</a>
                                </li>
                                <li><a href="#">August 2018</a>
                                </li>
                                <li><a href="#">December 2017</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Archives Widget End -->

                        <div class="sidebar-widget">
                            <h3 class="widget-title">Follow us</h3>
                            <div class="follow-us">
                                <div class="single-follow">
                                    <div class="follow-icon">
                                        <span><i class="fa fa-facebook"></i></span>
                                        <h4>256065 <span>likes</span></h4>
                                    </div>
                                    <button class="follow-btn fb">like</button>
                                </div>
                                <div class="single-follow">
                                    <div class="follow-icon">
                                        <span><i class="fa fa-twitter"></i></span>
                                        <h4>24355 <span>followers</span></h4>
                                    </div>
                                    <button class="follow-btn tw">follow</button>
                                </div>
                                <div class="single-follow">
                                    <div class="follow-icon">
                                        <span><i class="fa fa-youtube-play"></i></span>
                                        <h4>6065 <span>subscribers</span></h4>
                                    </div>
                                    <button class="follow-btn yt">subscribe</button>
                                </div>
                            </div>
                        </div>
                        <!-- Follow Us Widget End -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">tags</h3>
                            <div class="tagclouds">
                                <a href="#">Wordpress</a>
                                <a href="#">design</a>
                                <a href="#">Wordpress</a>
                                <a href="#">design</a>
                                <a href="#">Wordpress</a>
                                <a href="#">design</a>
                                <a href="#">Wordpress</a>
                                <a href="#">Wordpress</a>
                                <a href="#">design</a>
                                <a href="#">Wordpress</a>
                                <a href="#">Wordpress</a>
                                <a href="#">design</a>
                                <a href="#">design</a>
                                <a href="#">bootstarp</a>
                                <a href="#">Wordpress</a>
                                <a href="#">joomla</a>
                            </div>
                        </div>
                        <!-- Tag Widget End -->
                    </aside>
                    <!-- SIDEBAR AREA END HERE -->
                </div>
            </div>
        </div>
    </main>
@endsection
