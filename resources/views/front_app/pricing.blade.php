@extends('front_app.layouts.template')
@section('content')
<style>
    .pricingTable,
    .pricingTable .pricingTable-header {
        position: relative
    }

    a {
        text-decoration: none;
    }

    .demo {
        background: #C2C8C9;
        padding: 30px 0
    }

    .pricingTable {
        padding-bottom: 25px;
        margin: 0 20px;
        background: #fff;
        border-radius: 20px;
        border-bottom: 5px solid #4fc2f8;
        text-align: center;
        z-index: 1
    }

    .pricingTable .pricingTable-header:after,
    .pricingTable .pricingTable-header:before {
        content: "";
        border-top: 10px solid #48434a;
        border-left: 10px solid transparent;
        position: absolute;
        bottom: -10px;
        left: -10px
    }

    .pricingTable .pricingTable-header:after {
        border-left: none;
        border-right: 10px solid transparent;
        left: auto;
        right: -10px
    }

    .pricingTable .title {
        padding: 25px 5px;
        margin: 0;
        background: #030004;
        background: linear-gradient(to top, #030004, #314047);
        border-radius: 20px 20px 0 0;
        font-size: 26px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        position: relative
    }

    .pricingTable .title:after,
    .pricingTable .title:before {
        content: "";
        border-left: 10px solid #c2c8c9;
        border-top: 37px solid transparent;
        border-bottom: 37px solid transparent;
        position: absolute;
        bottom: -114px;
        left: -30px
    }

    .pricingTable .title:after {
        border-left: none;
        border-right: 10px solid #c2c8c9;
        left: auto;
        right: -30px
    }

    .pricingTable .price-value {
        display: block;
        padding: 15px 5px;
        margin: 0 -10px;
        background: #4fc2f8;
        font-size: 36px;
        font-weight: 700;
        color: #fff;
        position: relative
    }

    .pricingTable .price-value:after,
    .pricingTable .price-value:before {
        content: "";
        width: 30px;
        height: 90%;
        background: #0082d4;
        position: absolute;
        top: 50%;
        left: -20px;
        z-index: -1
    }

    .pricingTable .price-value:after {
        left: auto;
        right: -20px
    }

    .pricingTable .month {
        font-size: 15px;
        font-weight: 700;
        margin-left: 3px;
        position: relative;
        top: -12px
    }

    .pricingTable .pricing-content {
        list-style: none;
        padding: 15px 0;
        margin: 0
    }

    .pricingTable .pricing-content li {
        padding: 8px 0;
        font-size: 15px;
        font-weight: 700;
        color: #b2bbc0;
        line-height: 30px;
        border-bottom: 2px dashed #e3e3e3;
        position: relative
    }

    .pricingTable .pricing-content li:last-child {
        border-bottom: none
    }

    .pricingTable .pricingTable-signup {
        display: inline-block;
        padding: 10px 30px;
        font-size: 16px;
        color: #fff;
        text-transform: uppercase;
        border: 2px solid #4fc2f8;
        box-shadow: 3px 3px 10px 0 rgba(0, 0, 0, .08);
        perspective: 300px;
        z-index: 1;
        position: relative;
        transition: all .3s ease 0s
    }

    .pricingTable .pricingTable-signup:hover {
        color: #4fc2f8
    }

    .pricingTable .pricingTable-signup:before {
        content: "";
        width: 100%;
        height: 100%;
        background: #4fc2f8;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transform-origin: left center 0;
        transition: all .3s ease 0s
    }

    .pricingTable .pricingTable-signup:hover:before {
        transform: rotateY(90deg)
    }

    .pricingTable.orange {
        border-bottom-color: #fb8c00
    }

    .pricingTable.orange .price-value,
    .pricingTable.orange .pricingTable-signup:before {
        background: #fb8c00
    }

    .pricingTable.orange .price-value:after,
    .pricingTable.orange .price-value:before {
        background: #cd4410
    }

    .pricingTable.orange .pricingTable-signup {
        border-color: #fb8c00
    }

    .pricingTable.orange .pricingTable-signup:hover {
        color: #fb8c00
    }

    .pricingTable.pink {
        border-bottom-color: #d81a60
    }

    .pricingTable.pink .price-value,
    .pricingTable.pink .pricingTable-signup:before {
        background: #d81a60
    }

    .pricingTable.pink .price-value:after,
    .pricingTable.pink .price-value:before {
        background: #a91a58
    }

    .pricingTable.pink .pricingTable-signup {
        border-color: #d81a60
    }

    .pricingTable.pink .pricingTable-signup:hover {
        color: #d81a60
    }

    @media only screen and (max-width:990px) {
        .pricingTable {
            margin-bottom: 30px
        }
    }
</style>
<section class="container">
    <div class="py-5" style="padding-top: 12% !important;">
        <div class="section-header text-center">
            <span class="subtitle ">Pricing Plan</span>
            <h2 class="title fw-bold display-4">Subscriptions</h2>
        </div>
    </div>
</section>
<section id="">
    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Basic</h3>
                            <span class="price-value">
                                $10<span class="month"></span>
                            </span>
                        </div>
                        <ul class="pricing-content">
                            <li>10 Free Courses files</li>
                            <li>5 Free Courses files</li>
                            <li>3 Free Courses files</li>
                            <li>2 Free Courses files</li>
                            <li>1 Free Course file</li>

                        </ul>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable orange">
                        <div class="pricingTable-header">
                            <h3 class="title">Standard</h3>
                            <span class="price-value">
                                $20<span class="month"></span>
                            </span>
                        </div>
                        <ul class="pricing-content">
                            <li>10 Free Courses files</li>
                            <li>5 Free Courses files</li>
                            <li>3 Free Courses files</li>
                            <li>2 Free Courses files</li>
                            <li>1 Free Course file</li>

                        </ul>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable pink">
                        <div class="pricingTable-header">
                            <h3 class="title">Premium</h3>
                            <span class="price-value">
                                $30<span class="month"></span>
                            </span>
                        </div>
                        <ul class="pricing-content">
                            <li>10 Free Courses files</li>
                            <li>5 Free Courses files</li>
                            <li>3 Free Courses files</li>
                            <li>2 Free Courses files</li>
                            <li>1 Free Course file</li>

                        </ul>
                        <a href="#" class="pricingTable-signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
