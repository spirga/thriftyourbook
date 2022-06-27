<style>
@media (min-width: 200px) {
	.filter-container {
		display: flex;
		flex-direction: column;
	}

	.filter-book-container {
		display: flex;
		flex-direction: column;
		width: 95%;
	}

	.filter-inside-container {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		padding: 0 15px 0 15px;
	}

	.genre-container>div>div {
		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}

	.genre-container>div>div:not(:last-child) {
		margin-right: 8px;
	}

	.language-condition-container {
		display: flex;
		justify-content: space-around;
	}

	.book-container {
		position: relative;
		width: 150px;
		height: 225px;
	}

	.apply-filters {
		width: 50%;
		margin-left: 25%;
	}
}

@media (min-width: 640px) {
	.book-container {
		position: relative;
		width: 200px;
		height: 300px;
	}
}

@media (min-width: 768px) {
	.genre-container>div>div:not(:last-child) {
		margin-right: 30px;
	}

	.filter-inside-container {
		flex-direction: row;
	}

	.language-condition-container {
		width: 45%;
	}

	.genre-container>div>div>div {
		margin-right: 40px;
	}
}

@media (min-width: 1024px) {
	.genre-container>div>div>div {
		margin-right: 0px;
	}

	.filter-book-container {
		width: 90%;
		justify-content: space-around;
		flex-direction: row;
	}

	.filter-container {
		width: 23%;
	}

	.book-container {
		margin-right: 50px;
	}

	.filter-inside-container {
		flex-direction: column;
	}

	.genre-container {
		float: left;
	}

	.genre-container>div>div {
		flex-direction: column;
	}

	.genre-container>div>div:not(:last-child) {
		margin-right: 0px;
	}

	.filter-outside-container {
		justify-content: center;
	}

	.language-condition-container {
		flex-direction: column;
		width: 100%;
	}

	.apply-filters {
		width: 95%;
		margin-left: 2.5%;
	}
}
</style>

<x-app-layout>
	<x-slot name="header">
		<div class="border-b border-gray-100 py-12">
			<div class="pt-3 justify-center w-screen items-center flex flex-col">
				<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
				<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
			</div>
			<form action="{{action([App\Http\Controllers\ListingController::class, 'search'])}}" method="POST"
				class="flex justify-center items-center" ">
			@csrf
				<div class=" flex mr-4 "><input type=" text" id="dsearch" name="search"
				class="block px-4 py-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:border-gray-400 input-control"
				placeholder="Search books..." required>
		</div>
		<div class="flex justify-center items-center flex-col ml-4">
			<x-button class="py-2.5" type="submit" value="search">Search</x-button>
		</div>
		</form>
		</div>
	</x-slot>
	<x-slot name="slot">
		<div class="filter-book-container">
			<div class="sm:px-6 lg:px-8 filter-container">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
					<div class="p-6 border-b border-gray-200">
						<form action="{{action([App\Http\Controllers\ListingController::class, 'search'])}}" method="POST">
							@csrf
							<div class="filter-outside-container">
								<div class="filter-inside-container">
									<div class="genre-container">
										<p class="mb-2"><b>Genre</b></p>
										<div>
											<div>
												<div>
													<?php
													$num_of_items = count((is_countable($genres)?$genres:[]));
													$count = 0;
													while ($count <= 8) { 
													echo "
													<div class='flex items-center' style='margin-bottom: 3px;'>
													<input id='genre-checkbox-{{$count}}' type='checkbox' value='{$genres[$count]->genre}' name = 'genres[]' class='w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control'>
													<label for='genre-checkbox-{{$count}}' style='margin-bottom:0;'
													class='ml-2 text-sm font-medium text-gray-900 dark:text-gray-300'>{$genres[$count]->genre}</label>
													</div>" ; 
													$count=$count + 1; } 
												?>
												</div>

												<div>
													<?php
												while ($count <= 17) { 
													echo "
													<div class='flex items-center' style='margin-bottom: 3px;'>
													<input id='genre-checkbox-{{$count}}' type='checkbox' value='{$genres[$count]->genre}' name = 'genres[]' class='w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control'>
													<label for='genre-checkbox-{{$count}}' style='margin-bottom:0;'
													class='ml-2 text-sm font-medium text-gray-900 dark:text-gray-300'>{$genres[$count]->genre}</label>
													</div>" ; 
													$count=$count + 1; } 
												?>
												</div>
											</div>
										</div>

									</div>
									<hr class="mb-4 mt-4">
									<div class="language-condition-container">
										<div class="language-container">
											<p><b>Language</b></p>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-1" type="checkbox" value="ENG" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-2" type="checkbox" value="LV" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-2" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latvian</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-3" type="checkbox" value="RU" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-3" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Russian</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-4" type="checkbox" value="DEU" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-41" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">German</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-5" type="checkbox" value="ESP" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-5" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Spanish</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-6" type="checkbox" value="OTH" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-6" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
											</div>
										</div>
									</div>
								</div>

								<x-button type="submit" value="search" class="mt-4 items-center justify-center apply-filters">Apply
									Filters
								</x-button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="py-4 books-container-container">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
					{{ __('Available books') }}
				</h2>
				<div>
					<div class="p-6 bg-white">
						<div
							class="books-container grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 1xl:grid-cols-4 2xl:grid-cols-5 vl:grid-cols-6 xs:gap-1 sm:gap-2 md:gap-2 lg:gap-4 flex flex-wrap overflow-hidden -mx-3 sm:-mx-3 md:-mx-4 lg:-mx-4 xl:-mx-4">
							@if (is_countable($listings) && count($listings) == 0)
							<p>There are no books currently being sold...</p>
							@else
							@foreach ($listings as $listing)
							<div
								class="my-3 px-3 w-1/4 overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-4 md:px-4 md:w-1/3 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/6">
								<!-- Column Content -->
								<x-book image="{{$listing->edition->image_url}}" message="{{$listing->edition->book->book_title}}"
									author="{{$listing->edition->book->book_author}}" id="{{$listing->edition_id}}">
								</x-book>
							</div>
							@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-app-layout>''