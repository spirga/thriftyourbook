<style>
.book-image {
	width: 100%;
	height: 100%;
	object-fit: cover;
	object-position: center;
	opacity: 1;
	display: block;
	transition: 0.3s ease;
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
}

.book-title {
	color: #3b3c43;
	font-weight: bold;
	margin-bottom: 15px;
}

.book-author {
	color: #3b3c43;
	margin-bottom: 3px;
	font-size: 14px;
}

.book-overlay {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	transition: 0.3s ease;
	width: 90%;
	opacity: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	text-align: center;
	backface-visibility: hidden;
	-webkit-backface-visibility: hidden;
}

.book-container:hover .book-overlay {
	opacity: 1;
}

.book-container:hover .book-image {
	opacity: 0.1;
}
.a-style {
	width: 70%;
	height: 35px;
	color: white;
	border-radius: 10px;
	background-color: #3b3c43;
}

.a-style:hover {
	color: white;
  background-color: #575862;
	text-decoration: none;
}
</style>

<div class="book-container">
	<img src="{{ $image }}" class="book-image">
	<div class="book-overlay">
		<p class="book-author">{{ $author }}</p>
		<p class="book-title">{{ $message }}</p>
		<a class="w-60p flex justify-center items-center mb-2 a-style text-sm" href="{{route('listings', $id)}}">{{ __('l.listings') }}</a>
		<a class=" w-60p flex justify-center items-center a-style text-sm" href="{{route('edition', $id)}}">{{ __('l.about') }}</a>
	</div>
</div>