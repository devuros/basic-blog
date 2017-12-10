@extends ('layouts.master_post')

@section ('content')

	<h1>Publish a post</h1>

	<hr/>

	<form method="POST" action="/posts">

		{{-- pravi token koji stiti --}}
		
		{{ csrf_field() }}

		<div class="form-group">

			<label for="tbTitle">Title:</label>
			<input type="text" id="tbTitle" class="form-control" name="title">

		</div>
		
		<div class="form-group">

			<label for="taBody">Body</label>
			<textarea id="taBody" class="form-control" name="body"></textarea>

		</div>

		<button type="submit" id="btnSubmit" class="btn btn-primary">Publish</button>
		
	</form>

	@include ('layouts.error')

@endsection