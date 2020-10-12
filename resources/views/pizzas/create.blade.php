@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">
    <h1>Create A New Pizza</h1>
    <form action="/pizza" method="POST">
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <label for="type">Choose the pizza type: </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg Supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type: </label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>  
        <fieldset>
            <h3>Toppings</h3>
            <label for="toppings"></label>
                <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br>
                <input type="checkbox" name="toppings[]" value="pepper">Pepper<br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
                <input type="checkbox" name="toppings[]" value="olives">Olives<br>
        </fieldset>
        <input type="submit" value="Order Pizza">      
    </form>

</div>
@endsection
