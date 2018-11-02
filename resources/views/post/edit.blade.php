@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('postController.update', [$posts->id])}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <label for="title">Title</label>
        <input type="text" value="{{$posts->title}}" name="title">
    <label for="content">Content</label>
        <input type="text" value="{{$posts->content}}" name="content">

    <label for="image">Image</label>
    <img height="50px" src="/images/{{$posts->images}}" alt="035465">
        <input type="file" class="form-control-file" id="exampleInputFile" name="images" aria-describedby="fileHelp" accept="images">        

        <button class="btn btn-primary" type="submit" name="action">Save</button>        
</form>
@endsection