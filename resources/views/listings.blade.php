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

.listing-image {
	object-fit: cover;
	object-position: center;
	width: 150px;
	height: 150px;
	border-radius: 7px;
	transition: 0.2s;
}

.image-container {
	float: left;
}

.button-container {
	width: 10%;
	float: right;
	display: flex;
	align-items: center;
	margin-right: 20px;
}

.listing-image:hover {
	-webkit-filter: brightness(90%);
	cursor: pointer;
}

.listing-container {
	display: flex;
	align-items: center;
}

.right-side {
	display: flex;
	justify-content: space-between;
	width: 100%;
}

.info-container {
	display: flex;
	width: 80%;
	padding-left: 15px;
	justify-content: space-between;
}

.info-left {
	width: 60%;
	display: flex;
	flex-direction: column;
	justify-content: center;
}

.info-right {
	width: 25%;
	display: flex;
	flex-direction: column;
	justify-content: center;
}


.shipping,
.plus-shipping {
	color: #858585;
}

.modal {
	display: none;
	position: fixed;
	z-index: 1;
	padding-top: 100px;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0, 0, 0);
	background-color: rgba(0, 0, 0, 0.9);
}

.modal-content,
#caption {
	animation-name: zoom;
	animation-duration: 0.6s;
}


@keyframes zoom {
	from {
		transform: scale(0)
	}

	to {
		transform: scale(1)
	}
}

.modal-content {
	margin: auto;
	display: block;
	width: 80%;
	max-width: 400px;
}

.close {
	position: absolute;
	top: 15px;
	right: 35px;
	transition: 0.3s;
}

.close i {
	color: white;
}

.close:hover,
.close:focus {
	color: white;
	text-decoration: none;
	cursor: pointer;
}

.message-seller {
	display: flex;
	justify-content: center;
	align-items: center;
}

@media (min-width: 200px) {}

@media (min-width: 640px) {}

@media (min-width: 768px) {}

@media (min-width: 1024px) {
	.container {
		display: flex;
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
		<div class="container">
			<div class="py-4">
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-6 mb-4">
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">
							<form action="{{action([App\Http\Controllers\ListingController::class, 'search'])}}" method="POST">
								@csrf
								<div class="filter-outside-container">
									<div class="filter-inside-container">
										<div class="price-container">
											<p><b>Price</b></p>
											<div class="relative pt-1">
												<label for="customRange1" class="form-label">Example range</label>
												<input type="range" class="
      form-range
      appearance-none
      w-full
      h-6
      p-0
      bg-transparent
      focus:outline-none focus:ring-0 focus:shadow-none
    " id="customRange1" />
											</div>
										</div>
										<div class="condition-container">
											<p><b>Condition</b></p>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-1" type="checkbox" value="New" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">New</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-2" type="checkbox" value="Like New" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-2" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Like New</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-3" type="checkbox" value="Very good" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-3" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Very good
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value="Good" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-1" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Good
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value="Acceptable" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-4" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
													Acceptable
												</label>
											</div>
											<div class="flex items-center" style="margin-bottom: 3px;">
												<input id="condition-checkbox-4" type="checkbox" value="Antique" name="condition[]"
													class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
												<label for="condition-checkbox-4" style="margin-bottom:0;"
													class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antique
												</label>
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
			<div>
				@foreach ($listings as $listing)
				<div class="max-w-7xl mx-auto sm:px-6 lg:px-6 mb-4">
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">
							<div class="listing-container">
								<div class="image-container">
									<img src="{{$listing->image_url}}" class="listing-image" />
									<div id="myModal" class="modal">
										<span class="close"><i class="fa-solid fa-xmark"></i></span>
										<img class="modal-content" id="img01">
									</div>
								</div>
								<div class="right-side">
									<div class="info-container">
										<div class="info-left">
											<span><b>{{$listing->user->name}}</b></span>
											<span>{{$listing->listing_description}}</span>

										</div>
										<div class="info-right">
											<span><i>{{$listing->condition}}</i></span>
											<div>
												<span><b>{{$listing->price}}&euro;</b></span><span class="plus-shipping"> + shipping</span>
											</div>
											<p class="shipping">Ships by {{$listing->shipping_type}}</p>
										</div>
									</div>
									<div class="button-container">
										<x-button class="message-seller">Message Seller</x-button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>



		</div>
	</x-slot>
</x-app-layout>

<script>
// create references to the modal...
var modal = document.getElementById('myModal');
// to all images -- note I'm using a class!
var images = document.getElementsByClassName('listing-image');
// the image in the modal
var modalImg = document.getElementById("img01");
// and the caption in the modal
var captionText = document.getElementById("caption");

// Go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
	var img = images[i];
	// and attach our click listener for this image.
	img.onclick = function(evt) {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
	modal.style.display = "none";
}
</script>