@extends('template.blog')

@section('title', 'Blog Admin')

@section('content')
	<h1>Blog Admin</h1>
	<a href="{{ route('admin.posts.create') }}" title="Criar Post" class="btn btn-success">Create Post</a>
	<br />
	<br />
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="text-center">#</th>
				<th class="text-center">Title</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($posts as $post)
			<tr>
				<td class="text-center">{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td class="text-center">
					<a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" title="Editar Post" class="btn btn-default">Edit</a>
					<a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" title="Delete Post" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	{!! $posts->render() !!}
@endsection