<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Cart;
use App\Order;
use Auth;
use App\Product;

class OrderController extends Controller
{
    function muahang(Request $request){
        $product = Product::where('id', $request->id)->first()->toArray();
        if($request->quantity > $product['quantity']){
            return  redirect()->back()->with('flash-message','Hiện tại của hàng không đủ để số lượng mà bạn mua!');
        }
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
    function capnhatgiohang($id, Request $request){
    	Cart::update($id, $request->quantity);
    	return redirect()->back();
    }
    function tienhanhthanhtoan(){
    	return view('users.pages.checkout');
    }
    function xulythanhtoan(Request $request){
    	$customerInfo = array();
    	$customerInfo['ho'] = $request->ho;
    	$customerInfo['ten'] = $request->ten;
    	$customerInfo['email'] = $request->email;
    	$customerInfo['dienthoai'] = $request->dienthoai;
    	$customerInfo['congty'] = $request->congty;
    	$customerInfo['diachi1'] = $request->diachi1;
    	$customerInfo['diachi2'] = $request->diachi2;
    	$customerInfo['thanhpho'] = $request->thanhpho;
    	// $customerInfo['confirm'] = $request->confirm;
    	
    	$customerInfo = json_encode($customerInfo);
    	$carts = Cart::content();
    	foreach ($carts as $item) {
    		$product = Product::where('id', $item['id'])->first();
    		$product->quantity = $product->quantity - $item['qty'];
    		$product->saled = $product->saled + $item['qty'];
    		$product->save();
    	}
    	$cartInfo = json_encode($carts);

    	$order = new Order;
    	if(!Auth::guest()){
    		$order->user_id = Auth::user()->id;
    	}else{
    		$order->user_id = 1;
    	}
    	$order->customerInfo = $customerInfo;
    	$order->cartInfo = $cartInfo;
        $order->total = Cart::total();
    	$order->comment = $request->confirm;
    	$order->save();
    	Cart::destroy();
    	$orders = Order::get()->toArray();
    	return redirect('/');
	}

    function getList(){
        $orders = Order::orderBy('status','ASC')->get()->toArray();
        return view('admin.order.list', compact('orders'));
    }
    function newOrder(){
        $orders = Order::where('status', 0)->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.order.new', compact('orders'));
    }
    function deleteOrder($id){
        $order = Order::find($id);
        $order->delete();
        return redirect()->back();
    }
    function viewOrder($id){
        $order = Order::where('id', $id)->first()->toArray();
        if($order['status'] == 0){
            $luu = Order::find($id);
            $luu->status = 1;
            $luu->save();
        }
        
        return view('admin.order.view', compact('order'));
    }
    function confirmOrder($id){
        $luu = Order::find($id);
        $luu->status = 2;
        $luu->save();
        return redirect()->back();
    }
}

