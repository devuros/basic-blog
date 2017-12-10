<div id="navbar" class="total-width">
	<div id="nav" class="site-width center">
		<ul>
			<li>
				<a href="/posts">Home</a>
			</li>
			<li>
				<a href="/posts">New features</a>
			</li>
			<li>
				<a href="/posts">Press</a>
			</li>
			<li>
				<a href="/posts">New hires</a>
			</li>
			<li>
				<a href="/posts">About</a>
			</li>
		</ul>

		@if (Auth::check())

			<ul style="float: right;">
				<li>
					<a href="/posts" class="ml-auto">
						
						{{ Auth::user()->name }}

					</a>
				</li>
				<li>
					<a href="/logout" class="ml-auto">Logout</a>
				</li>
			</ul>

		@else

			<ul style="float: right;">
				<li>
					<a href="/login" class="ml-auto">Login</a>
				</li>
			</ul>

		@endif

	</div>
</div>
<div id="header-bar" class="total-width">
	<div id="header" class="site-width center">
		<h1>The Css Blog</h1>
		<p>An example blog template built with Css.</p>
	</div>
</div>