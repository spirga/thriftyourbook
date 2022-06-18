@if (session('message'))
<div {{ $attributes }}>
	<ul class="mt-3 list-disc list-inside text-sm text-grey-600 mb-4">
		{{session('message')}}
	</ul>
</div>
@endif