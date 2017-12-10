<div id="sidebar-about">
	<h2>About</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.
	</p>
</div>
<div id="sidebar-archives">
	<h2>Archives</h2>
	
	<ol class="list-unstyled">

	@foreach($archives as $arc)

		<li>
			
			<a href="/posts?month={{ $arc['month'] }}&year={{ $arc['year'] }}">

				{{ $arc['month'] .' '. $arc['year'] }}

			</a>

		</li>

	@endforeach

	</ol>

</div>

<div id="sidebar-archives">
	<h2>Tags</h2>
	
	<ol class="list-unstyled">

	@foreach($tags as $tag)

		<li>
			
			<a href="/posts/tags/{{ $tag }}">

				{{ $tag }}

			</a>

		</li>

	@endforeach

	</ol>

</div>


<div id="sidebar-elsewhere">
	<h2>Elsewhere</h2>
	<ul>
		<li>
			<a href="/posts">GitHub</a>
		</li>
		<li>
			<a href="/posts">Twitter</a>
		</li>
		<li>
			<a href="/posts">Facebook</a>
		</li>
	</ul>
</div>