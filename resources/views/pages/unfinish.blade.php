@extends('layouts.checkout')

@section('title')
LM Tour and Travel | Unfinish
@endsection
@section('name', 'Checkout Success')

@section('content')
<main>

    <div class="section-success d-flex align-items-center">
        <di class="col text-center">
        {{-- <img src="{{url('frontend/images/ic_succes.png')}}" alt=""> --}}
            <h1>Oops!</h1>
            <p>
                Your transaction is unfinished
            </p>
        <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </di>
    </div>
</main>
@endsection


