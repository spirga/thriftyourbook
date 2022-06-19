<x-app-layout>
	<x-slot name="header">
		<div class="pt-10 justify-center w-screen items-center flex flex-col">
			<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
			<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
		</div>
		<form class="flex justify-center items-center">
			<div class="flex mr-25 "><input type="search" id="default-search"
					class="block px-4 pl-10 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:border-gray-100 "
					placeholder="Search books..." required></div>
			<div class="flex justify-center items-center flex-col ml-25"><button type="submit"
					class=" z-0 text-custom absolute right-2.5 bottom-2.5 text-custom bg-custom hover:bg-custom-lighter focus:ring-4
				focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-white hover:bg-custom-lighter active:bg-gray-900 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150">Search</button>
			</div>
		</form>
	</x-slot>
	<div class="flex justify-center mb-4">
		<hr class="w-80p ">
	</div>
	<div class="grid grid-cols-2" >
		<div class="sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 border-b border-gray-200">
					<form>
						<p class="mb-2"><b>Genre</b></p>
						<div class="flex items-center">
							<input id="genre-checkbox" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Literary
								Fiction</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-1" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-1"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mystery</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-2" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Young
								Adult</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-3" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-3"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Romance</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-4" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-4"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Thriller</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-5" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-5"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Horror</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-6" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-6"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Classics</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-7" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-7"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Historial</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-8" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-8" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Science
								Fiction</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-9" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-9"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contemporary</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-10" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-10" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Self
								Help</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-11" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-11"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fantasy</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-12" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-12"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manga</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-13" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-13"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Childrens</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-14" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-14"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Textbooks</label>
						</div>
						<div class="flex items-center">
							<input id="genre-checkbox-15" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="genre-checkbox-15"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
						</div>
						<hr class="mb-4 mt-4">
						<p><b>Language</b></p>
						<div class="flex items-center">
							<input id="language-checkbox-1" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-1"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English</label>
						</div>
						<div class="flex items-center">
							<input id="language-checkbox-2" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-2"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latvian</label>
						</div>
						<div class="flex items-center">
							<input id="language-checkbox-3" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-3"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Russian</label>
						</div>
						<div class="flex items-center">
							<input id="language-checkbox-4" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-41"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">German</label>
						</div>
						<div class="flex items-center">
							<input id="language-checkbox-5" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-5"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Spanish</label>
						</div>
						<div class="flex items-center">
							<input id="language-checkbox-6" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="language-checkbox-6"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
						</div>
						<hr class="mb-4 mt-4">
						<p><b>Condition</b></p>
						<div class="flex items-center">
							<input id="condition-checkbox-1" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-1"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">New</label>
						</div>
						<div class="flex items-center">
							<input id="condition-checkbox-2" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
								Like New</label>
						</div>
						<div class="flex items-center">
							<input id="condition-checkbox-3" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
								Very good
							</label>
						</div>
						<div class="flex items-center">
							<input id="condition-checkbox-4" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
								Good
							</label>
						</div>
						<div class="flex items-center">
							<input id="condition-checkbox-4" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
								Acceptable
							</label>
						</div>
						<div class="flex items-center">
							<input id="condition-checkbox-4" type="checkbox" value=""
								class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300">
							<label for="condition-checkbox-4"
								class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antique
							</label>
						</div>
						<button type="submit"
							class="mt-4 text-custom bg-custom hover:bg-custom-lighter focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-white hover:bg-custom-lighter active:bg-gray-900 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150">Apply
							Filters</button>
					</form>
				</div>
			</div>
		</div>
		<div class="py-4">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Available books') }}
			</h2>
			<div>
				<div class="p-6 bg-white">
					<div class="grid grid-cols-3">
						<div>seit jaliek izdevumi for each</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>