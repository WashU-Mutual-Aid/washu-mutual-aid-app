@props([
'name',
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $label }}
    </label>
    <select id="{{ $name }}" name="{{ $name }}" class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
        {{ $slot }}
    </select>
</div>
