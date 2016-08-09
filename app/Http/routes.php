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
Route::get('/dang-ky-hoac-dang-ky', ['as' => 'loginOrRegister', 'uses' => 'UserController@forms']);
Route::post('/xu-ly-dang-ky', ['as' => 'xu-ly-dang-ky', 'uses' => 'UserController@postRegister']);
Route::post('dang-nhap', ['as' => 'dang-nhap', 'uses' => 'Auth\AuthController@login']);

Route::post('mua-hang', ['as' => 'mua-hang', 'uses' => 'OrderController@muahang']);
Route::get('gio-hang', ['as' => 'gio-hang', 'uses' => 'OrderController@giohang']);
Route::get('xoa-gio-hang/{rowId}', ['as' => 'xoa-gio-hang', 'uses' => 'OrderController@xoagiohang']);
Route::post('cap-nhat-gio-hang/{rowId}', ['as' => 'capnhatgiohang', 'uses' => 'OrderController@capnhatgiohang']);
Route::get('tien-hanh-thanh-toan',['as' => 'tienhanhthanhtoan', 'uses' => 'OrderController@tienhanhthanhtoan']);
Route::post('xu-ly-thanh-toan',['as' => 'xulythanhtoan', 'uses' => 'OrderController@xulythanhtoan']);

Route::get('tim-kiem', ['as' => 'xltimkiem', 'uses' => 'ProductController@xltimkiem']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('/', 'AdminController@statistic');
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
	    Route::get('reset-saled',['as' => 'reset-saled', 'uses' => 'ProductController@resetsaled']);
	});
	Route::group(['prefix' => 'users'], function () {
	    Route::get('listUser', ['as' => 'listUser', 'uses' => 'UserController@listUser']);
	    // Route::get('getAdd', ['as' => 'getAddProduct', 'uses' => 'ProductController@getAdd']);
	    // Route::post('postAdd', ['as' => 'postAddProduct', 'uses' => 'ProductController@postAdd']);
	    Route::get('getEdit/{id}', ['as' => 'getEditUser', 'uses' => 'UserController@getEdit']);
	    Route::post('postEdit/{id}', ['as' => 'postEditUser', 'uses' => 'UserController@postEdit']);
	    Route::get('delete/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@delete']);
	});
	Route::group(['prefix' => 'image'], function(){
		Route::post('delete', ['as' => 'deleteImage', 'uses' => 'ImageController@postDelete']);
	});
	Route::group(['prefix' => 'order'], function(){
		Route::get('list', ['as' => 'listOrder', 'uses' => 'OrderController@getList']);
		Route::get('new', ['as' => 'newOrder', 'uses' => 'OrderController@newOrder']);
		Route::get('delete/{id}', ['as' => 'deleteOrder', 'uses' => 'OrderController@deleteOrder']);
		Route::get('view/{id}', ['as' => 'viewOrder', 'uses' => 'OrderController@viewOrder']);
		Route::get('confirm/{id}', ['as' => 'confirmOrder', 'uses' => 'OrderController@confirmOrder']);
	});
});




Route::get('admin/form-login', ['as' => 'getAdminLogin', 'uses' => 'Auth\AuthController@getAdminLogin']);
Route::post('admin/login', ['as' => 'postAdminLogin', 'uses' => 'Auth\AuthController@postAdminLogin']);


Route::auth();

Route::get('/home', 'HomeController@index');
