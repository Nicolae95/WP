@extends('layouts.master')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/product/new"><button class="btn btn-success">New Product</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}$</td>
                            <td>
                                @foreach($product->categories as $category)
                                    {{$category->name}},
                                @endforeach
                            </td>
                          </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
