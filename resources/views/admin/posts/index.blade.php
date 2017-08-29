@extends('layouts.admin')

@section('content')

	<h1>View All Posts</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				
				<th>Post ID</th>
				<th>Photo</th>
				<th>User</th>
				<th>Category</th>
				
				<th>Title</th>
				<th>Body</th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>
			@if($posts)
				@foreach($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/350x150' }}" alt=""></td>
						<td>{{$post->user->name}}</td>
						<td>{{$post->category->name}}</td>
						
						<td>{{$post->title}}</td>
						<td>{{$post->body}}</td>
						<td>{{$post->created_at->diffForHumans()}}</td>	
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
@endsection