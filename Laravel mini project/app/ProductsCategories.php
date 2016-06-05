<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 5/26/2016
 * Time: 21:37
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
    protected $table = 'products_categories';
    public $timestamps = false;
}