@extends('front-end.master')
@section('title')
    Single Blog
@endsection
@section('body')
    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>single blog page</h2>
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
                        <li class="breadcrumb-item"><a href="#">blog</a>
                        </li>
                        <li class="breadcrumb-item active">Single Blog page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- SINGLE POST START HERE -->
    <main class="single-blog-post main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <!-- SINGLE ARTICLE START HERE -->
                    <div class="single-article">
                        <div class="blog-thumb">
                            <div class="overly-bg"><img src="{{ asset('/') }}front-end/images/sblog1.jpg" alt="">
                            </div>
                            <div class="thubm-caption">
                                <span>10 best <br> website design</span>
                            </div>
                        </div>
                        <div class="s-article-details">
                            <h3 class="blog-headline">
                                10 Best website design for any designing agency
                            </h3>
                            <div class="blog-meta">
                                <span><i class="fa fa-user"></i><a href="#">Tariqul Islam</a></span>
                                <span><i class="fa fa-clock-o"></i><a href="#">28 may 2018</a></span>
                                <span>Website, Wordpress, Marketing</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. , ultric nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo.</p>
                            <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                                feugiat a, tellus. Phasellus viverra nulla ut</p>
                            <blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                sem. Nulla consequat massa
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultric, pellentesque eu, pretium quis, sem.
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                            <p>
                                <a href="#" class="pull-left"><img src="{{ asset('/') }}front-end/images/blog/blog1.jpg"
                                                                   alt="">
                                </a>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                sem. </p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                            <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                                viverra quis, feugiat a,</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus. Donec quam felis, ultric, pellentesue eu, pretium quis, sem. Nulla
                                consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>

                        </div>
                    </div>
                    <!-- SINGLE ARTICLE END HERE -->
                    <div class="article-share">
                        <div class="article-love pull-left hidden-xs">
                            <span><i class="fa fa-heart-o"></i> 2563</span>
                        </div>
                        <div class="article-s-list">
                            <ul>
                                <li>share on:</li>
                                <li class="fb"><a href="#"><i class="fa fa-facebook-square"></i>facebook</a>
                                </li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i>Google+</a>
                                </li>
                                <li class="be"><a href="#"><i class="fa fa-behance"></i>behance</a>
                                </li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i>twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- SINGLE ARTICLE PAGINATION -->
                    <div class="article-pagination">
                        <ul>
                            <li class="pull-left"><a href="#"><span><i class="fa fa-angle-left"></i></span>previous</a>
                            </li>
                            <li class="pull-right"><a href="#">next<span><i class="fa fa-angle-right"></i></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE ARTICLE COMMENT -->
                    <div class="comment-area">
                        <h3 class="comment-heading">comments <span><i class="fa fa-comment-o"></i> 04</span></h3>
                        <ol class="comment-wrap">
                            <li>
                                <div class="single-comment">
                                    <div class="comment-thumb">
                                        <img src="{{ asset('/') }}front-end/images/blog/comment.jpg" alt="">
                                    </div>
                                    <div class="comment-txt">
                                        <h4 class="name">Denise Lopez <a href="#">04 April 2018</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur.</p>
                                        <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                    </div>
                                </div>

                                <ol class="child">
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-thumb">
                                                <img src="{{ asset('/') }}front-end/images/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment-txt">
                                                <h4 class="name">Denise Lopez <a href="#">04 April 2018</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-reply"
                                                                                   aria-hidden="true"></i>reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-thumb">
                                                <img src="{{ asset('/') }}front-end/images/blog/comment2.jpg" alt="">
                                            </div>
                                            <div class="comment-txt">
                                                <h4 class="name">Denise Lopez <a href="#">04 April 2018</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur.</p>
                                                <a href="#" class="comment-btn"><i class="fa fa-reply"
                                                                                   aria-hidden="true"></i>reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="single-comment">
                                    <div class="comment-thumb">
                                        <img src="{{ asset('/') }}front-end/images/blog/comment.jpg" alt="">
                                    </div>
                                    <div class="comment-txt">
                                        <h4 class="name">Denise Lopez <a href="#">04 April 2018</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur.</p>
                                        <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-comment">
                                    <div class="comment-thumb">
                                        <img src="{{ asset('/') }}front-end/images/blog/comment.jpg" alt="">
                                    </div>
                                    <div class="comment-txt">
                                        <h4 class="name">Denise Lopez <a href="#">04 April 2018</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur.</p>
                                        <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- SINGLE ARTICLE COMMENT -->

                    <!-- ADD A COMMENT -->
                    <div class="add-comment">
                        <h3 class="comment-heading">add a comment</h3>
                        <div class="ac-wrap">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="custom-btn">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- SINGLE ARTICLE END HERE -->

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
