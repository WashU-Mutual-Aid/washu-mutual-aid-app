<label for="last_name" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
    Needed By
</label>
<div class="mt-1 sm:mt-0 sm:col-span-2 z-10">
    <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
            <div class="relative">
                <input type="hidden" name="date" x-ref="date">
                <input
                    type="text"
                    readonly
                    x-model="datepickerValue"
                    @click="showDatepicker = !showDatepicker"
                    @keydown.escape="showDatepicker = false"
                    class="appearance-none block w-full px-3 py-2 border rounded-md focus:outline-none transition duration-150 ease-in-out border-gray-300 placeholder-gray-400 focus:shadow-outline-blue focus:border-blue-300 sm:text-sm"
                    placeholder="Select date">
                @error('date')
                <div class="absolute inset-y-0 right-6 mt-1 pr-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                @enderror
                <div class="absolute top-0 right-0 px-3 py-2" @click="showDatepicker = !showDatepicker">
                    <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>

                <div
                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                    style="width: 17rem"
                    x-show.transition="showDatepicker"
                    @click.away="showDatepicker = false">

                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <span x-text="MONTH_NAMES[month]" class="sm:text-sm font-bold text-gray-700"></span>
                            <span x-text="year" class="ml-1 sm:text-sm text-gray-600 font-normal"></span>
                        </div>
                        <div>
                            <button
                                type="button"
                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                :disabled="month == 0 ? true : false"
                                @click="month--; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <button
                                type="button"
                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                :disabled="month == 11 ? true : false"
                                @click="month++; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-3 -mx-1">
                        <template x-for="(day, index) in DAYS" :key="index">
                            <div style="width: 14.26%" class="px-1">
                                <div
                                    x-text="day"
                                    class="text-gray-800 font-medium text-center text-xs"></div>
                            </div>
                        </template>
                    </div>

                    <div class="flex flex-wrap -mx-1">
                        <template x-for="blankday in blankdays">
                            <div
                                style="width: 14.28%"
                                class="text-center border p-1 border-transparent text-sm"
                            ></div>
                        </template>
                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                            <div style="width: 14.28%" class="px-1 mb-1">
                                <div
                                    @click="getDateValue(date)"
                                    x-text="date"
                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-gray-200': isToday(date) == false }"
                                ></div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @error('date')
    <p class="mt-2 text-sm text-red-600" id="date-error">{{ $message }}</p>
    @enderror
</div>
@once
    <script>
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function app() {
        return {
            showDatepicker: false,
            datepickerValue: '',

            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

            initDate() {

                @if(old('date'))
                    @php
                        $date = explode('-', old('date'));
                    @endphp
                    this.datepickerValue = new Date('{{ $date[0] }}', '{{ $date[1] - 1 }}', '{{ $date[2] }}').toDateString()
                    this.$refs.date.value = '{{ old('date') }}'
                @else
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                    this.$refs.date.value = `${this.year}-${this.month + 1}-${today.getDate()}`;
                @endif
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString();
            },

            getDateValue(date) {
                let selectedDate = new Date(this.year, this.month, date);
                this.datepickerValue = selectedDate.toDateString();

                this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ (selectedDate.getMonth() + 1)).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

                console.log(this.$refs.date.value);

                this.showDatepicker = false;
            },

            getNoOfDays() {
                let i;
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for (i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for (i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            }
        }
    }
</script>
@endonce
