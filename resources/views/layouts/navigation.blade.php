<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed z-50 top-0 w-full">
<!-- Language -->
<div class="fixed top-0 left-0 px-6 py-6 sm:block">
		<a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-custom text-xs">
			{{ Config::get('languages')[App::getLocale()] }}
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		@foreach (Config::get('languages') as $lang => $language)
			@if ($lang != App::getLocale())
					<a class="dropdown-item text-custom text-xs" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
			@endif
		@endforeach
		</div>
	</div>	
<!-- Primary Navigation Menu -->
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex justify-between h-16 w-95p">
			<div class="flex">
				
				<!-- Logo -->
				<div class="shrink-0 flex items-center">
					<a href="{{ route('store') }}">
						<span class="font-elsie text-xl text-custom">TYB</span>
					</a>
				</div>

				<!-- Navigation Links -->
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-nav-link :href="route('store')" :active="request()->routeIs('store')">
						{{ __('l.store') }}
					</x-nav-link>
				</div>
				@if (Auth::check())
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-nav-link :href="route('my-listings')" :active="request()->routeIs('my-listings')">
						{{ __('l.mylistings') }}
					</x-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-nav-link :href="route('chat')" :active="request()->routeIs('chat')">
						{{ __('l.chat') }}
					</x-nav-link>
					@if (Auth::user()->role == 'admin')
					<x-nav-link :href="route('delete-users')" :active="request()->routeIs('delete-users')">
					{{ __('l.deleteuser') }}s
					</x-nav-link>
					@endif
				</div>
				@endif
			</div>

			@if (Auth::check())
			<div class="hidden space-x-8 sm:-my-px sm:flex">
				<x-nav-link :href="route('new-listing')" :active="request()->routeIs('new-listing')" align="left">
					<b>{{ __('l.newlisting') }}</b>
				</x-nav-link>
			</div>

			<!-- Settings Dropdown -->
			<div class="hidden fixed top-0 right-0 pr-4 py-2 sm:block">
				<x-dropdown align="right" width="48">
					<x-slot name="trigger">
						<button
							class="flex items-center text-sm font-medium text-gray-500 hover:text-custom hover:border-gray-300 focus:outline-none focus:text-custom focus:border-gray-300 transition duration-150 ease-in-out">
							<img class="image aspect-square" src="{{asset('/storage/images/'.Auth::user()->image)}}"
								alt="profile_image"
								style="object-fit:cover; width:3rem; height:3rem; padding: 10px; margin: 0px; border-radius:50%;">
							<div class="ml-1">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<path fill-rule="evenodd"
										d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
										clip-rule="evenodd" />
								</svg>
							</div>
						</button>
					</x-slot>

					<x-slot name="content">
						<div class="px-4 py-2">
							<div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
							<div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
							<hr class="mt-2 mb-0">
						</div>
						<x-dropdown-link :href="route('profile')">
							{{ __('l.myprofile') }}
						</x-dropdown-link>
						<!-- Authentication -->
						<form method="POST" action="{{ route('logout') }}">
							@csrf

							<x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
								{{ __('l.logout') }}
							</x-dropdown-link>
						</form>
					</x-slot>
				</x-dropdown>
			</div>

			@else
			@if (Route::has('login'))
			<div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
				<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('l.login') }}</a>

				@if (Route::has('register'))
				<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __('l.register') }}</a>
				@endif
			</div>
			@endif

			@endif
			<!-- Hamburger -->
			<div class="-mr-2 flex items-center sm:hidden">
				<button @click="open = ! open"
					class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
					<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Responsive Navigation Menu -->
	<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
		<div class="pt-2 pb-3 space-y-1">
			<x-responsive-nav-link :href="route('store')" :active="request()->routeIs('store')">
				{{ __('l.store') }}
			</x-responsive-nav-link>
			<x-responsive-nav-link :href="route('my-listings')" :active="request()->routeIs('my-listings')">
				{{ __('l.mylistings') }}
			</x-responsive-nav-link>
			<x-responsive-nav-link :href="route('my-orders')" :active="request()->routeIs('my-orders')">
				{{ __('l.orders') }}
			</x-responsive-nav-link>

		</div>
		<div class="border-t border-gray-200">
			<div class="pt-3 pb-3 space-y-1">
				<x-responsive-nav-link :href="route('new-listing')" :active="request()->routeIs('new-listing')">
					<b>{{ __('l.newlisting') }}</b>
				</x-responsive-nav-link>
			</div>
		</div>
		
		<!-- Responsive Settings Options -->
		@if (Auth::check())
		<div class="pt-4 pb-1 border-t border-gray-200">
			<div class="px-4">
				<div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
				<div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
			</div>

			<div class="mt-3 space-y-1">
				<x-responsive-nav-link :href="route('profile')">
					{{ __('l.myprofile') }}
				</x-responsive-nav-link>
				<!-- Authentication -->
				<form method="POST" action="{{ route('logout') }}">
					@csrf

					<x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
						{{ __('l.logout') }}
					</x-responsive-nav-link>
				</form>
			</div>
		</div>

		@else
		@if (Route::has('login'))
		<div class="mt-3 space-y-1">
			<x-responsive-nav-link href="{{ route('login') }}">{{ __('l.login') }}</x-responsive-nav-link>

			@if (Route::has('register'))
			<x-responsive-nav-link href="{{ route('register') }}">{{ __('l.register') }}</x-responsive-nav-link>
			@endif
		</div>
		@endif

		@endif
	</div>


</nav>