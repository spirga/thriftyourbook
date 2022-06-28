<style>
.edition-container {
	display: flex;
	width: 100%;
	padding: 0 15px 0 15px;
}

.edition-image-container {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.edition-image {
	object-fit: cover;
	object-position: center;
	border-radius: 8px;
}

.margin-bottom {
	margin-bottom: 2px;
}

.book-author {
	color: #757575;
}

.book-description {
	text-align: justify;
}

.go-to-listings {
	display: flex;
	justify-content: center;
	width: 60%;
	margin-top: 10px;
	height: 40px;
}

.genre-container {
	margin-bottom: 15px;
}

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

@media (min-width: 200px) {
	.edition-image-container {
		flex-direction: row;
		width: 100%;
	}

	.main-container {
		width: 95%;
	}

	.edition-info-container {
		width: 100%;
	}

	.edition-container {
		display: flex;
		flex-direction: column;
		align-items: center;
		text-align: center;
	}

	.go-to-listings-1 {
		display: none !important;
	}

	.go-to-listings-2 {
		display: block !important;
	}

	.edition-image {
		height: 300px;
		width: auto;
		margin-bottom: 15px;
	}
}

@media (min-width: 768px) {
	.edition-image-container {
		flex-direction: column;
		width: 35%;
	}

	.edition-info-container {
		width: 63%;
	}

	.edition-container {
		display: flex;
		flex-direction: row;
		align-items: flex-start;
		text-align: left;
		justify-content: space-between;
	}

	.go-to-listings-2 {
		display: none !important;
	}

	.go-to-listings-1 {
		display: block !important;
	}

	.edition-image {
		height: auto;
		width: 100%;
	}
}

@media (min-width: 1024px) {
	.edition-image-container {
		flex-direction: column;
		width: 23%;
	}

	.edition-info-container {
		width: 75%;
	}

	.main-container {
		width: 90%;
	}
}
</style>
<x-app-layout>
	<x-slot name="header">
		<div class="redirect-container">
			<a href="{{ URL::previous() }}" class="redirect">
				<i class="fa-solid fa-arrow-left"></i> </a>
		</div>
	</x-slot>

	<x-slot name="slot">
		<div class="py-4">
			<div class="mx-auto sm:px-6 lg:px-6 main-container">
				<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						<div class="edition-container">
							<div class="edition-image-container">
								<img src="{{$edition->image_url}}" class="edition-image">
								<x-button class="go-to-listings-1">{{ __('l.listings') }}</x-button>
							</div>
							<div class="edition-info-container">
								<h2 class="font-semibold text-xl text-gray-800 leading-tight margin-bottom book-title">
									{{ $edition->book->book_title }} ({{$edition->book->book_year}})
								</h2>
								<p class="book-author">
									{{$edition->book->book_author}}
								</p>
								<div>
									<p class="margin-bottom"><b>{{ __('l.descript') }}</b></p>
									<p class="book-description">{{$edition->book->book_description}}</p>
								</div>
								<div>
									<p class="margin-bottom"><b>{{ __('l.genre') }}</b></p>
									<div class="genre-container">
										<?php
											$num_of_items = count($edition->book->genres);
											$num_count = 0;
											foreach ($edition->book->genres as $genre) {
												echo "<span>{$genre->genre}</span>";
												$num_count = $num_count + 1;
												if ($num_count < $num_of_items) { echo "<span>, </span>" ; }
											}
											?>
									</div>

								</div>
								<div>
									<p class="margin-bottom"><b>{{ __('l.aboutthisedition') }}</b></p>
									<p class="margin-bottom">{{ __('l.published') }} {{$edition->edition_year}} {{ __('l.by') }} {{$edition->publisher}}</p>
									<p class="margin-bottom">{{ __('l.language') }}:
										<?php 
											if ($edition->book->book_language == "ENG") {
												echo "<span>English</span>";
											} elseif ($edition->book->book_language == "LV") {
												echo "<span>Latvian</span>";
											} elseif ($edition->book->book_language == "RUS") {
												echo "<span>Russian</span>";
											} elseif ($edition->book->book_language == "DE") {
												echo "<span>German</span>";
											} elseif ($edition->book->book_language == "ES") {
												echo "<span>Spanish</span>";
											} else {
												echo "<span>Other</span>";
											}
											?> </p>
									<p>{{ __('l.format') }}: {{$edition->pages}} {{ __('l.pages') }},
										<?php 
											if ($edition->cover_type == "HC") {
												echo "<span>Hardback</span>";
											} elseif ($edition->cover_type == "PB") {
												echo "<span>Paperback</span>";
											} else {
												echo "<span>Unknown</span>";
											}
											?></p>
								</div>
							</div>
							<x-button class="go-to-listings-2">{{ __('l.listings') }}</x-button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-app-layout>