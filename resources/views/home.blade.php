<x-app-layout>
	<x-slot name="header" class="bg-gray-100">
		<div class="pt-10 justify-center w-screen items-center flex flex-col">
			<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
			<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
		</div>
		<form class="flex justify-center">
			<!-- <div class=" relative">
				<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
					</svg>
				</div> -->
			<div class="flex mr-25 "><input type="search" id="default-search"
					class="block px-4 pl-10 w-full text-sm text-gray-900 bg-darker rounded-lg border border-gray-200 focus:ring-0 focus:border-gray-100 focus:outline-0"
					placeholder="Search books..." required></div>
			<div class="flex justify-center items-center flex-col ml-25"><button type="submit" class=" mt-1 text-custom absolute right-2.5 bottom-2.5 bg-custom hover:bg-custom-lighter focus:ring-4
				focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 text-white ">Search</button>
			</div>
		</form>
	</x-slot>

	<hr class="mt-4">

	<div class="grid grid-cols-2">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					seit filtri
				</div>
			</div>
		</div>
		<div class="py-4">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Available books') }}
			</h2>
			<div>
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						seit jaliek gramatas
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>