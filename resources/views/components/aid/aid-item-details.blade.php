<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6 flex items-center justify-between">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Mutual Aid Request
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                Can you help {{ $aid->user->first_name }}?
{{--                Contact {{ $aid->user->first_name }} by email if you can help.--}}
            </p>
        </div>
        @if($aid->user->id === optional(auth()->user())->id)
            <div>
                <form method="POST" action="{{ route('aid.destroy', $aid) }}">
                    @csrf
                    @method('delete')
                    <button
                        type="submit"
                        class="inline-flex items-center p-3 border border-transparent text-sm leading-4 font-medium rounded text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition ease-in-out duration-150"
                    >
                        Delete Request
                    </button>
                </form>
            </div>
        @endif
    </div>
    <div>
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    About {{ $aid->user->first_name }}
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $aid->user->full_name }} (<span class="text-xs">{{ $aid->user->affiliation }}</span>)<br>
                    <span class="text-gray-500 hover:text-gray-900"><a href="mailto:{{ $aid->user->email }}" title="Email">Email - {{ $aid->user->email }}</a></span>
                    @if($aid->user->getPaymentProfileUsername('venmo'))
                        <br><span class="text-gray-500 hover:text-gray-900"><a href="https://venmo.com/{{ $aid->user->getPaymentProfileUsername('venmo') }}" target="_blank" title="Venmo">Venmo - @&ZeroWidthSpace;{{ $aid->user->getPaymentProfileUsername('venmo') }}</a></span>
                    @endif
                    @if($aid->user->getPaymentProfileUsername('paypal'))
                        <br><span class="text-gray-500 hover:text-gray-900"><a href="https://paypal.me/{{ $aid->user->getPaymentProfileUsername('paypal') }}" target="_blank" title="PayPal">PayPal - {{ $aid->user->getPaymentProfileUsername('paypal') }}</a></span>
                    @endif
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
                    {!! $aid->trixRender() !!}
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
