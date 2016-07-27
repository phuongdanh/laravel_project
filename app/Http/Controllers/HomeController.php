<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    
    public function index()
    {   
    	$best_products = Product::select('id', 'name', 'saleprice', 'image', 'cate_id', 'slug', 'created_at')->orderBy('saled', 'DESC')->skip(0)->take(8)->get();
        $new_products = Product::select('id', 'name', 'saleprice', 'image', 'cate_id', 'slug', 'created_at')->orderBy('id', 'DESC')->skip(0)->take(8)->get();
        return view('users.pages.home', compact('new_products', 'best_products'));
    }
}
