@php
$country = ['Indonesia', 'United States', 'Argentina', 'Costa Rica', 'Japan', 'Brazil'];
@endphp

@extends('layouts.main')
@section('css')
<style>
    .row {
        justify-content: space-around;
    }

</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">



                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}">


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}">

                        </div>
                    </div>





                    <div class="row mb-3">
                        <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                        <div class="col-md-6">
                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                name="dob" value="{{ old('dob') }}">


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
