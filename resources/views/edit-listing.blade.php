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
								<div class="col-8">
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
        						<label for="price">{{ __('l.price') }}</label>
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
								<div class="col-1">
								<div class="row flex flex-col">
									<label>{{ __('l.shipping') }}</label>
										<div>
											<input type="radio" id="omniva" name="shipping_type" value="Omniva" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="omniva" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Omniva</label>
										</div>
										<div>
											<input type="radio" id="dpd" name="shipping_type" value="DPD" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="dpd" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DPD</label>
										</div>
										<div>
											<input type="radio" id="post" name="shipping_type" value="Post" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="post" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.post') }}</label>
										</div>
										<div>
											<input type="radio" id="other" name="shipping_type" value="Other" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="other" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.other') }}</label>
										</div>
										<div>
											<input type="radio" id="any" name="shipping_type" value="Any" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="any" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.any') }}</label>
										</div>
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