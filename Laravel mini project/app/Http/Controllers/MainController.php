<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\products;

class MainController extends Controller
{
    public function index()
    {
        $products = products::paginate(10);
        return view('main.index',['products' => $products]);

    }
}