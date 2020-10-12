@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizzas->name}} </h1>
    <p>{{$pizzas->type}}</p>
    <p>{{$pizzas->base}}</p>
    <p>Toppings:</p>
    <ul>
    	@foreach($pizzas->toppings as $pizza)
    		<li>{{ $pizza }}</li>
    	@endforeach	
    </ul>
    <form action="/pizza/{{$pizzas ->id}}" method="POST">
    	@csrf
    	@method('DELETE')
    	<button>Complete Order</button>
    </form>
    <a href="/pizza"><-Back To All Pizzas-></a>
</div>
@endsection
