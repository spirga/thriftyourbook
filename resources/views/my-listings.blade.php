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
	width: 70%;
}

.info-container {
	display: flex;
	width: 80%;
	padding-left: 15px;
	justify-content: space-between;
}

.info-left {
	width: 45%;
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

.button-listing {
	display: flex;
	justify-content: center;
	align-items: center;
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
		width: 85%;
	}

	.divider {
		display: block;
	}
}
</style>
<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('My Listings') }}
		</h2>
	</x-slot>

	<div class="py-4">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
				<div class="p-6 bg-white border-b border-gray-200">
				<div class="listings-container">
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
										<x-button class="button-listing">Edit Listing</x-button>
										<x-button class="button-listing">Delete Listing</x-button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>