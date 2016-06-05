@extends('layouts.master')

@section('Edit Product', 'Page Title')

@section('sidebar')
    @parent
@endsection
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Edit Product: {{$product->name}}</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/product/update/ {{$product->id}}" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" value="{{$product->name}}" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Price</label>
                        <div class="col-md-9">
                            <input id="price" name="price" type="text" value="{{$product->price}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">Category</label>
                        <div class="col-md-9">


                            <select multiple="multiple" name="categories[]">
                                @foreach($categories as $category)

                                        <option value="{{$category->id}}" @foreach($product->categories as $cat) @if($category->id == $cat->id) selected="selected" @endif @endforeach>{{$category->name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>

                </fieldset>

            </form>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection