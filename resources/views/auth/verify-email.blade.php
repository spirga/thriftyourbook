<x-guest-layout>
	<x-auth-card>
		<x-slot name="logo">
			<div class="pt-10 justify-center w-screen items-center flex flex-col">
				<span class="font-elsie text-title">THRIFT YOUR BOOK</span>
				<span class="font-fasthand text-subtitle mt-4 mb-4">- where books find their people -</span>
			</div>
		</x-slot>

		<div class="mb-4 text-sm text-gray-600">
			{{ __('Thanks for signing up! Before getting started, could you verify your e-mail address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
		</div>

		@if (session('status') == 'verification-link-sent')
		<div class="mb-4 font-medium text-sm text-green-600">
			{{ __('A new verification link has been sent to the e-mail address you provided during registration.') }}
		</div>
		@endif

		<div class="mt-4 flex items-center justify-between">
			<form method="POST" action="{{ route('verification.send') }}">
				@csrf

				<div>
					<x-button>
						{{ __('Resend Verification E-mail') }}
					</x-button>
				</div>
			</form>

			<form method="POST" action="{{ route('logout') }}">
				@csrf

				<button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
					{{ __('Log Out') }}
				</button>
			</form>
		</div>
	</x-auth-card>
</x-guest-layout>