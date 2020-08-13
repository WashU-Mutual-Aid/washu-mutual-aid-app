@extends('layouts.app')
@section('title')
    Register for an Account
@endsection
@section('content')
    <div class="bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg md:max-w-2xl">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-inputs.text
                                name="first_name"
                                placeholder="Jane"
                                required
                            >
                                <x-slot name="label">First Name</x-slot>
                            </x-inputs.text>
                        </div>

                        <div class="sm:col-span-3">
                            <x-inputs.text
                                name="last_name"
                                placeholder="Wilson"
                                required
                            >
                                <x-slot name="label">Last Name</x-slot>
                            </x-inputs.text>
                        </div>
                    </div>
                    <div class="mt-6">
                        <x-inputs.text
                            name="email"
                            type="email"
                            placeholder="jane.wilson@wustl.edu"
                            required
                        >
                            <x-slot name="label">Email Address</x-slot>
                        </x-inputs.text>
                    </div>

                    <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-inputs.basic-select name="affiliation">
                                <x-slot name="label">Affiliation</x-slot>
                                <option>Undergraduate</option>
                                <option disabled>---</option>
                                <option disabled>Graduate</option>
                                <option>Arts &amp; Sciences</option>
                                <option>Brown School</option>
                                <option>McKelvey School of Engineering</option>
                                <option>Olin Business School</option>
                                <option>Sam Fox School of Design &amp; Visual Arts</option>
                                <option selected>School of Law</option>
                                <option>School of Medicine</option>
                                <option disabled>---</option>
                                <option>Alumni</option>
                            </x-inputs.basic-select>
                        </div>

                        <div class="sm:col-span-3">
                            <x-inputs.basic-select name="current_location">
                                <x-slot name="label">Current Location</x-slot>
                                <option selected>St. Louis City/County</option>
                                <option>Other</option>
                            </x-inputs.basic-select>
                        </div>
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
                                Register
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
