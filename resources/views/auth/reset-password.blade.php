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

		<form method="POST" action="{{ route('password.update') }}">
			@csrf

			<!-- Password Reset Token -->
			<input type="hidden" name="token" value="{{ $request->route('token') }}">

			<!-- Email Address -->
			<div>
				<x-label for="email" :value="__('E-mail')" />

				<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
					required autofocus />
			</div>

			<!-- Password -->
			<div class="mt-4">
				<x-label for="password" :value="__('Password')" />

				<x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
			</div>

			<!-- Confirm Password -->
			<div class="mt-4">
				<x-label for="password_confirmation" :value="__('Confirm Password')" />

				<x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
					required />
			</div>

			<div class="flex items-center justify-end mt-4">
				<x-button>
					{{ __('Reset Password') }}
				</x-button>
			</div>
		</form>
	</x-auth-card>
</x-guest-layout>