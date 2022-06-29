<style>
	.main-container {
		width: 90%;
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
</style>

<x-app-layout>
	<x-slot name="header">
		<div class="redirect-container">
			<a href="{{ URL::previous() }}" class="redirect">
				<i class="fa-solid fa-arrow-left"></i> </a>
		</div>
	</x-slot>

	<x-slot name="slot">
		<div class="py-4 main-container">
			<div class="mx-auto sm:px-6 lg:px-6">
				<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
					<x-success-message />
						<form method="POST" action="{{action([App\Http\Controllers\ListingController::class, 'edit'], $listings->first()->id)}}">
							@csrf
							<div class="mt-4 mb-2">
								<b>{{ __('l.listinginfo') }}</b>
							</div>
							<div class="form-group flex justify-between" id="listingFieldsDiv">
								<div class="col-9">
									<div class="row">
        						<label for="listing_description">{{ __('l.listingdescr') }}</label>
        						<input type="text" class="form-control w-100" name="listing_description" id="listing_description" value="{{$listings->listing_description}}" required>
      						</div>
									<div class="row mt-2">
										<label for="listing-image">{{ __('l.imageurl') }} {{ __('l.notrequired') }}</label>
										<input type="text" class="form-control w-100" name="image_url" id="listing-image" value="{{$listings->image_url}}">
									</div>
								</div>
    						<div class="col-2">
      						<div class="row">
        						<label for="price">{{ __('l.price') }} (&euro;)</label>
        						<input type="currency" class="form-control w-100" name="price" id="price" required value="{{$listings->price}}">
      						</div>
      						<div class="row mt-2">
        						<label for="condition">{{ __('l.condition') }}</label>
										<select id="condition" class="form-control" required name="condition" value="{{$listings->condition}}">
											<option value="New">{{ __('l.new') }}</option>
											<option value="Like New">{{ __('l.likenew') }}</option>
											<option value="Very Good">{{ __('l.vgood') }}</option>
											<option value="Good">{{ __('l.good') }}</option>
											<option value="Acceptable">{{ __('l.acceptable') }}</option>
											<option value="Antique">{{ __('l.antique') }}</option>
										</select>
      						</div>	
      					</div>
    					</div>
							<x-button type="submit">{{ __('l.save') }}</x-button>
							</form>
  					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
	
</x-app-layout>