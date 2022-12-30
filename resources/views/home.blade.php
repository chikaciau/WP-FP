@php
$a = 0;
@endphp
@extends('layouts.main')
@section('css')
<style>
    form input {
        height: 100%;
    }

</style>
@endsection

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">
    <form action="" method="get" class="mb-5">
        <div class="row">
            <div class="col-lg-10">
                <input type="text" name="search" class="form-control" value="{{ request()->get('search') }}"
                    placeholder="Search">
            </div>
            <div class="col-lg-2">
                <button class="btn btn-outline-secondary btn-search rounded" type="submit">Search</button>
            </div>
        </div>
    </form>

    @if ($search != null)
    <h2 class="title">
        <blockquote class="blockquote">
            <p class=" mb-0 display-5">Products</p>
        </blockquote>
    </h2>
    <div class="row">
        @foreach($products as $pro)
        <div class="col-4">
            <a href="{{ route('product_detail', ['id'=>$pro->id]) }}">
                <img src="{{ asset('images/'.$pro->photo) }}">
            </a>
            <h4><a href="product-details.html">{{ $pro->name }}</a></h4>
            <p>Rp. {{ number_format($pro->price) }}</p>
        </div>
        @endforeach
    </div>
    @else

    @foreach ($categories as $cat)
    <h2 class="title">
        <blockquote class="blockquote">
            <p class=" mb-0 display-5">{{ $cat }}</p>
            <footer class="blockquote-footer"><a href="{{ route('product_category', ["category" => $cat]) }}">View
                    More</a></footer>
        </blockquote>
    </h2>
    <div class="row">
        @foreach($products as $pro)
        @if ($pro->category == $cat)
        <div class="col-4">
            <a href="{{ route('product_detail', ['id'=>$pro->id]) }}">
                <img src="{{ asset('images/'.$pro->photo) }}">
            </a>
            <h4><a href="product-details.html">{{ $pro->name }}</a></h4>
            <p>Rp. {{ number_format($pro->price) }}</p>
        </div>
        @php
        $a++;
        if($a==4){
        break;
        $a = 0;
        }
        @endphp
        @endif
        @endforeach
    </div>
    @endforeach

    @endif

</div>

@endsection

@if (Session::has('success-register'))

@section('js')
<script>
    Swal.fire({
        title: 'Success',
        text: "Successfully Registered",
        icon: 'success',
        confirmButtonText: 'Ok'
    })

</script>
@endsection
@endif
