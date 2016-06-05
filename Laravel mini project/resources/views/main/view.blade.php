@extends('layouts.master')

@section('Category', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h3>Category: {{ $category->name }}</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Edit</td>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}$</td>
                            <td><a href="/admin/product/{{$product->id}}/edit"><button class="btn btn-warning">Edit</button></a> </td>

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

