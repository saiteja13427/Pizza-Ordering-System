@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Pizza Orders</h1>
        <ol>
    	@foreach($pizzas as $pizza)
    	<div class="links">
    		<li><a href="/pizza/{{$pizza->id}}"> {{$pizza->name}}</a></li>
    	</div>
    	@endforeach	
        </ol>
        
    </div>
@endsection
