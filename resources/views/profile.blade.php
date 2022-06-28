<style>
@media (min-width: 200px) {

	.profile-information,
	.login-details {
		width: 95%;
	}
}


@media (min-width: 1024px) {

	.profile-information,
	.login-details {
		width: 90%;
	}
}
</style>

<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('l.myprofile') }}
		</h2>
	</x-slot>
	<x-slot name="slot">
		<form method="POST" action="{{ route('profile.update') }}" class="flex justify-center items-center w-full flex-col"
			enctype="multipart/form-data">
			<div class="py-4 profile-information">
				<div class="">
					<x-auth-validation-errors :errors="$errors" />
					<x-success-message />
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg w-full">
						<div class="p-6 bg-white border-b border-gray-200">
							@method('PUT')
							@csrf
							<div class="grid grid-cols-2 gap-6 flex items-center">
								<div class="grid grid-rows-3 gap-6">
									<div>
										<div class="mb-4">
											<b>{{ __('l.information') }}</b>
										</div>
										<x-label for="location" :value="__('l.mylocation')" />
										<x-input id="location" class="block mt-1 w-full" type="text" name="location"
											value="{{ auth()->user()->location }}" />
									</div>
									<div>
										<x-label for="about_me" :value="__('l.aboutme')" />
										<x-input id="about_me" class="block mt-1 w-full" type="text" name="about_me"
											value="{{ auth()->user()->about_me }}" />
									</div>
									<div>
										<x-label for="file" :value="__('l.profilepic')" />
										<input type="file" id="file" name="image" class="text-xs text-custom" accept="image/*">
									</div>
								</div>
								<div class="grid grid-rows-1 gap-6">
									<div class="flex justify-center items-center flex-col">
										<p><b>{{ Auth::user()->name }}</b></p>
										<img class="image aspect-square" src="{{asset('/storage/images/'.Auth::user()->image)}}"
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

			<div class="py-4 login-details">
				<div>
					<div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
						<div class="p-6 bg-white border-b border-gray-200">
							<div class="mb-4">
								<b>{{ __('l.editloginf') }}</b>
							</div>

							<div class="grid grid-cols-2 gap-6">
								<div class="grid grid-rows-2 gap-6">
									<div>
										<x-label for="name" :value="__('l.username')" />
										<x-input id="name" class="block mt-1 w-full" type="text" name="name"
											value="{{ auth()->user()->name }}" />
									</div>
									<div>
										<x-label for="email" :value="__('l.email')" />
										<x-input id="email" class="block mt-1 w-full" type="email" name="email" readonly
											value="{{ auth()->user()->email }}" />
									</div>
								</div>
								<div class="grid grid-rows-2 gap-6">
									<div>
										<x-label for="new_password" :value="__('l.newpassword')" />
										<x-input id="new_password" class="block mt-1 w-full" type="password" name="password"
											autocomplete="new-password" />
									</div>
									<div>
										<x-label for="confirm_password" :value="__('l.confirmpassword')" />
										<x-input id="confirm_password" class="block mt-1 w-full" type="password"
											name="password_confirmation" autocomplete="confirm-password" />
									</div>
								</div>
							</div>

							<div class="flex items-center justify-end mt-4">

							</div>
						</div>
					</div>
					<div class="flex items-center justify-end mt-4">
						<x-button>
							{{ __('l.save') }}
						</x-button>
					</div>
				</div>
			</div>
		</form>
	</x-slot>

</x-app-layout>