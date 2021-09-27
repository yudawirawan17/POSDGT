<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
  
        return view('products.index',compact('products'));
    }
}
