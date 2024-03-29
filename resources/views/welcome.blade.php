@extends('Layouts.layout')


@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/images/pizza-house.png">
        <p class="msg" style="color: green"><strong> {{session('msg')}} </strong></p>
        <div class="title m-b-md">
            Norths' Best Pizza
        </div>
        <a href="pizza/create">Order a Pizza</a>

        
    </div>
</div>
@endsection
