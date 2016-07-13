<?php 
namespace App\Helpers;
/**
* 
*/
class SupportFunction
{
	public static function convertStr($str) {
	    $str = trim(mb_strtolower($str));
	    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	    $str = preg_replace('/(đ)/', 'd', $str);
	    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
	    $str = preg_replace('/([\s]+)/', '-', $str);
	    return $str;
	}

	public static function cate_parent($data, $parent = 0, $str = "", $select = 0) {
	    foreach ($data as $key => $value) {
	        if ($value["parent_id"] == $parent) {
	            if($select != 0 && $value['id'] == $select){
	                echo "<option selected='selected' value='" . $value['id'] . "'>" . $str . $value['name'] . "</option>";
	            }else{
	                echo "<option value='" . $value['id'] . "'>" . $str . $value['name'] . "</option>";
	            }
	            cate_parent($data, $value["id"], $str . "--");
	        }
	    }
	}
	
}
?>