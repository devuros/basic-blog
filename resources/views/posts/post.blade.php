<div class="post">

	<h1>

		<a href="/posts/{{ $post->id }}">
			{{ $post->title }}
		</a>

	</h1>

	<h3>

		{{ $post->user->name }} on

		{{ $post->created_at->toFormattedDateString() }}

	</h3>
	
	<p>

		{{ $post->body }}

	</p>

</div>