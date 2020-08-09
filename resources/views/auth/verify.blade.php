@extends('layouts.app')
@section('title')
    Verify Your Email Address
@endsection
@section('content')
        <div class="px-4 py-5 sm:p-6">

<div class="mt-2 max-w-xl text-sm leading-5 text-gray-900">
    @if (session('resent'))
        <x-notification>
            <p class="text-sm leading-5 font-medium text-gray-900">
                A fresh verification link has been sent to your email address.
            </p>
        </x-notification>
    @endif
    <p>
        Before proceeding, please check your email for a verification link.
    </p>
    <form class="flex mt-5" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button
            type="submit"
            class="inline-flex items-center justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
        >
            If you did not receive the email click here to request another
        </button>
    </form>
</div>
        </div>
@endsection
