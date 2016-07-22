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
        $category->user_id = 4;
    	$category->keyWords = $request->txtKey;
    	$category->parent_id = $request->parent_id;
    	$category->save();
    	#sau khi luu xong, trang se tu duoc chuyen ve trang danh sach cac danh muc
    	return redirect()->action('CategoryController@getList');
    }


    #function xoa danh muc san pham
    function deleteCategory($id){
        $data = Category::where('parent_id',$id)->get()->toArray();
        if(count($data) > 0){
            return redirect()->route('admin.cate.list')->with(['flash_message' => 'Bạn không được xóa danh mục này, vì rất nhiều danh mục con trong nó', 'flash_level' => 'warning']);
        }else{
            $currentCate = Category::find($id);
            $currentCate->delete();
            return redirect()->route('admin.cate.list')->with(['flash_message' => 'Bạn vừa xóa thành công một thư mục!', 'flash_level' => 'success']);
        }
        
    }
    // #function xoa danh muc san pham
    // function deleteCategory($id){
        
    //     $currentCate = Category::find($id);
    //     if($currentCate){
    //         echo 'Chung da ton tai';
    //         $currentCate->delete();

    //         $data = Category::where('parent_id',$id)->get()->toArray();
    //         $number = count($data);
    //         if($number <= 0){
    //             // return redirect()->route('admin.cate.list')->with(['flash_message' => 'You have just deleted a catelog!', 'flash_level' => 'success']);
    //             $x = 1;
    //         }

    //         if($number > 0){
    //         $ids_to_delete = array_map(function($item){ return $item['id']; }, $data);
    //             for($i = 0; $i < count($ids_to_delete); $i++){
    //                 echo $ids_to_delete[$i].'<hr />';
    //                 $this->deleteCategory($ids_to_delete[$i]);
    //             }
    //             $x = 0;
    //         }

    //     }
    //     if(isset($x)){
    //         if($x == 1){
    //             return redirect()->route('admin.cate.list')->with(['flash_message' => 'You have just deleted a catelog!', 'flash_level' => 'success']);
    //         }
    //     }
        
        
    // }

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
