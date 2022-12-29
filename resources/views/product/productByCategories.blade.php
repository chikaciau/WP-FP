@extends('layouts.main')

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">

    <h2 class="title">
        <blockquote class="blockquote">
            <p class=" mb-0 display-5">Products</p>
        </blockquote>
    </h2>
    <div class="row">
        @foreach($products as $pro)
        <div class="col-4">
            <a href="product-details.html">
                <img src="{{ asset('images/'.$pro->photo) }}">
            </a>
            <h4><a href="product-details.html">{{ $pro->name }}</a></h4>
            <p>{{ $pro->price }}</p>
        </div>
        @endforeach
    </div>
