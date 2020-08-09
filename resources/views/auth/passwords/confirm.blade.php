@extends('layouts.app')
@section('title')
    Confirm Password
@endsection
@section('content')
<div class="bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
            {{ __('Please confirm your password before continuing.') }}
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div>
                    <x-inputs.text
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                    >
                        <x-slot name="label">Password</x-slot>
                    </x-inputs.text>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <span class="block flex-1 rounded-md shadow-sm">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Confirm Password
                        </button>
                    </span>
                    @if (Route::has('password.request'))
                        <div class="ml-4 text-sm leading-5">
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Forgot your password?
                            </a>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
