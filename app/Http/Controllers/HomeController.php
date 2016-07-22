<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    
    public function index()
    {   
        $new_products = Product::select('id', 'name', 'saleprice', 'image', 'cate_id', 'slug', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(8)->get();
        return view('users.pages.home', compact('new_products'));
    }
}
