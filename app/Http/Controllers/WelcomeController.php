<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
class WelcomeController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('welcome',compact('product'));
    }
}
