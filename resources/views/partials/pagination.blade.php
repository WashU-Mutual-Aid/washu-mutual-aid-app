@if ($paginator->hasPages())
<nav class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0">
    <div class="w-0 flex-1 flex">
        @if ($paginator->onFirstPage())
            <div class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-200">
                <svg class="mr-3 h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Previous
            </div>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="-mt-px border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Previous
            </a>
        @endif
    </div>
    <div class="hidden md:flex">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500">
                  ...
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a aria-current="page" href="{{ $url }}" class="-mt-px border-t-2 border-indigo-500 pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-indigo-600 focus:outline-none focus:text-indigo-800 focus:border-indigo-700 transition ease-in-out duration-150">
                            {{ $page }}
                        </a>
                    @else
                        <a href="{{ $url }}" class="-mt-px border-t-2 border-transparent pt-4 px-4 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
    <div class="w-0 flex-1 flex justify-end">
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition ease-in-out duration-150">
                Next
                <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        @else
            <div class="-mt-px border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm leading-5 font-medium text-gray-200">
                Next
                <svg class="ml-3 h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        @endif
    </div>
</nav>
<div class="hidden md:flex justify-center mt-2">
    <p class="text-sm text-gray-500 leading-5">
        {!! __('Showing') !!}
        <span class="font-medium">{{ $paginator->firstItem() }}</span>
        {!! __('to') !!}
        <span class="font-medium">{{ $paginator->lastItem() }}</span>
        {!! __('of') !!}
        <span class="font-medium">{{ $paginator->total() }}</span>
        {!! __('results') !!}
    </p>
</div>
@endif
