<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_products = DB::table('products')->select('id', 'name', 'saleprice','image', 'slug')->orderBy('created_at', 'DESC')->skip(0)->take(8)->get();
        return view('users.pages.home',compact('new_products'));
    }
}
