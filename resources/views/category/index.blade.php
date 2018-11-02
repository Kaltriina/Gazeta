@extends('layouts.app')

@section('content')
<div class="container">
	<table class="table">
		<thead>
			<tr>
			<a class="btn btn-primary" href="{{action('PostController@create')}}" role="button">Add Post </a>
				<th>Id</th>
                <th>Title</th>
                
				<th>Created at</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{$post->id}}</td>
				<td><a href="{{action('CategoryController@show', $post->id)}}"> {{$post->title}}</a></td>
					<td>{{$post->content}}</td>
					<td>
						<div class="row">
							<div class="col-md-4 col-sm-4">
							<img height="50px" src="/images/{{$post->images}}" alt="035465">
							</div>
						</div>
					</td>
					<td>{{$post->created_at->diffForHumans()}}</td>
				<td><a class="btn btn-primary" href="{{action('PostController@edit', $post->id)}}" role="buttom">Edit</a></td>
					<td>
					<form method="POST" action="{{action('PostController@destroy', $post->id)}}">      
             			{{ csrf_field() }}
                			<button class="btn btn-danger" type="submit" role="button" name="action">Delete</button>  
            			</form>
					</td>
				</tr>
        	@endforeach

		</tbody>
	</table>
</div>
@endsection