@extends('front-end.master')
@section('title')
    Contact Us
@endsection
@section('body')
    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>Contact us</h2>
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
                        <li class="breadcrumb-item active">contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- CONTACT AREA START HERE -->
    <main class="contact-area main-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div class="contact-wrap">
                        <h3 class="contact-heading">say Hello!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                        <div id="form-messages"></div>
                        <form id="ajax-contact" method="post"
                              action="https://web.dotthemes.com/html/storola-demo/storola/mailer.php">
                            <div class="input_top">
                                <input type="text" class="form_control" id="name" name="name" placeholder="Your Name"
                                       required/>
                            </div>

                            <div class="input_top">
                                <input type="email" class="form_control" name="email" placeholder="Email address"
                                       required/>
                            </div>
                            <div class="textarea">
                                <textarea id="message" class="form_control" name="message"
                                          placeholder="Write your Message" required></textarea>
                            </div>
                            <button type="submit" id="submit" class="custom-btn">send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
