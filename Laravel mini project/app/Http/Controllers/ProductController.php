<?php

namespace App\Http\Controllers;

use App\products;
use App\categories;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Request;


class ProductController extends Controller
{
   
    public function index(){
        $products = products::paginate(10);

        return view('admin.products',['products' => $products]);
    }

    public function destroy($id){
        products::destroy($id);
        return redirect('/admin/products');
    }

    /**
     * @return $this
     */
    public function newProduct(){

        $categorie=categories::all();

        return view('admin.new')->with('categories',$categorie);
    }

    public function editProduct($id){

        $categorie=categories::all();
        $product = products::findOrFail($id);

        return view('admin.edit')->with('categories',$categorie)->with('product',$product);
    }

    public function update($id,Requests\CreateProductRequest $request) {

        $product = products::findOrFail($id);

        $product->name =$request->input('name');
        $product->price =$request->input('price');

        $product->update();

        $product->categories()->sync($request->input('categories'));

        return redirect('/admin/products');

    }
    
    public function add(Requests\CreateProductRequest $request) {

        $product  = new products();
        $product->name = $request->input('name');
        $product->price = $request->input('price');

        $product->save();

        $product->categories()->attach($request->input('categories'));

        return redirect('/admin/products');

    }
    
}