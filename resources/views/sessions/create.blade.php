@extends ('layouts.master_post')

@section ('content')

	<h1>Sign In</h1>

	<form method="POST" action="/login">
		
		{{ csrf_field() }}

		<div class="form-group">
			
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control">

		</div>

		<div class="form-group">
			
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control">

		</div>

		<button type="submit" class="btn btn-primary">Sign In</button>

	</form>

	@include ('layouts.error')

		
@endsection