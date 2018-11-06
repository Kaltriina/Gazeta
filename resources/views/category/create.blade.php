@extends('layouts.app')

@section('content')
    <div class="container">
    <form  method="POST" action="{{action('CategoryController@store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <input type="title" class="form-control" id="exampleInputTitle" name="title" placeholder="Category">
                </div>            
                <button class="btn btn-success" type="submit" name="action">Save</button>
            </form>
    </div>
@endsection