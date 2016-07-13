<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
   	protected $table = 'favorites';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    public $timestamps = true;
}
