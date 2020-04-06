@extends('front-end.master')
@section('title')
    Not Found
@endsection
@section('body')

    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>404 page</h2>
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
                        <li class="breadcrumb-item"><a href="#">page</a>
                        </li>
                        <li class="breadcrumb-item active">404 page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- CONTACT AREA START HERE -->
    <main class="error-area main-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error-wrap">
                        <h3 class="error-heading">Oops! Page not found</h3>
                        <div class="error">404</div>
                        <p>Page cannot be found. But this search form is gonna help you!</p>
                        <form action="#" class="error-form">
                            <input type="text" placeholder="Search Keyword">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
