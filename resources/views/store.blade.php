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
				<span class="font-fasthand text-subtitle mt-4 mb-4">- {{ __('l.moto') }}-</span>
			</div>
			<form action="{{action([App\Http\Controllers\ListingController::class, 'search'])}}" method="POST"
				class="flex justify-center items-center">
			@csrf
				<div class="flex">
					<input type=" text" id="dsearch" name="search"
				class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:border-gray-400 input-control"
				placeholder="{{ __('l.searchbooks') }}" required>
				</div>
		<div class="flex justify-center items-center flex-col ml-4">
			<x-button class="py-2-5" type="submit" value="search">{{ __('l.search') }}</x-button>
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
										<p class="mb-2"><b>{{ __('l.genre') }}</b></p>
										<div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox" type="checkbox" value="Fiction" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.fiction') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-1" type="checkbox" value="Mystery" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-1" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.mystery') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-2" type="checkbox" value="Young Adult" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-2" class="ml-2 text-sm font-medium text-gray-900"
														style="margin-bottom:0;">{{ __('l.ya') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-3" type="checkbox" value="Romance" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-3" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.romance') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-4" type="checkbox" value="Thriller" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-4" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.thriller') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-5" type="checkbox" value="Horror" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-5" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.horror') }}</label>
												</div>

											</div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-6" type="checkbox" value="Classics" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-6" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.classics') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-7" type="checkbox" value="Historial" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-7" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.historical') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-8" type="checkbox" value="Science Fiction" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-8" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.scifi') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-9" type="checkbox" value="Contemporary" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-9" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.contemporary') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-10" type="checkbox" value="Self Help" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-10" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.selfhelp') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-11" type="checkbox" value="Fantasy" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-11" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.fantasy') }}</label>
												</div>
											</div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-12" type="checkbox" value="Manga" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-12" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.manga') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-13" type="checkbox" value="Childrens" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-13" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.children') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-17" type="checkbox" value="Poetry" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-17" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.peotry') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-14" type="checkbox" value="Textbooks" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-14" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.textbooks') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-15" type="checkbox" value="Non-fiction" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-15" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.nonfi') }}</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-16" type="checkbox" value="Other" name="genre[]"
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-16" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.other') }}</label>
												</div>
											</div>
										</div>

									</div>
									<hr class="mb-4 mt-4">
									<div class="language-condition-container">
										<div class="language-container">
											<p><b>{{ __('l.language') }}</b></p>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-1" type="checkbox" value="ENG" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.english') }}</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-2" type="checkbox" value="LV" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-2" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.latvian') }}</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-3" type="checkbox" value="RU" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-3" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.russian') }}</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-4" type="checkbox" value="DEU" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-41" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.german') }}</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-5" type="checkbox" value="ESP" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-5" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.spanish') }}</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-6" type="checkbox" value="OTH" name="language[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-6" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.other') }}</label>
											</div>
										</div>
									</div>
								</div>

								<x-button type="submit" value="search" class="mt-4 items-center justify-center apply-filters">
								{{ __('l.filters') }}
								</x-button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="py-4 books-container-container">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
					{{ __('l.books') }}
				</h2>
				<div>
					<div class="p-6 bg-white">
						@if (is_countable($listings) && count($listings) == 0)
						<p>{{ __('l.storenone') }}</p>
						@else
						<div
							class="books-container grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 1xl:grid-cols-4 2xl:grid-cols-5 vl:grid-cols-6 xs:gap-1 sm:gap-2 md:gap-2 lg:gap-4 flex flex-wrap overflow-hidden -mx-3 sm:-mx-3 md:-mx-4 lg:-mx-4 xl:-mx-4">

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