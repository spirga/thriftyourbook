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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</x-slot>

</x-app-layout>