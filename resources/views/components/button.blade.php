<button
	{{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest bg-custom hover:bg-custom-lighter active:bg-gray-900 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
	{{ $slot }}
</button>