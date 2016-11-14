@extends('template.blog')

@section('title', $title)

@section('content')
	@foreach ($posts as $post)
		<h2>{{ $post->title }} <i>({{ $post->created_at }})</i></h2>
		<p>{{ $post->content }}</p>

		<h3>Tags</h3>
		<ul>
		@foreach ($post->tags as $tag)
			<li>{{ $tag->name }}</li>
		@endforeach
		</ul>
		
		<h3>Comments</h3>
		@foreach ($post->comments as $comment)
			<p>Name: {{ $comment->name }}</p>
			<p>Comment: {{ $comment->comment }}</p>
		@endforeach
		<hr />
	@endforeach
@endsection