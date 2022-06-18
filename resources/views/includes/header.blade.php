<nav class="navbar">
	<div class="navbar-inner">
		<ul class="nav">
			@if (Route::has('login'))
			<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
				@auth
				<a href="{{ url('/new_listing') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Add Listing</a>
				<a href="{{ route('logout')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log out</a>
				@else
				<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

				@if (Route::has('register'))
				<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
				@endif
				@endauth
			</div>
			@endif
		</ul>
	</div>
</nav>