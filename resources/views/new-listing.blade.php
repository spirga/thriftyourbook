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
						<form method="POST">
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
											echo "<option value=\"yes\" data-img=\"$r[0]\" data-pblshr=\"$r[1]\" data-eyr=\"$r[2]\" data-pg=\"$r[3]\" data-cov=\"$r[4]\" data-id=\"$r[5]\" data-titl=\"$r[6]\" value=\"$r[5]\"> 
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
								<b>{{ __('l.bookinfo') }}</b>
							</div>
							<div class="form-group" id="bookFieldsDiv">
    						<div class="row">
      						<div class="col-4">
        						<label for="ttl">{{ __('l.title') }}</label>
        						<input type="text" class="form-control w-100" id="ttl" required>
      						</div>
      						<div class="col-4">
        						<label for="auth">{{ __('l.author') }}</label>
        						<input type="text" class="form-control w-100" id="auth" required>
      						</div>
									<div class="col-1">
        						<label for="yr">{{ __('l.year') }}</label>
        						<input type="text" class="form-control w-100" id="yr">
      						</div>
									<div class="col-3">
        						<label for="lang">{{ __('l.language') }}</label>
										<select id="lang" class="form-control" required>
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
        						<input type="text" class="form-control w-100" id="desc" required>
      						</div>
								</div>
  						</div>
							<div class="mt-4 mb-2">
								<b>{{ __('l.editinfo') }}</b>
							</div>
							<div class="form-group" id="editionFieldsDiv">
    						<div class="row">
      						<div class="col-4">
        						<label for="pblshr">{{ __('l.publisher') }}</label>
        						<input type="text" class="form-control w-100" id="pblshr" required>
      						</div>
      						<div class="col-1">
        						<label for="eyr">{{ __('l.year') }}</label>
        						<input type="number" class="form-control w-100" id="eyr" required>
      						</div>
									<div class="col-1">
        						<label for="pg">{{ __('l.pages') }}</label>
        						<input type="number" class="form-control w-100" id="pg" required>
      						</div>
									<div class="col-2">
        						<label for="cov">{{ __('l.covertype') }}</label>
										<select id="cov" class="form-control" required>
											<option value="" disabled selected>{{ __('l.selectoption') }}</option>
											<option value="PB">{{ __('l.paperback') }}</option>
											<option value="HC">{{ __('l.hardcover') }}</option>
										</select>
      						</div>
									<div class="col-4">
        						<label for="img">{{ __('l.coverurl') }}</label>
										<input type="text" class="form-control w-100" id="img">
      						</div>
    						</div>
  						</div>
							<div class="mt-4 mb-2">
								<b>{{ __('l.listinginfo') }}</b>
							</div>
							<div class="form-group flex justify-between" id="listingFieldsDiv">
								<div class="col-8">
									<div class="row">
        						<label for="listing_description">{{ __('l.listingdescr') }}</label>
        						<input type="text" class="form-control w-100" id="listing_description" required>
      						</div>
									<div class="row mt-2">
										<label for="listing-image">{{ __('l.imageurl') }}</label>
										<input type="text" class="form-control w-100" id="listing-image">
									</div>
								</div>
    						<div class="col-2">
      						<div class="row">
        						<label for="price">{{ __('l.price') }}</label>
        						<input type="currency" class="form-control w-100" id="price" required>
      						</div>
      						<div class="row mt-2">
        						<label for="condition">{{ __('l.condition') }}</label>
										<select id="condition" class="form-control" required>
											<option value="" disabled selected>{{ __('l.selectoption') }}</option>
											<option value="new">{{ __('l.new') }}</option>
											<option value="like-new">{{ __('l.likenew') }}</option>
											<option value="very-good">{{ __('l.vgood') }}</option>
											<option value="good">{{ __('l.good') }}</option>
											<option value="acceptable">{{ __('l.acceptable') }}</option>
											<option value="antique">{{ __('l.antique') }}</option>
										</select>
      						</div>	
      					</div>
								<div class="col-1">
									<div class="row flex flex-col">
									<label>{{ __('l.shipping') }}</label>
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
											<label for="post" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.post') }}</label>
										</div>
										<div>
											<input type="checkbox" id="other" name="other" value="other" class="w-4 h-4 text-custom bg-gray-100 rounded border-gray-300 checkbox-control">
											<label for="other" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('l.other') }}</label>
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
				
				$('#ttl').val(title).prop('disabled', true);
				$('#auth').val(author).prop('disabled', true);
				$('#desc').val(description).prop('disabled', true);
				$('#yr').val(year).prop('disabled', true);
				$('#lang').val(language).prop('disabled', true);
				$('#id').val(id).prop('disabled', true);	
			} else {
				$('#ttl').val("").prop('disabled', false);
				$('#auth').val("").prop('disabled', false);
				$('#desc').val("").prop('disabled', false);
				$('#yr').val("").prop('disabled', false);
				$('#lang').val("").prop('disabled', false);
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
				var id = $('#edition').find(':selected').data('id');
				var title = $('#edition').find(':selected').data('titl');
				
				$('#img').val(image).prop('disabled', true);
				$('#pblshr').val(publisher).prop('disabled', true);
				$('#eyr').val(year).prop('disabled', true);
				$('#pg').val(pages).prop('disabled', true);
				$('#cov').val(cover).prop('disabled', true);
				$('#id').val(id).prop('disabled', true);
			} else {
				$('#img').val("").prop('disabled', false);
				$('#pblshr').val("").prop('disabled', false);
				$('#eyr').val("").prop('disabled', false);
				$('#pg').val("").prop('disabled', false);
				$('#cov').val("").prop('disabled', false);
			}
	}
</script>


<script>
	$("#book").change(function() {
  if ($(this).val() == "yes") {
    $('#edition-field-div').show();
  } else {
    $('#edition-field-div').hide();
  }
	});
	$("#book").trigger("change");

	// Currency input formatting
	var currencyInput = document.querySelectorAll( 'input[type="currency"]' );

	for ( var i = 0; i < currencyInput.length; i++ ) {

	var currency = 'EUR'
	onBlur( {
			target: currencyInput[ i ]
	} )

	currencyInput[ i ].addEventListener( 'focus', onFocus )
	currencyInput[ i ].addEventListener( 'blur', onBlur )

	function localStringToNumber( s ) {
			return Number( String( s ).replace( /[^0-9.-]+/g, "" ) )
	}

	function onFocus( e ) {
			var value = e.target.value;
			e.target.value = value ? localStringToNumber( value ) : ''
	}

	function onBlur( e ) {
			var value = e.target.value

			var options = {
					maximumFractionDigits: 2,
					currency: currency,
					style: "currency",
					currencyDisplay: "symbol"
			}

			e.target.value = ( value || value === 0 ) ?
					localStringToNumber( value ).toLocaleString( undefined, options ) :
					''
	}
	}
</script>