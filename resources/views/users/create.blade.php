@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="col-md-6">        
            <form method="post" action="{{url('users/store')}}">
                
                <div class="form group">
                    <label for="">Full Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
        
                <div class="form group">
                        <label for="">Email Address:</label>
                        <input type="text" class="form-control" name="email">
                </div>

                <button class="btn btn-primary">Submit</button>
            </form> 
            </div>
        </div> 
    </div>
@endsection