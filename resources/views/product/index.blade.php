@extends('layouts.main')
@section('css')
<style>
    form input {
        height: 100%;
    }

    #search-btn {
        width: auto;
    }

    #add {
        float: right;
        width: auto;
    }

    .card-btn {
        float: right;
        width: auto !important;
    }

    .icon-a {
        font-size: 150%
    }

    .col-4:hover {
        transform: none;
    }

</style>
@endsection

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">
    <h2 class="title">
        <blockquote class="blockquote">
            <p class=" mb-0 display-5">Products</p>
        </blockquote>
    </h2>
    <div class="row">
        <form action="" method="get" class="mb-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-10">
                            <input type="text" name="search" class="form-control" value="{{ request()->get('search') }}"
                                placeholder="Search">
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-outline-secondary btn-search rounded" type="submit"
                                id="search-btn">Search</button>
                        </div>
                    </div>
                </div>
        </form>
        <div class="col-lg-3 offset-lg-4">
            <a class="btn btn-outline-secondary rounded" id='add' href="{{ route('product_add') }}">Search</a>
        </div>
    </div>

    <div class="row">
        @foreach($products as $pro)
        <div class="media">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <div class="col mb-3">
                        <div class="media">
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid" style="width: 200px; height: 250px;"
                                        src="{{ asset('images/'.$pro->photo) }}">
                                </div>
                                <div class="col-4">
                                    <div class="media-body">
                                        <h5 class="mt-2"></h5>
                                        <p class="">
                                            {{ $pro->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="btn-group" role="group" style="float: right">
                                        <a href="" class="btn btn-secondary icon-a">
                                            <i class="bi bi-trash"></i></a>
                                        <a href="" class="btn btn-secondary icon-a">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-4">
            <a href="{{ route('product_detail', ['id'=>$pro->id]) }}">
        <img src="{{ asset('images/'.$pro->photo) }}">
        </a>
        <h4><a href="product-details.html">{{ $pro->name }}</a></h4>
        <p>{{ $pro->price }}</p>
    </div> --}}
    @endforeach
</div>
</div>

@endsection