<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    protected $table = 'products';
    public $timestamps = false;

    public function categories()
    {
        return $this->belongsToMany('App\categories','products_categories','id_prod','id_cat');
    }
    public function getCategoryListAttribute()
    {
        return $this->categories->lists('id');
    }

}
