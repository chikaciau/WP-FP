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
            <p class=" mb-0 display-5">Your Shoping Cart</p>
        </blockquote>
    </h2>
    <div class="row">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-2">
                    Total:
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" value="Rp. {{ number_format($total) }}" disabled>
                </div>
                <div class="col-lg-2">
                    @if($total>0)
                    <a href="{{ route('cart_purchase') }}" class="btn btn-outline-secondary btn-search rounded"
                        id="search-btn">Purchase</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach($data as $dt)
            <div class="media">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="col mb-3">
                            <div class="media">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="img-fluid" style="width: 200px; height: 250px;"
                                            src="{{ asset('images/'.$dt->product->photo) }}">
                                    </div>
                                    <div class="col-4">
                                        <div class="media-body">
                                            <h3 class="mb-4" style="font-weight: bolder">
                                                {{ $dt->product->name }}
                                            </h3>
                                            <p>
                                                Qty: {{ $dt->qty }}
                                            </p>
                                            <p>
                                                Total: Rp.{{ number_format($dt->sub_total) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="btn-group" role="group" style="float: right">
                                            <a href="{{ route('cart_destroy', ['id' => $dt->id]) }}"
                                                class="btn btn-secondary icon-a">
                                                <i class="bi bi-trash"></i>
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
        </div>
    </div>
    @endsection

    @if (Session::has('success-delete'))
    @section('js')
    <script>
        Swal.fire({
            title: 'Success',
            text: "successfully removing a product",
            icon: 'success',
            confirmButtonText: 'Ok'
        })

    </script>
    @endsection
    @endif

    @if (Session::has('success-add'))
    @section('js')
    <script>
        Swal.fire({
            title: 'Success',
            text: "Successfully added the product to the shopping cart",
            icon: 'success',
            confirmButtonText: 'Ok'
        })

    </script>
    @endsection
    @endif
