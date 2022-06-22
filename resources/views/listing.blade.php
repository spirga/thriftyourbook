<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ $book->first()->book_title }}
		</h2>
		<p>
			seit bus username
		</p>
	</x-slot>

	<div class="py-4">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
					<div>
						<div>
							<x-message>
							</x-message>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>