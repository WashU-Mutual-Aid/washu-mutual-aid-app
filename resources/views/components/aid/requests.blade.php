<div class="bg-white">
    <ul>
        @forelse($requests as $aid)
            <li @if(!$loop->first) class="border-t border-gray-200" @endif>
                <x-aid-row :aid="$aid"></x-aid-row>
            </li>
        @empty
            <li class="w-1/2 m-auto">
                <div class="rounded-md bg-blue-50 p-4 mb-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3 flex-1 md:flex md:justify-between">
                            <p class="text-sm leading-5 text-blue-700">
                                No requests yet.
                            </p>
                            <p class="mt-3 text-sm leading-5 md:mt-0 md:ml-6">
                                <a href="{{ route('aid.create') }}" class="whitespace-no-wrap font-medium text-blue-700 hover:text-blue-600 transition ease-in-out duration-150">
                                    Request Aid &rarr;
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('/images/empty.svg') }}" alt="No Requests" class="w-full h-96">
            </li>
        @endforelse
    </ul>
    <div>
        {{ $requests->links() }}
    </div>
</div>
