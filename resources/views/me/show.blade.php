@extends('layouts.app')
@section('title')
    Edit Account
@endsection
@section('content')
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Payment Profiles</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-600">
                        These payment profiles will displayed so that others may help.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('me.payments.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <x-inputs.leading-text
                                        name="venmo"
                                        placeholder="@jane_wilson"
                                        :value="$user->getPaymentProfileUsername('venmo')"
                                    >
                                        <x-slot name="label">Venmo</x-slot>
                                        <x-slot name="leading">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 792 612" class="w-16 -my-10">
                                                <g fill="#3D95CE">
                                                    <path d="M202.376 250.999c3.895 6.433 5.651 13.059 5.651 21.429 0 26.696-22.789 61.376-41.285 85.728h-42.246l-16.943-101.312 36.991-3.512 8.958 72.09c8.37-13.636 18.699-35.065 18.699-49.675 0-7.997-1.37-13.444-3.511-17.929l33.686-6.819zM250.318 295.611c6.807 0 23.944-3.114 23.944-12.854 0-4.677-3.307-7.01-7.204-7.01-6.818 0-15.765 8.176-16.74 19.864zm-.78 19.29c0 11.893 6.613 16.559 15.38 16.559 9.547 0 18.688-2.333 30.569-8.371l-4.475 30.388c-8.371 4.09-21.417 6.819-34.08 6.819-32.121 0-43.617-19.48-43.617-43.833 0-31.564 18.7-65.079 57.253-65.079 21.226 0 33.095 11.892 33.095 28.451.002 26.695-34.26 34.873-54.125 35.066zM410.414 274.773c0 3.896-.591 9.547-1.179 13.24l-11.1 70.142h-36.019l10.125-64.298c.192-1.744.782-5.255.782-7.203 0-4.677-2.922-5.844-6.435-5.844-4.666 0-9.343 2.141-12.458 3.704l-11.484 73.642h-36.222l16.548-105.015h31.35l.397 8.382c7.396-4.87 17.135-10.137 30.953-10.137 18.307-.002 24.742 9.353 24.742 23.387zM517.344 262.88c10.316-7.396 20.057-11.496 33.488-11.496 18.495 0 24.928 9.355 24.928 23.389 0 3.896-.589 9.547-1.177 13.24l-11.087 70.142h-36.029l10.318-65.657c.19-1.755.589-3.896.589-5.254 0-5.266-2.923-6.434-6.435-6.434-4.474 0-8.946 1.948-12.266 3.704l-11.482 73.642h-36.02l10.318-65.657c.19-1.755.577-3.896.577-5.254 0-5.266-2.924-6.434-6.424-6.434-4.676 0-9.343 2.141-12.458 3.704l-11.493 73.642h-36.21l16.546-105.015h30.967l.973 8.767c7.204-5.254 16.935-10.521 29.98-10.521 11.295-.004 18.69 4.867 22.397 11.492zM647.444 293.472c0-8.573-2.144-14.418-8.564-14.418-14.215 0-17.134 25.131-17.134 37.987 0 9.753 2.729 15.789 9.147 15.789 13.436 0 16.551-26.503 16.551-39.358zm-62.303 22.017c0-33.117 17.52-64.105 57.83-64.105 30.374 0 41.477 17.929 41.477 42.676 0 32.733-17.331 66.631-58.613 66.631-30.57 0-40.694-20.07-40.694-45.202z"/>
                                                </g>
                                            </svg>
                                        </x-slot>
                                    </x-inputs.leading-text>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <x-inputs.leading-text
                                        name="paypal"
                                        placeholder="@jane_wilson"
                                        :value="$user->getPaymentProfileUsername('paypal')"
                                    >
                                        <x-slot name="label">PayPal</x-slot>
                                        <x-slot name="leading">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-11.153 -13.144 326.05 105.914" class="w-16"><g transform="matrix(2.07675 0 0 -2.07675 -11.153 92.77)"><defs><path id="a" d="M-84.525-27.457h326.05V78.457h-326.05z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><g clip-path="url(#b)"><path d="M32.419 40.982c-1.674 1.908-4.7 2.726-8.571 2.726H12.613a1.609 1.609 0 0 1-1.59-1.357L6.347 12.68a.964.964 0 0 1 .953-1.114h6.936l1.742 11.049-.054-.346a1.604 1.604 0 0 0 1.583 1.357h3.296c6.475 0 11.545 2.63 13.026 10.238.044.225.082.444.115.658.44 2.812-.003 4.726-1.524 6.459" fill="#003087"/><path d="M117.331 26.863c-.424-2.784-2.55-2.784-4.606-2.784h-1.17l.821 5.198c.05.314.32.545.638.545h.537c1.4 0 2.722 0 3.404-.797.407-.477.53-1.185.376-2.162m-.895 7.264h-7.756a1.08 1.08 0 0 1-1.066-.91L104.48 13.33a.647.647 0 0 1 .638-.747h3.98c.371 0 .687.27.745.636l.89 5.64c.082.523.534.91 1.064.91h2.454c5.11 0 8.058 2.471 8.828 7.372.347 2.142.014 3.826-.989 5.005-1.103 1.296-3.058 1.982-5.653 1.982" fill="#009cde"/><path d="M62.011 26.863c-.424-2.784-2.55-2.784-4.607-2.784h-1.17l.821 5.198c.05.314.32.545.638.545h.537c1.4 0 2.722 0 3.404-.797.408-.477.531-1.185.377-2.162m-.895 7.264H53.36c-.53 0-.982-.386-1.065-.91L49.16 13.33a.646.646 0 0 1 .638-.747h3.704c.53 0 .981.386 1.064.91l.847 5.365c.082.524.534.91 1.064.91h2.454c5.11 0 8.058 2.472 8.828 7.373.347 2.142.014 3.826-.989 5.005-1.103 1.296-3.058 1.982-5.653 1.982M79.123 19.723c-.36-2.122-2.043-3.547-4.192-3.547-1.077 0-1.94.347-2.494 1.003-.55.65-.756 1.577-.582 2.608.334 2.104 2.046 3.574 4.162 3.574 1.055 0 1.91-.35 2.476-1.012.569-.667.793-1.599.63-2.626m5.176 7.23h-3.714a.647.647 0 0 1-.64-.547l-.162-1.038-.26.376c-.804 1.167-2.597 1.558-4.387 1.558-4.103 0-7.608-3.11-8.29-7.47-.355-2.177.149-4.256 1.383-5.707 1.133-1.333 2.75-1.888 4.677-1.888 3.308 0 5.142 2.124 5.142 2.124l-.166-1.032a.646.646 0 0 1 .639-.747h3.344c.53 0 .982.385 1.065.91l2.008 12.713a.647.647 0 0 1-.64.747" fill="#003087"/><path d="M134.443 19.723c-.36-2.122-2.043-3.547-4.192-3.547-1.077 0-1.94.347-2.494 1.003-.55.65-.756 1.577-.582 2.608.334 2.104 2.045 3.574 4.162 3.574 1.055 0 1.91-.35 2.476-1.012.569-.667.793-1.599.63-2.626m5.176 7.23h-3.714a.647.647 0 0 1-.64-.547l-.162-1.038-.26.376c-.804 1.167-2.597 1.558-4.387 1.558-4.102 0-7.607-3.11-8.29-7.47-.355-2.177.15-4.256 1.384-5.707 1.133-1.333 2.75-1.888 4.677-1.888 3.309 0 5.143 2.124 5.143 2.124l-.166-1.032a.644.644 0 0 1 .637-.747h3.343c.53 0 .982.385 1.066.91l2.008 12.713a.647.647 0 0 1-.64.747" fill="#009cde"/><path d="M104.08 26.952h-3.734c-.357 0-.69-.177-.89-.473l-5.15-7.584-2.183 7.288a1.08 1.08 0 0 1-1.033.77h-3.669a.647.647 0 0 1-.612-.856l4.11-12.066-3.866-5.455a.647.647 0 0 1 .528-1.02h3.73c.352 0 .683.173.885.463l12.414 17.918a.646.646 0 0 1-.53 1.015" fill="#003087"/><path d="M143.996 33.58l-3.184-20.251a.647.647 0 0 1 .639-.747h3.201c.53 0 .982.386 1.065.91l3.139 19.888a.646.646 0 0 1-.639.747h-3.582a.645.645 0 0 1-.639-.546" fill="#009cde"/><path d="M32.419 40.982c-1.674 1.908-4.7 2.726-8.571 2.726H12.613a1.609 1.609 0 0 1-1.59-1.357L6.347 12.68a.964.964 0 0 1 .953-1.114h6.936l1.742 11.049-.054-.346a1.604 1.604 0 0 0 1.583 1.357h3.296c6.475 0 11.545 2.63 13.026 10.238.044.225.082.444.115.658.44 2.812-.003 4.726-1.524 6.459" fill="#003087"/><path d="M17.849 34.485a1.408 1.408 0 0 0 1.389 1.187h8.808c1.043 0 2.016-.068 2.905-.21a12.206 12.206 0 0 0 1.44-.322 7.957 7.957 0 0 0 1.551-.618c.442 2.813-.002 4.726-1.523 6.46-1.675 1.907-4.7 2.725-8.571 2.725H12.612a1.609 1.609 0 0 1-1.588-1.357L6.346 12.682a.964.964 0 0 1 .952-1.115h6.937l1.742 11.05 1.872 11.868z" fill="#003087"/><path d="M33.943 34.523a18.294 18.294 0 0 0-.115-.658c-1.481-7.607-6.551-10.238-13.026-10.238h-3.297a1.602 1.602 0 0 1-1.582-1.357l-1.688-10.702-.48-3.036a.844.844 0 0 1 .834-.976h5.847c.692 0 1.28.504 1.389 1.187l.057.298 1.102 6.984.07.386a1.407 1.407 0 0 0 1.39 1.187h.875c5.664 0 10.099 2.3 11.395 8.956.54 2.78.26 5.103-1.17 6.734a5.584 5.584 0 0 1-1.601 1.235" fill="#009cde"/><path d="M32.392 35.14c-.226.067-.459.127-.699.18-.24.053-.488.1-.742.14-.89.145-1.862.213-2.906.213h-8.807a1.404 1.404 0 0 1-1.389-1.188l-1.872-11.87-.054-.345a1.602 1.602 0 0 0 1.582 1.357h3.297c6.475 0 11.545 2.63 13.026 10.238.044.225.081.443.115.658a7.998 7.998 0 0 1-1.218.514c-.109.036-.22.07-.333.104" fill="#012169"/></g></g></svg>
                                        </x-slot>
                                    </x-inputs.leading-text>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Save
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-600">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                                    <input id="first_name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                                    <input id="last_name" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email_address" class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                                    <input id="email_address" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Country / Region</label>
                                    <select id="country" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">Street address</label>
                                    <input id="street_address" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City</label>
                                    <input id="city" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium leading-5 text-gray-700">State / Province</label>
                                    <input id="state" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">ZIP / Postal</label>
                                    <input id="postal_code" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-600">
                        Decide which communications you'd like to receive and how.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <fieldset>
                                <legend class="text-base leading-6 font-medium text-gray-900">By Email</legend>
                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="comments" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        </div>
                                        <div class="ml-3 text-sm leading-5">
                                            <label for="comments" class="font-medium text-gray-700">Comments</label>
                                            <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="candidates" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                            </div>
                                            <div class="ml-3 text-sm leading-5">
                                                <label for="candidates" class="font-medium text-gray-700">Candidates</label>
                                                <p class="text-gray-500">Get notified when a candidate applies for a job.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="offers" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                            </div>
                                            <div class="ml-3 text-sm leading-5">
                                                <label for="offers" class="font-medium text-gray-700">Offers</label>
                                                <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="mt-6">
                                <legend class="text-base leading-6 font-medium text-gray-900">Push Notifications</legend>
                                <p class="text-sm leading-5 text-gray-500">These are delivered via SMS to your mobile phone.</p>
                                <div class="mt-4">
                                    <div class="flex items-center">
                                        <input id="push_everything" name="push_notifications" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        <label for="push_everything" class="ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700">Everything</span>
                                        </label>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <input id="push_email" name="push_notifications" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        <label for="push_email" class="ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700">Same as email</span>
                                        </label>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <input id="push_nothing" name="push_notifications" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        <label for="push_nothing" class="ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700">No push notifications</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue focus:bg-indigo-500 active:bg-indigo-600 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
