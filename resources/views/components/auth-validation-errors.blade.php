@props(['errors'])

@if ($errors->any())
<div {{ $attributes }}>
	<ul class="mt-3 list-disc list-inside text-sm text-red-600 mb-4">
		@foreach ($errors->all() as $error)
		<span>{{ $error }}</>
			@endforeach
	</ul>
</div>
@endif