<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Mutual Aid Request
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            Contact {{ $aid->user->first_name }} by email if you can help.
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    About {{ $aid->user->first_name }}
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $aid->user->full_name }} (<span class="text-xs">{{ $aid->user->affiliation }}</span>)<br>
                    <span class="text-gray-500 hover:text-gray-900"><a href="mailto:{{ $aid->user->email }}">{{ $aid->user->email }}</a></span>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Summary
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $aid->summary }}
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Details
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $aid->request }}
                </dd>
            </div>
            @if($aid->amount)
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Amount Needed
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $aid->amountInDollars() }}
                </dd>
            </div>
            @endif
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Needed By
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <time datetime="{{ $aid->needed_by->toDateString() }}">{{ $aid->needed_by->format('F d, Y') }}<br>
                    <span class="text-gray-500">{{ $aid->needed_by->diffForHumans() }}</span></time>
                </dd>
            </div>
        </dl>
    </div>
</div>
