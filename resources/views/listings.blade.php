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
	width: 55%;
	display: flex;
	flex-direction: column;
	justify-content: center;
}

.info-right {
	width: 30%;
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

.price-input {
	width: 100%;
	display: flex;
	justify-content: space-around;
	margin: 0 0 15px;
}

.price-input .field {
	display: flex;
	height: 45px;
	align-items: center;
}

.field input {
	width: 60px;
	height: 30px;
	outline: none;
	margin-left: 12px;
	border-radius: 5px;
	text-align: center;
	border: 1px solid #999;
	-moz-appearance: textfield;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
	-webkit-appearance: none;
}

.price-input .separator {
	width: 50px;
	display: flex;
	font-size: 19px;
	align-items: center;
	justify-content: center;
}

.slider {
	height: 5px;
	position: relative;
	background: #ddd;
	border-radius: 5px;
}

.slider .progress {
	height: 100%;
	left: 0%;
	right: 0%;
	position: absolute;
	border-radius: 5px;
	background: #3b3c43;
}

.range-input {
	position: relative;
}

.range-input input {
	position: absolute;
	width: 100%;
	height: 5px;
	top: -5px;
	background: none;
	pointer-events: none;
	-webkit-appearance: none;
	-moz-appearance: none;
}

input[type="range"]::-webkit-slider-thumb {
	height: 17px;
	width: 17px;
	border-radius: 50%;
	background: #3b3c43;
	pointer-events: auto;
	-webkit-appearance: none;
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

input[type="range"]::-moz-range-thumb {
	height: 17px;
	width: 17px;
	border: none;
	border-radius: 50%;
	background: #3b3c43;
	pointer-events: auto;
	-moz-appearance: none;
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

@media (min-width: 200px) {
	.apply-filters {
		width: 50%;
		margin-left: 25%;
	}

	.divider {
		display: none;
	}

	.filter-outside-container {
		display: flex;
		justify-content: space-around;
	}

	.filter-listing-container {
		width: 95%;
	}
}

@media (min-width: 640px) {}

@media (min-width: 768px) {}

@media (min-width: 1024px) {
	.listings-container {
		padding-top: 25px;
		margin-left: 20px;
		width: 78%;
	}

	.filter-listing-container {
		display: flex;
		justify-content: center;
		width: 90%;
	}

	.apply-filters {
		width: 95%;
		margin-left: 2.5%;
	}

	.divider {
		display: block;
	}

	.filter-container {
		width: 18%;
	}

	.filter-outside-container {
		flex-direction: column;
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
		<div class="filter-listing-container">
			<div class="py-4 filter-container">
				<div class="mb-4">
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">
							<form action="{{action([App\Http\Controllers\ListingController::class, 'new_search'], $listings->first()->edition_id)}}" method="POST">
								@csrf
								<div class="filter-outside-container">
									<div class="filter-inside-container">
										<div class="price-container">
											<p><b>{{ __('l.price') }}</b></p>

											<div class="price-input">
												<div class="field">
													<input type="number" class="input-min" value="0" name="min">
												</div>
												<div class="separator">-</div>
												<div class="field">
													<input type="number" class="input-max" value="100" name="max">
												</div>
											</div>
											<div class="slider">
												<div class="progress"></div>
											</div>
											<div class="range-input">
												<input type="range" class="range-min" min="0" max="100" value="0" step="5">
												<input type="range" class="range-max" min="0" max="100" value="100" step="5">
											</div>
										</div>
									</div>
									<hr class="mb-4 mt-4 divider">
									<div class="condition-container">
										<p><b>{{ __('l.condition') }}</b></p>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-1" type="checkbox" value="New" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-1" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.new') }}</label>
										</div>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-2" type="checkbox" value="Like New" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-2" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
												{{ __('l.likenew') }}</label>
										</div>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-3" type="checkbox" value="Very good" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-3" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
												{{ __('l.vgood') }}
											</label>
										</div>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-4" type="checkbox" value="Good" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-1" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
												{{ __('l.good') }}
											</label>
										</div>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-4" type="checkbox" value="Acceptable" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-4" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
												{{ __('l.acceptable') }}
											</label>
										</div>
										<div class="flex items-center" style="margin-bottom: 3px;">
											<input id="condition-checkbox-4" type="checkbox" value="Antique" name="condition[]"
												class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="condition-checkbox-4" style="margin-bottom:0;"
												class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.antique') }}
											</label>
										</div>
									</div>
								</div>
								<x-button type="submit" value="search" class="mt-4 items-center justify-center apply-filters">{{ __('l.filters') }}
								</x-button>
						</div>

					</div>
					</form>
				</div>
			</div>

			<div class="listings-container">
				@if (is_countable($emptiness) && count($emptiness) == 0)
				<b>{{ __('l.nosuchfilter') }}</b>
				@else
				@foreach ($listings as $listing)
				<div class="mx-auto mb-4">
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
												<span><b>{{$listing->price}}&euro;</b></span><span class="plus-shipping"> + {{ __('l.shipping') }}</span>
											</div>
											<p class="shipping">{{ __('l.shipby') }} {{$listing->shipping_type}}</p>
										</div>
									</div>
									<div class="button-container">
										<x-button class="message-seller" onclick="chat({{ $listing->user_id }})">{{ __('l.messageseller') }}</x-button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</x-slot>
</x-app-layout>

<script>
function chat(id ) {
            window.location.href = "/chattest";
            }
			
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

const rangeInput = document.querySelectorAll(".range-input input"),
	priceInput = document.querySelectorAll(".price-input input"),
	range = document.querySelector(".slider .progress");
let priceGap = 1;
priceInput.forEach(input => {
	input.addEventListener("input", e => {
		let minPrice = parseInt(priceInput[0].value),
			maxPrice = parseInt(priceInput[1].value);

		if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
			if (e.target.className === "input-min") {
				rangeInput[0].value = minPrice;
				range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
			} else {
				rangeInput[1].value = maxPrice;
				range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
			}
		}
	});
});
rangeInput.forEach(input => {
	input.addEventListener("input", e => {
		let minVal = parseInt(rangeInput[0].value),
			maxVal = parseInt(rangeInput[1].value);
		if ((maxVal - minVal) < priceGap) {
			if (e.target.className === "range-min") {
				rangeInput[0].value = maxVal - priceGap
			} else {
				rangeInput[1].value = minVal + priceGap;
			}
		} else {
			priceInput[0].value = minVal;
			priceInput[1].value = maxVal;
			range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
			range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
		}
	});
});
</script>

