<x-app-layout>
	<x-slot name="header">
	</x-slot>

	<x-slot name="slot">
		<div class="py-4">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						<div>
							<div class="edition-container">
								<div class="edition-image-container">
									<img src="{{$edition->image_url}}" class="edition-image">
								</div>
								<div class="edition-info-container">
									<p>
										<span>{{$edition->edition_year}}</span>
										<span>{{$edition->publisher}}</span>
									</p>
									<h2 class="font-semibold text-xl text-gray-800 leading-tight">
										{{ $edition->book->book_title }}
									</h2>
									<p>
										{{$edition->book->book_author}}
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>

</x-app-layout>