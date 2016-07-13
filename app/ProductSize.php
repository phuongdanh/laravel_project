<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'product_sizes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','product_id', 'size_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public $timestamps = true;
}
