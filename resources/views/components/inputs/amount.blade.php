<div class="mt-1 sm:mt-0 sm:col-span-2 relative rounded-md shadow-sm max-w-lg shadow-sm sm:max-w-xs transition duration-150 ease-in-out">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none ">
        <span class="text-gray-500 sm:text-sm sm:leading-5">$</span>
    </div>
    <input
        id="amount"
        name="amount"
        class="
            form-input block w-full pl-7 pr-12 sm:text-sm sm:leading-5
            @error('amount')
                border-red-300 text-red-900 placeholder-red-300 focus:shadow-outline-red focus:border-red-300
            @else
                border-gray-300 placeholder-gray-400 focus:shadow-outline-blue focus:border-blue-300
            @enderror
        "
        placeholder="0.00"
        value="{{ old('amount') }}"
        aria-describedby="amount-currency"
    >
    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm sm:leading-5" id="amount-currency">USD</span>
    </div>
</div>
