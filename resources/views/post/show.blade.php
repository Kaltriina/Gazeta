@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$show->title}}</h1>
    <p>{{$show->content}}</p>
    <p><img src="/images/{{$show->images}}"></p>
    <p>{{$show->user->name}}</p>
    <p>{{$show->created_at->diffForHumans()}}</p>
</div>
@endsection