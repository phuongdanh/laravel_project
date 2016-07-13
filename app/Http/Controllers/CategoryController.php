<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Helpers\SupportFunction;

class CategoryController extends Controller
{
	#getList la function de show ra danh sach cac danh muc co trong database
	function getList(){
		$data = Category::all();
		return view('admin.cate.list', compact('data'));
	}

	#2 function nay la de thuoc hien viec add new category
	#getAdd se show ra cho nguoi dung mot form html
    function getAdd(){
    	$categories = Category::all()->toArray();
    	return view('admin.cate.add', compact('categories'));
    }
    #postAdd se xu ly du lieu duoc gui len tu form 
    #sau do insert du lieu da xu ly vao bang database
    function postAdd(Request $request){
    	$category = new Category;
    	$category->name = $request->txtCateName;
    	$category->slug = SupportFunction::convertStr($request->txtCateName);
    	$category->description = $request->txtDescription;
        $category->user_id = 1;
    	$category->keyWords = $request->txtKey;
    	$category->parent_id = $request->parent_id;
    	$category->save();
    	#sau khi luu xong, trang se tu duoc chuyen ve trang danh sach cac danh muc
    	return redirect()->action('CategoryController@getList');
    }


    #function xoa danh muc san pham
    function deleteCategory($id){
        $data = Category::where('id',$id)->orWhere('parent_id',$id)->get()->toArray();
        $number = count($data);
        if($number <= 1){
            $category = Category::find($id);
            $category->delete($id);
            return redirect()->back()->with(['flash_message' => 'You have just deleted a catelog!', 'flash_level' => 'success']);
        }else{
            $ids_to_delete = array_map(function($item){ return $item['id']; }, $data);
            Category::whereIn('id', $ids_to_delete)->delete(); 
            return redirect()->back()->with(['flash_message' => 'You have just deleted a catelog and its children!', 'flash_level' => 'success']);
        }
        
    }

    #function editCategory xu ly ajax de sua danh muc
    function editCategory($id){
        $cateEdit = Category::find($id)->tojSon();
        return $cateEdit;
    }
    function postEdit(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->txtCateName;
        //$category->order = $request->txtOrder;
        $category->keywords = $request->txtKey;
        $category->description = $request->textDescription;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('admin.cate.list')->with(['flash_message' => 'Success!', 'flash_level' => 'success']);
    }
    
}
