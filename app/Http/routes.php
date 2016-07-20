<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/{id}56651-{slug}', ['as' =>'productsOfCategory', 'uses'=>'ProductController@showProduct']);
Route::get('/{id}15664-{slug}', ['as' => 'productDetail', 'uses' => 'ProductController@viewDetail']);




Route::get('test_product', function(){
	return view('users.pages.product');
});
Route::get('test_detail', function(){
	return view('users.pages.detail');
});
Route::get('test_cart', function(){
	return view('users.pages.cart');
});
Route::get('test_checkout', function(){
	return view('users.pages.checkout');
});
Route::get('test_contact', function(){
	return view('users.pages.contact');
});
Route::get('test_register', function(){
	return view('users.pages.register');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
	    Route::get('list',['as'=>'admin.cate.list','uses' => 'CategoryController@getList']);
	    Route::get('getAdd',['as'=>'admin.cate.getAdd','uses' => 'CategoryController@getAdd']);
	    Route::post('postAdd',['as'=>'admin.cate.postAdd','uses' => 'CategoryController@postAdd']);
	    Route::get('delete/{id}', ['as' => 'deleteCategory', 'uses' => 'CategoryController@deleteCategory']);
	    Route::get('edit/{id}', ['as' => 'editCategory', 'uses' => 'CategoryController@editCategory']);
	    Route::post('postEdit', ['as' => 'postEditCategory', 'uses' => 'CategoryController@postEdit']);
	});
	Route::group(['prefix' => 'product'], function () {
	    Route::get('getList', ['as' => 'getListProduct', 'uses' => 'ProductController@getList']);
	    Route::get('getAdd', ['as' => 'getAddProduct', 'uses' => 'ProductController@getAdd']);
	    Route::post('postAdd', ['as' => 'postAddProduct', 'uses' => 'ProductController@postAdd']);
	    Route::get('getEdit/{id}', ['as' => 'getEditProduct', 'uses' => 'ProductController@getEdit']);
	    Route::post('postEdit/{id}', ['as' => 'postEditProduct', 'uses' => 'ProductController@postEdit']);
	    Route::get('delete/{id}', ['as' => 'deleteProduct', 'uses' => 'ProductController@deleteProduct']);
	});
	Route::group(['prefix' => 'image'], function(){
		Route::post('delete', ['as' => 'deleteImage', 'uses' => 'ImageController@postDelete']);
	});
});


