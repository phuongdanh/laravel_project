<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Cart;

class OrderController extends Controller
{
    function muahang(Request $request){
    	$item = DB::table('products')->where('id', $request->id)->first();
    	Cart::add(['id' => $item->id, 'name' => $item->name, 'qty' => $request->quantity, 'price' => $item->saleprice, 'options' => ['size' => $request->size,'image' => $item->image]]);
    	$content = Cart::content();
    	return redirect()->back();
    }
    function giohang(){
    	$carts = Cart::content();
    	return view('users.pages.cart', compact('carts'));
    }
    function xoagiohang($rowId){
    	Cart::remove($rowId);
    	return redirect()->back();
    }
}
