@extends ('layouts.master_post')

@section ('content')

	<h1>
		
		{{ $post->title }}

	</h1>

	@if(count($post->tags))

		<ul>
			
			@foreach($post->tags as $tag)

				<li>

					<a href="/posts/tags/{{ $tag->name }}">

						{{ $tag->name }}

					</a>

				</li>

			@endforeach

		</ul>

	@endif

	<p>
		
		{{ $post->body }}

	</p>

	<hr/>

		@foreach($post->comments as $comment)

			<article>
				
				<strong>
					
					{{ $comment->created_at->diffForHumans() }}: &nbsp;

				</strong>

				{{ $comment->body }}

			</article>

		@endforeach

		<hr/>

		<div class="card">

			<div class="card-block">
			
				<form method="POST" action="/posts/{{ $post->id }}/comments">

					{{ csrf_field() }}
					
					<div class="form-group">
						
						<textarea class="form-control" name="body" placeholder="Your comment here."></textarea>

					</div>

					<button type="submit" class="btn btn-primary">Add comment</button>

				</form>

			@include ('layouts.error')

			</div>

		</div>

@endsection