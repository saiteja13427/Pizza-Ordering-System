<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;


class PizzaController extends Controller
{
    
	public function index(){
		$pizzas = Pizza::orderBY('name', 'desc')->get();
		return view('pizzas.index', ['pizzas'=>$pizzas]);
    }

    public function show($id){
    	$pizzas = Pizza::findOrFail($id);
		return view('pizzas.show', ['pizzas'=>$pizzas]);
    }

    public function create(){
    	return view('pizzas.create');
    }


    public function store(){
    	
    	$pizza = new Pizza();
	
    	$pizza->name = request('name');
		$pizza->base = request('base');
		$pizza->type = request('type');
		$pizza->toppings = request('toppings');

		$pizza->save();

		return redirect('/')->with('msg', "Thanks for ordering Pizza");    
    }

    public function destroy($id){
    	$pizza =Pizza::findOrFail($id);
    	$pizza->delete();

    	return redirect('/pizza');
    }
}

