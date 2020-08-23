@props([
'name',
'type' => 'text',
'required' => false,
'placeholder' => '',
'wrap' => 'relative',
'labelStyles' => '',
'value' => null
])
@isset($label)
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700 {{ $labelStyles }}">
        {{ $label }}
    </label>
@endisset
<div class="mt-1 {{ $wrap }} rounded-md shadow-sm">
    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        {{ $required ? 'required' : '' }}
        placeholder="{{ $placeholder }}"
        class="
            appearance-none block w-full px-3 py-2 border rounded-md focus:outline-none transition duration-150 ease-in-out sm:text-sm sm:leading-5
            @error($name)
                border-red-300 text-red-900 placeholder-red-300 focus:shadow-outline-red focus:border-red-300
            @else
                border-gray-300 placeholder-gray-400 focus:shadow-outline-blue focus:border-blue-300
            @enderror
        "
        @if ($type !== 'password')
        value="{{ $value ?? old($name) }}"
        @endif
        {{ $attributes }}
    >
    @error($name)
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
        <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
    </div>
    @enderror
</div>
@error($name)
<p class="mt-2 text-sm text-red-600" id="{{$name}}-error">{{ $message }}</p>
@enderror

