@extends('layouts.app')
@section('title')
    Reset Password
@endsection
@section('content')
    <div class="bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <x-inputs.text
                            name="email"
                            type="email"
                            placeholder="jane.wilson@wustl.edu"
                            required
                            autocomplete="email"
                            autofocus
                        >
                            <x-slot name="label">Email Address</x-slot>
                        </x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <div>
                            <x-inputs.text
                                name="password"
                                type="password"
                                required
                            >
                                <x-slot name="label">Password</x-slot>
                            </x-inputs.text>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div>
                            <x-inputs.text
                                name="password_confirmation"
                                type="password"
                                required
                            >
                                <x-slot name="label">Confirm Password</x-slot>
                            </x-inputs.text>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button
                                type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
                            >
                                Reset Password
                            </button>
                        </span>
                    </div>
            </div>
        </div>
    </div>
@endsection
