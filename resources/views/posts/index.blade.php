@extends ('layouts.master_post')

@section ('content')

	@foreach($posts as $post)

		@include ('posts.post')

	@endforeach

@endsection