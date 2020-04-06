@extends('front-end.master')
@section('title')
    My Account
@endsection
@section('body')

    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>MY ACCOUNT</h2>
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
                        <li class="breadcrumb-item">Page</li>
                        <li class="breadcrumb-item active">My account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- CONTACT AREA START HERE -->
    <main class="account-area main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="register-wrap">
                        <h3>register</h3>
                        <form action="#">
                            <div class="form-group">
                                <label for="name">Email Address<span class="required">*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password <span class="required">*</span></label>
                                <input type="password">
                            </div>
                            <button class="custom-btn">register</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
                    <div class="loging-wrap">
                        <h3>login</h3>
                        <form action="#">
                            <div class="form-group">
                                <label for="name">User Name or Email Address<span class="required">*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password<span class="required">*</span></label>
                                <input type="password">
                            </div>
                            <div class="form-group form-inline">
                                <button class="custom-btn red">login</button>
                                <label class="inline"><input type="checkbox"> Remember me</label>
                            </div>
                            <p class="lost-pass"><a href="#">lost Password?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
