@extends('layouts.main')

@section('css')
<style>
    #ProductImg {
        max-width: 400px;
        max-height: 500px;
        min-width: 400px;
        min-height: 500px;
    }

    .btn {
        border-radius: 15px;
        width: auto !important;
    }

</style>
@endsection

@section('content')
<!--------------single-product--------------->
<div class="small-container single-product mb-5">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('images/'.$data->photo) }}" id="ProductImg">
        </div>
        <div class="col-2">
            <p>{{ $data->category }}</p>
            <h1>{{ $data->name }}</h1>
            <h4>Rp. {{ number_format($data->price) }}</h4>
            <form action="">
                <input type="number" value="1">
                <button type="submit" class="btn">Add To Cart</button>
            </form>

            <h3>PRODUCT DETAILS</h3>
            <br>
            <p>{{ $data->detail }}</p>
        </div>
    </div>
</div>
@endsection
