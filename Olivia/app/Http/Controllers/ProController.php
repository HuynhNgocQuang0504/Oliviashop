<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products; 
use App\Models\categories; 

class ProController extends Controller
{
 public function list(){
    $products=products::all();
    $categories=categories::all();
    return view('list',compact('products','categories'));
 }
}
