@extends('layouts.app')
@section('title')
    Sign in to your account
@endsection
@section('content')
    <div class="bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form action="#" method="POST">
                    @csrf
                    <div>
                        <x-inputs.text
                            name="email"
                            type="email"
                            placeholder="jane.wilson@wustl.edu"
                            required
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

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm leading-5">
                            <a href="/password/reset" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Sign In
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
