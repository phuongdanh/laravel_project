<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Hash;
use App\User;
use Auth;

class UserController extends Controller
{
    public function forms(){
    	return view('users.pages.register');
    }
    public function postRegister(UserRequest $request){
    	$user = new User;
    	$user->firstname = $request->ho;
    	$user->lastname = $request->ten;
    	$user->email = $request->email;
    	$user->address = $request->diachi;
    	$user->password = Hash::make($request->password);
    	$user->remember_token = $request->_token;
    	$user->save();
    }
    public function listUser(){
    	$users = User::orderBy('id', 'DESC')->get()->toArray();
        User::where('id', '<>', 0) ->update(['status' => 1]);;
    	return view('admin.user.list', compact('users'));
    }
    public function delete($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->action('UserController@listUser');
    }
    
}
