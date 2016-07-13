<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use App\Image;

use File;

use Request;

class ImageController extends Controller
{
    function postDelete(){
    	if(Request::ajax()){
    		$data = Request::all();
    		$id = $data["idImage"];
    		$image = Image::find($id);
			if($image){
				$imgFile = $image->path;
				if(File::exists($image)){
					File::delete($imgFile);
				}
		    	$image->delete();
		    }
		    return $id;
		}
		return 'Not';
		
    }
}
