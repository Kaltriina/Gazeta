@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <a class="btn btn-primary" href="" role="button">Add Category </a>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>                    
                </tr>
            </thead>
    
            <tbody>
                @foreach ($categories as $category)                    
                    <tr>
                        <td>{{$category->id}}</td>
                    <td><a href=""> {{$category->name}}</a></td>
                        <td>{{$category->created_at}}</td>
                    @if(\Auth::check())
                    <td><a class="btn btn-primary" href="" role="buttom">Edit</a></td>
                        <td>
                        <form method="POST">      
                             {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit" role="button" name="action">Delete</button>  
                            </form>
                        </td>				
                    @endif
                    </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>    
@endsection