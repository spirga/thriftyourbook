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
						<div class="books-container">
							<div class="row">
								<div class="col-md-4">
									<p>Select</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-app-layout>