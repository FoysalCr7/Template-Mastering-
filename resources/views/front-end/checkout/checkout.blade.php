@extends('front-end.master')
@section('title')
    Checkout
@endsection
@section('body')
    <!-- ABOUT PROMO START HERE -->
    <div class="promo-area" style="background-image: url({{ asset('/') }}front-end/images/banner/inner-top.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="promo-text">
                        <h2>CHECK OUT PAGE</h2>
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
                        <li class="breadcrumb-item active">checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB END HERE -->

    <!-- CHECKOUT AREA START HERE -->
    <main class="checkout-area main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="billing-details">
                        <h3 class="check-title">billing details</h3>
                        <form action="#" id="checkout-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="company" type="text" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="address" type="text" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="town" placeholder="Town/City">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Post Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="custom-btn">continue</button>
                                    <label for="">
                                        <input type="radio" name="account" value="register" id="register">
                                        Ship to a different address
                                    </label>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-12">
                    <div class="payment-method">
                        <h3 class="check-title">Your order</h3>
                        <div class="cart-total pay-cart">
                            <h3>cart total</h3>
                            <ul class="cart-list">
                                <li>Subtotal <span>$1200.00</span></li>
                                <li>Shipping cost <span>$20.00</span></li>
                            </ul>
                            <strong>Total <span>$1220.00</span></strong>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Paypal
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                        bird on it squid single-origin coffee nulla assumenda sho
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            Credit Card
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda sho
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            Other
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        On cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin coffee nulla assumenda sho
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-checkbox">
                            <input type="checkbox"> I have read all terms &amp; conditions
                        </div>
                        <div class="place-order">
                            <a href="#" class="custom-btn">place Order</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
