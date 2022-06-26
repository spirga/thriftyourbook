<style>
.redirect {
	background-color: #3b3c43;
	padding: 10px;
	font-size: 12px;
	text-decoration: none;
	color: white;
	transition-timing-function: ease-in-out;
	transition: 0.2s;
	border-radius: 50%;
	display: block;
	width: 30px;
	height: 30px;
}

.redirect:hover {
	text-decoration: none;
	color: white;
	background-color: #4e4f55;
}

@media (min-width: 200px) {}

@media (min-width: 768px) {}

@media (min-width: 1024px) {}
</style>
<x-app-layout>
	<x-slot name="header">
		<div class="redirect-container">
			<a href="{{ URL::previous() }}" class="redirect">
				<i class="fa-solid fa-arrow-left"></i> </a>
		</div>
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			Listings for {{$listings->first()->edition->book->book_title}}, {{$listings->first()->edition->publisher}}, {{}}
		</h2>
	</x-slot>

	<x-slot name="slot">
		<div class="py-4">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
				<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">

					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-app-layout>