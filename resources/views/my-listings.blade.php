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
	width: 18%;
	float: right;
	display: flex;
	align-items: flex-end;
	display: flex;
	flex-direction: column;
	justify-content: center;
}

.button-container button {
	width: 100%;
}

.listing-container {
	width: 100%;
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

.button-listing {
	display: flex;
	justify-content: center;
	align-items: center;
}

@media (min-width: 200px) {
	.divider {
		display: none;
	}
	.listings-container {
		width: 95%;
	}
}

@media (min-width: 640px) {}

@media (min-width: 768px) {}

@media (min-width: 1024px) {
	.listings-container {
		padding-top: 25px;
		margin-left: 20px;
		width: 90%;
	}

	.divider {
		display: block;
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


				<div class="listings-container">
				@foreach ($listings as $listing)
				<div class="mx-auto mb-4">
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">
							<div class="listing-container">
								<div class="image-container">
									<img src="{{$listing->image_url}}" class="listing-image" />
								</div>
								<div class="right-side">
									<div class="info-container">
										<div class="info-left">
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
										<x-button class="button-listing" onclick="update_listing({{$listing->id}})">{{ __('l.editlist') }}</x-button>
										<x-button class="button-listing" onclick="delete_listing({{$listing->id}})"> {{ __('l.deletelist') }}</x-button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach

		</div>
	</div>
</x-app-layout>
<script>
function delete_listing(id) {
            window.location.href = "/delete/" + id;
            }
function update_listing(id) {
            window.location.href = "/edit-listing/" + id;
            }
</script>