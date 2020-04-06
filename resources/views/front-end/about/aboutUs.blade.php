@extends('front-end.master')
@section('title')
    About Us
@endsection
@section('body')

    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h4>We’re Working From 5 Years With Wordpress Theme Development, HTML, PSD Template & Other
                            Catagories</h4>
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
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- ABOUT MAIN START HERE -->
    <main class="about-main section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-warp-txt">
                        <h3 class="section-title">About Storola</h3>
                        <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim. </p>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus
                            ut, imperdiet a, venenatis vitae, justo. </p>
                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis.</p>
                        <a href="#" class="custom-btn">join our team</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-wrap-intro">
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <h4>Research</h4>
                        </div>
                        <div class="strategy">
                            <i class="fa fa-edit"></i>
                            <h4>Strategy</h4>
                        </div>
                        <div class="testing">
                            <i class="fa fa-check-square-o"></i>
                            <h4>Testing</h4>
                        </div>
                        <div class="ui-ux">
                            <i class="fa fa-skyatlas"></i>
                            <h4>UI/UX Design & Developing</h4>
                        </div>
                        <div class="deliver">
                            <i class="fa fa-laptop"></i>
                            <h4>Deliver</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ABOUT MAIN END HERE -->

    <!-- TEAM AREA START HERE -->
    <section class="team-area section-padding"
             style="background-image: url({{ asset('/') }}front-end/images/banner/bg-layer.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-intro">
                        <h3 class="section-title">Our Support TeaM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- TEAM MEMBER -->
                    <div class="team-member">
                        <div class="member-thumb">
                            <img src="{{ asset('/') }}front-end/images/team/tm1.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <div class="member-heading">
                                <h4>Willie Peters</h4>
                                <span>Wordpress Developer</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
                            <ul class="member-social">
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="ps"><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- TEAM MEMBER -->
                    <div class="team-member">
                        <div class="member-thumb">
                            <img src="{{ asset('/') }}front-end/images/team/tm2.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <div class="member-heading">
                                <h4>Adam Stewart</h4>
                                <span>Web Designer</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
                            <ul class="member-social">
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="ps"><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- TEAM MEMBER -->
                    <div class="team-member">
                        <div class="member-thumb">
                            <img src="{{ asset('/') }}front-end/images/team/tm3.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <div class="member-heading">
                                <h4>Matthew Rios</h4>
                                <span>SEO Marketer</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
                            <ul class="member-social">
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="ps"><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!-- TEAM MEMBER -->
                    <div class="team-member">
                        <div class="member-thumb">
                            <img src="{{ asset('/') }}front-end/images/team/tm4.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <div class="member-heading">
                                <h4>Danielle Perez</h4>
                                <span>Contant Writter</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
                            <ul class="member-social">
                                <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="gp"><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="ps"><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM AREA END HERE -->

    <!-- FEATURE AREA START HERE -->
    <div class="ab-feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-intro">
                        <h3 class="section-title">
                            We Are Featured on
                        </h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="ab-feature-wrap owl-carousel">
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat1.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat2.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat3.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat4.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat5.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat1.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat2.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat3.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat4.png" alt="">
                        </div>
                        <div class="single-feature">
                            <img src="{{ asset('/') }}front-end/images/feat5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
