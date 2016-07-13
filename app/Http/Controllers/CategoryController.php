<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
	#getList la function de show ra danh sach cac danh muc co trong database
	function getList(){
		$categories = Category::all()->toArray();
		return view('admin.category.list', compact('categories', $categories));
	}

	#2 function nay la de thuoc hien viec add new category
	#getAdd se show ra cho nguoi dung mot form html
    function getAdd(){
    	$categories = Category::all()->toArray();
    	return view('admin.category.add', compact('categories', $categories));
    }
    #postAdd se xu ly du lieu duoc gui len tu form 
    #sau do insert du lieu da xu ly vao bang database
    function postAdd(Request $request){
    	$category = new Category;
    	$category->name = $request->name;
    	$category->slug = $request->name;
    	$category->description = $request->description;
    	$category->user_id = 1;
    	$category->parent_id = $request->parent_id;
    	$category->save();
    	#sau khi luu xong, trang se tu duoc chuyen ve trang danh sach cac danh muc
    	return redirect()->action('CategoryController@getList');
    }
    
}
