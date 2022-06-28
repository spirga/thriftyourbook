@props(['active'])

@php
$classes = ($active ?? false)
? 'block pl-3 pr-4 py-2 border-l-4 border-custom text-base hover:no-underline font-medium text-custom bg-custom-grey
focus:outline-none
focus:text-custom hover:no-underline focus:bg-custom-grey focus:border-custom transition duration-150 ease-in-out'
: 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800
hover:bg-gray-50 hover:border-custom-lighter focus:outline-none focus:text-gray-800 focus:bg-gray-50
focus:border-gray-300
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
	{{ $slot }}
</a>