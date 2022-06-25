<x-app-layout>
	<x-slot name="header">
		<div class="border-b border-gray-100 py-12">
			<div class="pt-3 justify-center w-screen items-center flex flex-col">
				<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
				<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
			</div>
			<form action="{{action([App\Http\Controllers\ListingController::class, 'search'])}}" method="POST" class="flex justify-center items-center" ">
			@csrf
				<div class="flex mr-4 "><input type="text" id="dsearch" name="search"
						class="block px-4 py-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:border-gray-400 input-control"
						placeholder="Search books..."  required></div>
				<div class="flex justify-center items-center flex-col ml-4">
					<x-button class="py-2.5" type="submit" value="search">Search</x-button>
				</div>
			</form>
		</div>
	</x-slot>
	<x-slot name="slot">
		<div class="flex filter-book-container justify-center sm:column lg:row">
			<div class="sm:px-6 lg:px-8 filter-container">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 border-b border-gray-200">
						<form>
							<div class="filter-outside-container">
								<div class="filter-inside-container">
									<div class="genre-container">
										<p class="mb-2"><b>Genre</b></p>
										<div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fiction</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-1" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-1" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mystery</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-2" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-2" class="ml-2 text-sm font-medium text-gray-900"
														style="margin-bottom:0;">Young
														Adult</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-3" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-3" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Romance</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-4" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-4" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thriller</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-5" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-5" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Horror</label>
												</div>

											</div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-6" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-6" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Classics</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-7" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-7" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Historial</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-8" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-8" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Science
														Fiction</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-9" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-9" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contemporary</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-10" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-10" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Self
														Help</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-11" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-11" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fantasy</label>
												</div>
											</div>
											<div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-12" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-12" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manga</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-13" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-13" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Childrens</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-17" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-17" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poetry</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-14" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-14" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Textbooks</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-15" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-15" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-fiction</label>
												</div>
												<div class="flex items-center" style="margin-bottom: 3px;">
													<input id="genre-checkbox-16" type="checkbox" value=""
														class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
													<label for="genre-checkbox-16" style="margin-bottom:0;"
														class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
												</div>
											</div>
										</div>

									</div>
									<hr class="mb-4 mt-4">
									<div class="language-condition-container">
										<div class="language-container">
											<p><b>Language</b></p>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-1" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-2" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-2" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latvian</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-3" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-3" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Russian</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-4" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-41" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">German</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-5" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-5" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Spanish</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="language-checkbox-6" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="language-checkbox-6" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
											</div>
										</div>
										<hr class="mb-4 mt-4">
										<div class="condition-contaienr">
											<p><b>Condition</b></p>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-1" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">New</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-2" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-2" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Like New</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-3" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-3" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Very good
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Good
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-4" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Acceptable
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value=""
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-4" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antique
												</label>
											</div>
										</div>
									</div>
								</div>

								<x-button class="mt-4">Apply Filters</x-button>
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
							class="books-container grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 vl:grid-cols-6 xs:gap-1 sm:gap-2 md:gap-2 lg:gap-4 flex flex-wrap overflow-hidden -mx-3 sm:-mx-3 md:-mx-4 lg:-mx-4 xl:-mx-4">
							@if (is_countable($listings) && count($listings) == 0)
							<p>There are no books currently being sold...</p>
							@else
							@foreach ($listings as $listing)
							<div
								class="my-3 px-3 w-1/4 overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-4 md:px-4 md:w-1/3 lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/6">
								<!-- Column Content -->
								<x-book image="{{$listing->edition->image_url}}" message="{{$listing->edition->book->book_title}}"
									author="{{$listing->edition->book->book_author}}">
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
</x-app-layout>