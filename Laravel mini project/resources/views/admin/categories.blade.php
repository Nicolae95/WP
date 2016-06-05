@extends('layouts.master')

@section('Categories', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/admin/category/new"><button class="btn btn-success">New Category</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <td>Name</td>
                <td></td>
                </thead>
                <tbody>
                @foreach ($categories as $categories)
                <tr>
                    <td>{{$categories->name}}</td>
                    <td><a href="/admin/category/destroy/{{$categories->id}}"><button class="btn btn-danger">Del</button></a> </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
