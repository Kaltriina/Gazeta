@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('userController.update', [$users->id]) }}">
    {{ csrf_field() }}

    <label for="name">Name:</label>
    <input type="text" value="{{$users->name}}" name="name">

    <label for="name">Email:</label>
    <input type="email" value="{{$users->email}}" name="email">
    
    <button class="btn btn-primary" type="submit" name="action">Save</button>
    
</form>

@endsection