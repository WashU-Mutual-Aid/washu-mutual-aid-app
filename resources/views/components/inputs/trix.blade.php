@props([
    'existing' => null,
    'model' => null,
    'wrap' => 'relative',
    'labelStyles' => '',
    'name'
])

@once
    @push('head')
        @trixassets
    @endpush
@endonce
<label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700 {{ $labelStyles }}">
    {{ $label }}
</label>
<div class="flex flex-col">
    <div class="mt-1 {{ $wrap }} rounded-md shadow-sm">
        @if($existing)
            @trix($existing, $name)
        @else
            @trix($model, $name)
        @endif
    </div>
    @error("aid-trixFields.details")
    <p class="mt-2 text-sm text-red-600" id="{{$name}}-error">{{ $message }}</p>
    @enderror
</div>
