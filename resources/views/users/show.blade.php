@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$show->name}}</h1>
        <p>{{$show->email}}</p>
        <p>{{$show->created_at}}</p>
    </div>
@endsection