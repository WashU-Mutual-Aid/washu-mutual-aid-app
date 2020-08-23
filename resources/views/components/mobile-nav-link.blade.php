@props(['route', 'first' => false, 'sub' => false])

@php
    $classes = Request::routeIs($route) ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700';
    if (! $first) {
        $classes .= ' mt-1';
    }
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "block px-3 py-2 rounded-md text-base font-medium focus:outline-none focus:text-white focus:bg-gray-700 {$classes}"]) }}>
    {{ $slot }}
</a>
