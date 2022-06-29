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

@media (min-width: 200px) {
	.main-container {
		width: 95%;
	}

}

@media (min-width: 768px) {}

@media (min-width: 1024px) {
	.main-container {
		width: 90%;
	}
}
</style>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>



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
						<form method="POST" action="{{ route('new-listing1') }}" id="myForm">
							@csrf
							<div class="row">
									<?php
										header('Content-Type: text/html; charset=utf8');
										$servername = "localhost";
										$username = "thriftyourbook-user";
										$password = "123";
										$dbname="thriftyourbook";
										mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
										$conn = new mysqli($servername, $username, $password, $dbname);
										mysqli_set_charset($conn, "utf8");
										$qu = "SELECT book_title,book_author,book_description,book_year,book_language,id FROM books ORDER BY book_title";
										$res = $conn->query($qu);
										$q = "SELECT e.image_url,e.publisher,e.edition_year,e.pages,e.cover_type,e.id,b.book_title FROM editions as e JOIN books as b ON e.book_id = b.id ORDER BY b.book_title";
										$re = $conn->query($q);
									?>
								<div class="form-group col-6">
									
									<label for="book">{{ __('l.selectbook') }}</label>
									<select id="book" class="form-control" name="book" onchange="bookInfo()">
										<option value="no">{{ __('l.onthislist') }}</option>
										<?php
										while($r = mysqli_fetch_row($res))
										{ 
											echo "<option value=\"yes\" data-id=\"$r[5]\" data-ttl=\"$r[0]\" data-auth=\"$r[1]\" data-desc=\"$r[2]\" data-yr=\"$r[3]\" data-lang=\"$r[4]\"  value=\"$r[5]\"> $r[0] </option>";
										}
										?> 
									</select>
								</div>
								<div class="form-group col-6" id="edition-field-div">
									<label for="edition">{{ __('l.selectedition') }}</label>
									<select id="edition" class="form-control" onchange="editionInfo()">
										<option value="no">{{ __('l.editionnotlist') }}</option>
										<?php
										while($r = mysqli_fetch_row($re))
										{ 
											echo "<option value=\"yes\" data-img=\"$r[0]\" data-pblshr=\"$r[1]\" data-eyr=\"$r[2]\" data-pg=\"$r[3]\" data-cov=\"$r[4]\" data-eid=\"$r[5]\" data-titl=\"$r[6]\" value=\"$r[5]\"> 
											$r[6] ($r[1], $r[2], $r[3] pages, ";
											if  ($r[4] == 'HC') {
												echo "Hardcover) </option>";
											} elseif ($r[4] == 'PB') {
												echo "Paperback) </option>";
											}	
										}
										?> 
									</select>
								</div>
							</div>
							<div class="mt-4 mb-2">
								<b>*{{ __('l.bookinfo') }}</b>
							</div>
							<div class="form-group" id="bookFieldsDiv">
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
							<input type="hidden" id="id" name="id">
    						<div class="row">
      						<div class="col-4">
        						<label for="ttl">{{ __('l.title') }}</label>
        						<input type="text" class="form-control w-100" id="ttl" name="book_title" required>
      						</div>
      						<div class="col-4">
        						<label for="auth">{{ __('l.author') }}</label>
        						<input type="text" class="form-control w-100" id="auth" name="book_author" required>
      						</div>
									<div class="col-1">
        						<label for="yr">{{ __('l.year') }}</label>
        						<input type="text" class="form-control w-100" id="yr" name="book_year">
      						</div>
									<div class="col-3">
        						<label for="lang">{{ __('l.language') }}</label>
										<select id="lang" class="form-control" name="book_language" required>
											<option value="" disabled selected>{{ __('l.selectoption') }}</option>
											<option value="ENG">{{ __('l.english') }}</option>
											<option value="LV">{{ __('l.latvian') }}</option>
											<option value="RUS">{{ __('l.russian') }}</option>
											<option value="DEU">{{ __('l.german') }}</option>
											<option value="ES">{{ __('l.spanish') }}</option>
											<option value="other">{{ __('l.other') }}</option>
										</select>
      						</div>
    						</div>
								<div class="row mt-2">
									<div class="col-12">
        						<label for="desc">{{ __('l.bookdescription') }}</label>
        						<input type="text" class="form-control w-100" id="desc" name="book_description" required>
      						</div>
								</div>
  						</div>
							<div class="mt-4 mb-2">
								<b>*{{ __('l.editinfo') }}</b>
							</div>
							<div class="form-group" id="editionFieldsDiv">
							<input type="hidden" id="eid" name="eid">
    						<div class="row">
      						<div class="col-4">
        						<label for="pblshr">{{ __('l.publisher') }}</label>
        						<input type="text" class="form-control w-100" id="pblshr" name="publisher" required>
      						</div>
      						<div class="col-1">
        						<label for="eyr">{{ __('l.year') }}</label>
        						<input type="number" class="form-control w-100" id="eyr" name="edition_year" required>
      						</div>
									<div class="col-1">
        						<label for="pg">{{ __('l.pages') }}</label>
        						<input type="number" class="form-control w-100" id="pg" name="pages" required>
      						</div>
									<div class="col-2">
        						<label for="cov">{{ __('l.covertype') }}</label>
										<select id="cov" class="form-control" required name="cover_type">
											<option value="" disabled selected>{{ __('l.selectoption') }}</option>
											<option value="PB">{{ __('l.paperback') }}</option>
											<option value="HC">{{ __('l.hardcover') }}</option>
										</select>
      						</div>
									<div class="col-4">
        						<label for="img">{{ __('l.coverurl') }}</label>
										<input type="text" class="form-control w-100" id="img" name="image_url" required>
      						</div>
    						</div>
  						</div>
							<div class="mt-4 mb-2">
								<b>*{{ __('l.listinginfo') }}</b>
							</div>
							<div class="form-group flex justify-between" id="listingFieldsDiv">
								<div class="col-8">
									<div class="row">
        						<label for="listing_description">{{ __('l.listingdescr') }}</label>
        						<input type="text" class="form-control w-100" id="listing_description" name="listing_description" required>
      						</div>
									<div class="row mt-2">
										<label for="listing-image">{{ __('l.imageurl') }}</label>
										<input type="text" class="form-control w-100" id="listing-image" name="listing_image" value="https://i.ibb.co/4FGJ1wr/book.png">
									</div>
								</div>
    						<div class="col-2">
      						<div class="row">
        						<label for="price">{{ __('l.price') }} (&euro;)</label>
        						<input class="form-control w-100 currencyInput" type="number" id="price" name="price" required>
      						</div>
      						<div class="row mt-2">
        						<label for="condition">{{ __('l.condition') }}</label>
										<select id="condition" class="form-control" name="condition" required>
											<option value="" disabled selected>{{ __('l.selectoption') }}</option>
											<option value="New">{{ __('l.new') }}</option>
											<option value="Like New">{{ __('l.likenew') }}</option>
											<option value="Very good">{{ __('l.vgood') }}</option>
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
							<x-button type="submit">{{ __('l.publish') }}</x-button>
							</form>
  					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
	
</x-app-layout>

<script>
	function bookInfo() {
		var check = $('#book').val();
			if (check != 'no') {
				var title = $('#book').find(':selected').data('ttl');
				var author = $('#book').find(':selected').data('auth');
				var description = $('#book').find(':selected').data('desc');
				var year = $('#book').find(':selected').data('yr');
				var language = $('#book').find(':selected').data('lang');
				var id = $('#book').find(':selected').data('id');
				
				$('#ttl').val(title).prop('readonly', true);
				$('#auth').val(author).prop('readonly', true);
				$('#desc').val(description).prop('readonly', true);
				$('#yr').val(year).prop('readonly', true);
				$('#lang').val(language).prop('disabled', true);
				$('#id').val(id);	
			} else {
				$('#ttl').val("").prop('readonly', false);
				$('#auth').val("").prop('readonly', false);
				$('#desc').val("").prop('readonly', false);
				$('#yr').val("").prop('readonly', false);
				$('#lang').val("").prop('disabled', false);
				$('#img').val("").prop('readonly', false);
				$('#pblshr').val("").prop('readonly', false);
				$('#eyr').val("").prop('readonly', false);
				$('#pg').val("").prop('readonly', false);
				$('#cov').val("").prop('readonly', false);
			}
	}
	function editionInfo() {
		var check = $('#edition').val();
			if (check != 'no') {
				var image = $('#edition').find(':selected').data('img');
				var publisher = $('#edition').find(':selected').data('pblshr');
				var year = $('#edition').find(':selected').data('eyr');
				var pages = $('#edition').find(':selected').data('pg');
				var cover = $('#edition').find(':selected').data('cov');
				var eid = $('#edition').find(':selected').data('eid');
				var title = $('#edition').find(':selected').data('titl');
				
				$('#img').val(image).prop('readonly', true);
				$('#pblshr').val(publisher).prop('readonly', true);
				$('#eyr').val(year).prop('readonly', true);
				$('#pg').val(pages).prop('readonly', true);
				$('#cov').val(cover).prop('disabled', true);
				$('#eid').val(eid);
			} else {
				$('#img').val("").prop('readonly', false);
				$('#pblshr').val("").prop('readonly', false);
				$('#eyr').val("").prop('readonly', false);
				$('#pg').val("").prop('readonly', false);
				$('#cov').val("").prop('disabled', false);
			}
	}
</script>


<script>
	$('#myForm').on('submit', function() {
    $('input, select').prop('disabled', false);
	});

	$("#book").change(function() {
  if ($(this).val() == "yes") {
    $('#edition-field-div').show();
  } else {
    $('#edition-field-div').hide();
  }
	});
	$("#book").trigger("change");

	// Currency input formatting
	$('input.CurrencyInput').on('blur', function() {
  const value = this.value.replace(/,/g, '');
  this.value = parseFloat(value).toLocaleString('en-US', {
    style: 'decimal',
    maximumFractionDigits: 2,
    minimumFractionDigits: 2
  });
});

</script>