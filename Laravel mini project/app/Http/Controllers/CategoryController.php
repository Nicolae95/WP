<?php

namespace App\Http\Controllers;

use App\categories;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProductsCategories;
use Request;


class CategoryController extends Controller
{

    public function indexcat(){
        $categories = categories::all();
        return view('admin.categories',['categories' => $categories]);
    }

    public function destroycat($id){
        categories::destroy($id);
        return redirect('/admin/categories');
    }

    public function category($id){
//        $categories = categories::findOrFail($id)->paginate(10);

       $products= ProductsCategories::join('products', 'products.id','=','products_categories.id_prod')
            ->select('products.*')
           ->where('id_cat',$id)
           ->paginate(10);
        
        $category = categories::where('id',$id)->first();
        
        return view('main.view',[
            'products' => $products,
            'category' => $category
        ]);
    }

        public function newCategory(){
        return view('admin.newcat');
    }

    public function addcat() {

        $product  = new categories();
        $product->name =Request::input('name');

        $product->save();

        return redirect('/admin/categories');

    }
}