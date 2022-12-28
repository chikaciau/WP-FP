@extends('layouts.main')

@section('hero')
@include('layouts.hero')
@endsection

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">

            <a href="product-details.html"><img src="images/product-1.jpg"></a>
            <h4><a href="product-details.html">Red Printed T-Shirt</a></h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-2.jpg') }}">
            <h4>HRX Sports Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$75.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-3.jpg') }}">
            <h4>HRX Gray Trackpants</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$45.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-4.jpg') }}">
            <h4>Blue Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$55.00</p>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('images/product-5.jpg') }}">
            <h4>Puma Gray Sports Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$95.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-6.jpg') }}">
            <h4>Black Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$55.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-7.jpg') }}">
            <h4>HRX Set of 3 Socks</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$30.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-8.jpg') }}">
            <h4>Black Fossil Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$120.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('images/product-9.jpg') }}">
            <h4>Black Sportx Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$135.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-10.jpg') }}">
            <h4>Black HRX Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-11.jpg') }}">
            <h4>Gray Nike Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$55.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-12.jpg') }}">
            <h4>HRX Black Trackpants</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$75.00</p>
        </div>
    </div>
</div>
@endsection
