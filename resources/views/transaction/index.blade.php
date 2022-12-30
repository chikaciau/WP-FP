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

    th {
        color: black;
    }

    th:last-child,
    td:last-child {
        text-align: left;
    }

</style>
@endsection

@section('content')
<!-------------- Our Featured Products -------------->

<div class="small-container categories">
    <h2 class="title">
        <blockquote class="blockquote">
            <p class=" mb-0 display-5">Yor Transaction</p>
        </blockquote>
    </h2>
    <div class="row mb-5">
        @foreach($transaction as $dt)
        <div class="media">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Transaction Date: {{ $dt->created_at }}</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $quantity=0;
                            @endphp
                            @foreach ($dt->detail as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp. {{ number_format($item->sub_total) }}</td>
                            </tr>
                            @php
                            $quantity+=$item->qty
                            @endphp
                            @endforeach
                            <tr style="font-weight: bolder">
                                <th scope="row" colspan="2">Total</th>
                                <td>{{ $quantity }}</td>
                                <td>Rp. {{ number_format($dt->total) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endsection

    @if (Session::has('success-purchase'))
    @section('js')
    <script>
        Swal.fire({
            title: 'Success',
            text: "Successfully Purhased",
            icon: 'success',
            confirmButtonText: 'Ok'
        })

    </script>
    @endsection
    @endif
