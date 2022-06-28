
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
						<form method="POST">
							<div class="mt-4 mb-2">
								<b>*Listing information</b>
							</div>
							<div class="form-group flex justify-between" id="listingFieldsDiv">
								<div class="col-8">
									<div class="row">
        						<label for="listing_description">Listing Description</label>
        						<input type="text" class="form-control w-100" id="listing_description" required>
      						</div>
									<div class="row mt-2">
										<label for="listing-image">Image URL (not required)</label>
										<input type="text" class="form-control w-100" id="listing-image">
									</div>
								</div>
    						<div class="col-2">
      						<div class="row">
        						<label for="price">Price</label>
        						<input type="currency" class="form-control w-100" id="price" required>
      						</div>
      						<div class="row mt-2">
        						<label for="condition">Condition</label>
										<select id="condition" class="form-control" required>
											<option value="" disabled selected>Select your option</option>
											<option value="new">New</option>
											<option value="like-new">Like New</option>
											<option value="very-good">Very Good</option>
											<option value="good">Good</option>
											<option value="acceptable">Acceptable</option>
											<option value="antique">Antique</option>
										</select>
      						</div>	
      					</div>
								<div class="col-1">
									<div class="row flex flex-col">
									<label>Shipping</label>
										<div>
											<input type="checkbox" id="omniva" name="omniva" value="omniva" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="omniva" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Omniva</label>
										</div>
										<div>
											<input type="checkbox" id="dpd" name="dpd" value="dpd" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="dpd" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DPD</label>
										</div>
										<div>
											<input type="checkbox" id="post" name="post" value="post" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="post" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Post</label>
										</div>
										<div>
											<input type="checkbox" id="other" name="other" value="other" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="other" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
										</div>
									</div>
								</div>
    					</div>
							<x-button type="submit">Publish</x-button>
							</form>
  					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
	
</x-app-layout>