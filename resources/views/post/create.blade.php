@extends('layouts.app')

@section('content')
    <div class="container">
    <form method="POST" action="{{action('PostController@store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="title" class="form-control" id="exampleInputTitle" name="title" placeholder="title">
                </div>
                <div class="form-group">
                <label for="exampleTextarea">Description of Content</label>
                <textarea class="form-control" id="exampleTextarea" name="content" rows="3"></textarea>
                </div>
                @foreach ($categories as $category)                
                    <div class="category_container">        
                        <input class="form-check-input" type="radio" name="category" value="{{$category->id}}" id="defaultCheck{{$category->id}}">
                        <label class="form-check-label" for="defaultCheck1">{{$category->name}}</label>       
                    </div>         
                @endforeach
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" name="images" aria-describedby="fileHelp" accept="images">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                </fieldset>
                <button class="btn btn-success" type="submit" name="action">Save</button>
            </form>
    </div>
@endsection