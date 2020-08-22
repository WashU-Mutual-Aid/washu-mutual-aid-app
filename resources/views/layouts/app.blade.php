<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @stack('head')
</head>
<body>
    @if (session('status'))
        <x-notification>
            <p class="text-sm leading-5 font-medium text-gray-900">
                {{ session('status') }}
            </p>
        </x-notification>
    @endif
    <div id="app">
        <div class="bg-gray-800 pb-32">
            <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="border-b border-gray-700">
                        <div class="flex items-center justify-between h-16 px-4 sm:px-0">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="/"><img class="w-32 p-2" src="/images/logo.png" alt="Washington University logo"></a>
                                </div>
                                <div class="hidden md:block">
                                    <div class="ml-10 flex items-baseline">
                                        <x-nav-link route="home" first>Dashboard</x-nav-link>
                                        <x-nav-link route="aid.create">Request Aid</x-nav-link>
                                    </div>
                                </div>
                            </div>
                                <div class="hidden md:block">
                                    <div class="ml-4 flex items-center md:ml-6">
                                        @auth
{{--                                            <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">--}}
{{--                                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
                                            <!-- Profile dropdown -->
                                            <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }" x-cloak>
                                                <div>
                                                    <button @click="open = !open" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                                                        <img class="h-8 w-8 rounded-full" src="https://unavatar.now.sh/{{auth()->user()->email}}" alt="">
                                                    </button>
                                                </div>
                                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                                    <div class="py-1 rounded-md bg-white shadow-xs">
{{--                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>--}}
                                                        <a href="{{route('me.aid')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Requests</a>
                                                        <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                            @csrf
                                                            <button
                                                                type="submit"
                                                                class="w-full text-left"
                                                            >
                                                                Sign Out
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endauth
                                        @guest
                                                <div class="ml-10 flex items-baseline">
                                                    <a href="/login" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Login</a>
                                                    <a href="/register" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Register</a>
                                                </div>
                                        @endguest
                                    </div>
                                </div>
                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open" aria-label="Main menu">
                                    <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                    <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-state:on="Open" x-state:off="closed" :class="{ 'block': open, 'hidden': !open }" class="hidden border-b border-gray-700 md:hidden">
                    <div class="px-2 py-3 sm:px-3">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Team</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Projects</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Calendar</a>
                        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Reports</a>
                    </div>
                    <div class="pt-4 pb-3 border-t border-gray-700">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                <div class="mt-1 text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                            </div>
                        </div>
                        <div class="mt-3 px-2" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700" role="menuitem">Your Profile</a>
                            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700" role="menuitem">Settings</a>
                            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl leading-9 font-bold text-white">
                        @yield('title')
                    </h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
                    @yield('content')
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>
</body>
</html>
