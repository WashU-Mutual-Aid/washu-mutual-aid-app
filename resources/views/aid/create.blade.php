@extends('layouts.app')

@section('title')
    Request Aid
@endsection

@section('content')
    <form action="#" method="POST">
        @csrf
        <div>
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        About
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Please share whatever you are comfortable with so that others can help.
                    </p>
                </div>
                <div class="mt-6 sm:mt-5">
                    <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-inputs.text name="summary" wrap="flex" labelStyles="sm:mt-px sm:pt-2" required autofocus>
                            <x-slot name="label">Summary</x-slot>
                        </x-inputs.text>
                    </div>
                </div>
                <div class="mt-6 sm:mt-5">
                    <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-inputs.trix model="{{ Aid::class }}" name="details" wrap="flex" labelStyles="sm:mt-px sm:pt-2">
                            <x-slot name="label">Details</x-slot>
                        </x-inputs.trix>
                    </div>
                </div>
            </div>
            <div class="mt-6 sm:mt-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="amount" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        Amount
                    </label>
                    <x-inputs.amount></x-inputs.amount>
                </div>


                <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-inputs.date></x-inputs.date>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-8 sm:mt-5 sm:pt-10">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Privacy
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Would you like your request to appear on the homepage for the general public to see?
                    </p>
                </div>
                <div class="mt-6 sm:mt-5">
                    <div class="sm:border-t sm:border-gray-200 sm:pt-5">
                        <div role="group" aria-labelledby="label-notifications">
                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline">
                                <div>
                                    <div class="text-base leading-6 font-medium text-gray-900 sm:text-sm sm:leading-5 sm:text-gray-700" id="label-notifications">
                                        Display on Homepage
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-lg">
                                        <p class="text-sm leading-5 text-gray-500">If yes, you will not need a WashU email address to see your request</p>
                                        <div class="mt-4">
                                            <div class="flex items-center">
                                                <input id="public_yes" name="require_account" value="0" @if(!is_null(old('require_account')) && !boolval(old('require_account'))) checked @endif type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" required>
                                                <label for="public_yes" class="ml-3">
                                                    <span class="block text-sm leading-5 font-medium text-gray-700">Yes</span>
                                                </label>
                                            </div>
                                            <div class="mt-4 flex items-center">
                                                <input id="public_no" name="require_account" value="1" @if(boolval(old('require_account'))) checked @endif type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                                <label for="public_no" class="ml-3">
                                                    <span class="block text-sm leading-5 font-medium text-gray-700">No</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-200 pt-5">
            <div class="flex justify-end">
      <span class="inline-flex rounded-md shadow-sm">
        <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
          Cancel
        </button>
      </span>
                <span class="ml-3 inline-flex rounded-md shadow-sm">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
          Save
        </button>
      </span>
            </div>
        </div>
    </form>
@endsection
