<x-app-layout>
	<x-slot name="header">
		<div class="pt-10 justify-center w-screen items-center flex flex-col">
			<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
			<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
		</div>
		<form class="flex justify-center items-center">
			<div class="flex mr-25 "><input type="search" id="default-search"
					class="block px-4 pl-10 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:ring-0 focus:border-gray-100 focus:outline-0"
					placeholder="Search books..." required></div>
			<div class="flex justify-center items-center flex-col ml-25"><button type="submit" class="text-custom absolute right-2.5 bottom-2.5 bg-custom hover:bg-custom-lighter focus:ring-4
				focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-4 py-2 text-white ">Search</button>
			</div>
		</form>
	</x-slot>
	<div class="flex justify-center">
		<hr class="w-80p ">
	</div>


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

				<div class="p-6 bg-white">
					seit jaliek gramatas

				</div>
			</div>
		</div>
	</div>
</x-app-layout>