<div class="header-top hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="n-sticker">
                    <div id="sticker-item" class="ticker">
                        <ul>
                            <li>Dotbike-Bicycle eCommerce Wordporess Theme Coming soon....</li>
                            <li> Lorem ipsum dolor sit loro</li>
                            <li> We ready to help from pureheart.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="h-phone">
                    <p>Need urgent help? Call now : 123-234-567-000</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="user-board-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2  hidden-sm ">
                <div class="logo hidden-xs">
                    <a href="{{ route('/') }}"><img src="{{ asset('/') }}front-end/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-7  hidden-xs">
                <div class="user-menu">
                    <nav>
                        <ul id="nav">
                            <li><a href="{{route ('/page-aboutus')}}">About us</a>
                            </li>
                            <li><a href="#">Pricing</a>
                            </li>
                            <li><a href="{{route('/blog-page')}}">Blog</a>
                            </li>
                            <li><a href="#">Help & Support</a>
                            </li>
                            <li><a href="{{route ('/page-contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Userboard Start Here -->
            <div class="col-md-4 col-sm-5 col-xs-12 no-padding">
                <div class="userboard">
                    <ul class="board-item">
                        <li class="price-cart"><a href="#"><i class="fa fa-shopping-cart"></i> <span>0</span></a>
                            <ul class="cart-details">
                                <li>
                                    <div class="cart-img">
                                        <img alt="" src="{{ asset('/') }}front-end/images/product/item2.jpg">
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="#">cart heading here</a></h4>
                                        <span>$30.00</span>
                                    </div>
                                    <div class="cart-del">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <img alt="" src="{{ asset('/') }}front-end/images/product/item11.jpg">
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="#">cart heading here</a></h4>
                                        <span>$30.00</span>
                                    </div>
                                    <div class="cart-del">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <img alt="" src="{{ asset('/') }}front-end/images/product/item2.jpg">
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="#">cart heading here</a></h4>
                                        <span>$30.00</span>
                                    </div>
                                    <div class="cart-del">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <h5>Total Price</h5>
                                    <p><span>$</span>90</p>
                                </li>
                                <li><a class="btn-filled pull-left" href="cart.html">go to cart</a>
                                    <a class="btn-filled pull-right" href="{{ route('/checkout') }}">check out</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('/my-account')}}"><i class="fa fa-user-plus"></i>Create an Account</a></li>
                        <li>
                            <button class="btn-filled" type="button" data-toggle="modal" data-target="#storola-modal"><i
                                    class="fa fa-user"></i> login
                            </button>
                        </li>
                        <!-- Modal -->
                        <div class="modal fade" id="storola-modal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-logo">
                                            <a href="#"><img src="{{ asset('/') }}front-end/images/logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <h2>Great You are Here</h2>
                                        <form action="#">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn-filled">log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- USER AREA END -->

<!-- MAIN MENU AREA START -->
<div class="main-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu">
                    <nav>
                        <ul id="nav">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li><a href="{{ route('/all-products') }}">All Products</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Wordpress themes</a>
                                    </li>
                                    <li><a href="#">HTML Templates</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Corporate</a>
                                            </li>
                                            <li><a href="#">Charity</a>
                                            </li>
                                            <li><a href="#">Events</a>
                                            </li>
                                        </ul>
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
                                        <a href="{{route ('/')}}">Home-V1</a>
                                        <a href="{{route ('/page-home-2')}}">Home-V2</a>
                                        <a href="{{route ('/page-home-3')}}">Home-V3</a>
                                        <a href="{{route ('/page-aboutus')}}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{  route('/product-list') }}">Product list</a>
                                        <a href="{{route ('/product-details')}}">Product details</a>
                                        <a href="cart.html">Cart</a>
                                        <a href="{{ route('/checkout') }}">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('/blog-page') }}">Blog Page</a>
                                        <a href="{{ route('/single-blog-page') }}">Single Blog</a>
                                        <a href="{{ route('/faq') }}">FAQ page</a>
                                        <a href="{{route ('/page-contact')}}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('/my-account')}}">My account</a>
                                        <a href="{{ route('/coming-soon') }}">Coming Soon</a>
                                        <a href="{{ route('/not-found') }}">404 Page</a>

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
                    <!-- Menu Item End -->
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <a href="{{route ('/')}}">Home-V1</a>
                            <a href="{{route ('/page-home-2')}}">Home-V2</a>
                            <a href="{{route ('/page-home-3')}}">Home-V3</a>
                            <a href="{{route ('/page-aboutus')}}">About us</a>
                        </li>
                        <li>
                            <a href="{{  route('/product-list') }}">Product list</a>
                            <a href="{{route ('/product-details')}}">Product details</a>
                            <a href="cart.html">Cart</a>
                            <a href="{{ route('/checkout') }}">Checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('/blog-page') }}">Blog Page</a>
                            <a href="{{ route('/single-blog-page') }}">Single Blog</a>
                            <a href="{{ route('/faq') }}">FAQ page</a>
                            <a href="{{route ('/page-contact')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('/my-account')}}">My account</a>
                            <a href="{{ route('/coming-soon') }}">Coming Soon</a>
                            <a href="{{ route('/not-found') }}">404 Page</a>

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
