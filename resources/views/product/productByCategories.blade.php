@extends('layouts.main')

@section('css')
<style>
    .col-4 {
        margin: 0
    }

</style>
@endsection

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">
    <h2 class="title">
        <blockquote class="blockquote">
            <p class="mb-0 display-5">Products</p>
        </blockquote>
    </h2>
    <div class="row">
        @foreach($products as $pro)
        <div class="col-4">
            <a href="{{ route('product_detail', ["id" => $pro->id]) }}">
                <img src="{{ asset('images/'.$pro->photo) }}">
            </a>
            <h4><a href="{{ route('product_detail', ["id" => $pro->id]) }}">{{ $pro->name }}</a></h4>
            <p>Rp. {{ number_format($pro->price) }}</p>
        </div>
        @endforeach
        <div class="col-lg-12 mb-5">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
