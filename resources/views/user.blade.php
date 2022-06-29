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
</style>

<x-app-layout>
	<x-slot name="header">
	<div class="redirect-container">
			<a href="{{ URL::previous() }}" class="redirect">
				<i class="fa-solid fa-arrow-left"></i> </a>
		</div>
	</x-slot>
	<x-slot name="slot">
		
			<div class="py-4 profile-information">
				<div class="">
					<x-auth-validation-errors :errors="$errors" />
					<x-success-message />
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg w-full">
						<div class="p-6 bg-white border-b border-gray-200">
							<div class="grid grid-cols-2 gap-6 flex items-center">
								<div class="grid grid-rows-3 gap-6">
									<div>
										<p><b>{{__('l.mylocation')}}</b></p>
										<?php 
										if (!$user->location) {
											echo "<p>This user hasn't provided this information</p>";
										} else {
											echo "<p>{$user->location}</p>";
										}
										?>
									</div>
									<div>
										<p><b>{{__('l.aboutme')}}</b></p>
										<?php 
										if (!$user->about_me) {
											echo "<p>This user hasn't provided this information</p>";
										} else {
											echo "<p>{$user->about_me}</p>";
										}
										?>
										
									</div>
								</div>
								<div class="grid grid-rows-1 gap-6">
									<div class="flex justify-center items-center flex-col">
										<p><b>{{ $user->name }}</b></p>
										<img class="image aspect-square" src="{{asset('/storage/images/'.$user->image)}}"
											alt="profile_image"
											style="object-fit:cover; width:150px; height:150px; padding: 10px; margin: 0px; border-radius:50%;">
										<div class="flex flex-col">
											<div class="flex justify-center items-center">
												<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
													class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 576 512">
													<path fill="#4e4f55"
														d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
													</path>
												</svg>
												<span class="text-sm ml-1">5.0</span>
											</div>
											<span class="text-xs">1 {{ __('l.review') }}</span>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</x-slot>

</x-app-layout>