<x-guest-layout>
	<x-auth-card>
		<x-slot name="logo">
			<div class="pt-10 justify-center w-screen items-center flex flex-col">
				<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
				<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
			</div>
		</x-slot>

		<!-- Validation Errors -->
		<x-auth-validation-errors class="mb-4" :errors="$errors" />

		<form method="POST" action="{{ route('register') }}">
			@csrf

			<!-- Name -->
			<div>
				<x-label for="name" :value="__('Username')" />

				<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
			</div>

			<!-- Email Address -->
			<div class="mt-4">
				<x-label for="email" :value="__('E-mail')" />

				<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
			</div>

			<!-- Password -->
			<div class="mt-4">
				<x-label for="password" :value="__('Password')" />

				<x-input id="password" class="block mt-1 w-full" type="password" name="password" required
					autocomplete="new-password" />
			</div>

			<!-- Confirm Password -->
			<div class="mt-4">
				<x-label for="password_confirmation" :value="__('Confirm Password')" />

				<x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
					required />
			</div>
			<div class="flex items-center justify-end mt-4">
				<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
					{{ __('Already registered?') }}
				</a>

				<x-button class="ml-4">
					{{ __('Register') }}
				</x-button>
			</div>
			<div class="flex items-center justify-end mt-4">
				<a href="{{ url('auth/google') }}">
					<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
						style="margin-left: 3em;">
				</a>
			</div>
		</form>
	</x-auth-card>
</x-guest-layout>