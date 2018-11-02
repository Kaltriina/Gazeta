@extends('layouts.app')

@section('content')
<div class="container">  
    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Created at</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        
        @foreach ($users as $user)
        <tr>
          <td> {{ $user->id}}</td>
          <td><a href="{{action('UserController@show', $user->id)}}">{{ $user->name}}</a></td>
          <td>{{ $user->email}}</td> 
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td><a class="btn btn-primary" href="/users/{{$user->id}}/edit" role="button">Edit</a></td>
          <td>
            <form method="POST" action="{{ route('userController.delete', [$user->id]) }}">              
              {{ csrf_field() }}
                <button class="btn btn-primary" type="submit" role="button" name="action">Delete</button>  
            </form>
          </td>
        </tr>
        @endforeach        
        </tbody>
      </table> 
    </div>           
@endsection
