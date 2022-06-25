<div class="book-container">
	<img src="{{ $image }}" class="book-image">
	<div class="book-overlay">
		<p class="book-author">{{ $author }}</p>
		<p class="book-title">{{ $message }}</p>
		<x-button class="w-60p flex justify-center items-center mb-4">Listings</x-button>
		<a class="w-60p flex justify-center items-center" href="{{route('edition', $id)}}">About</a>
	</div>
</div>