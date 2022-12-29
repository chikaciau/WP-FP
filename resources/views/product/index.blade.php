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

    .row {
        justify-content: space-around;
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
            <a class="btn btn-outline-secondary rounded" id='add' href="{{ route('product_add') }}">
                Add Product +</i></a>
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
                                        <a href="{{ route('product_destroy', ['id' => $pro->id]) }}"
                                            class="btn btn-secondary icon-a">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="{{ route('product_edit', ['id' => $pro->id]) }}"
                                            class="btn btn-secondary icon-a">
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
        @endforeach
        <div class="mb-5">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection

@if (Session::has('success-store'))
@section('js')
<script>
    Swal.fire({
        title: 'Success',
        text: "successfully added a new product",
        icon: 'success',
        confirmButtonText: 'Ok'
    })

</script>
@endsection
@endif

@if (Session::has('success-edit'))
@section('js')
<script>
    Swal.fire({
        title: 'Success',
        text: "Successfully updated the product",
        icon: 'success',
        confirmButtonText: 'Ok'
    })

</script>
@endsection
@endif

@if (Session::has('success-delete'))
@section('js')
<script>
    Swal.fire({
        title: 'Success',
        text: "successfully deleted the product",
        icon: 'success',
        confirmButtonText: 'Ok'
    })

</script>
@endsection
@endif
