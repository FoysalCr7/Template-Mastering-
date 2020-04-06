@extends('front-end.master')
@section('title')
    Coming Soon
@endsection
@section('body')
    <section class="comming-soon-area">
        <div class="coming-top overly-bg" style="background-image: url({{ asset('/') }}front-end/images/coming.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="coming-wrap">
                            <div class="c-logo">
                                <a href="index.html"><img src="{{ asset('/') }}front-end/images/logo.png" alt="">
                                </a>
                            </div>
                            <h2>Will be Back <span>soon</span></h2>
                            <p>Storola is specialize in creating some of the Best Free and Premium Bootstrap PSD
                                Templates, HTML Templates & Wordpress Themes</p>
                            <div class="comming-countown"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="coming-bottom">
            <form action="#" class="coming-form">
                <input type="email" placeholder="Your Email Here">
                <button class="custom-btn">subscribe</button>
            </form>
        </div>
    </section>
@endsection
