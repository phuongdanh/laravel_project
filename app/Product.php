<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug' , 'price', 'saleprice', 'image', 'intro', 'quantity','liked', 'viewed', 'saled', 'description', 'cate_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public $timestamps = true;

    public function getimages(){
        return $this->hasMany('App\Image');
    }
    public function getsizes(){
        return $this->hasMany('App\ProductSize');
    }
}
