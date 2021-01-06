<div>

    <x-slot name="header">
        <h2 class="text-xl text-blue-700 leading-tight">
            {{ __('ទំរង់បញ្ជូលសេវាថ្នី') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="mb-10 sm:mt-0">

            <div class="md:grid md:grid-cols-4 md:gap-2">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">ព័ត៌មានអាជីវករ</h3>
                        <p class="mb-1 text-sm text-gray-600">
                            សូមបញ្ចូលឈ្មោះអាជីវករ(ម្ចាស់អាជីវកម្ម ឬអ្នកតំណាង)
                            ឱ្យបានត្រឹមត្រូវទៅតាមព័ត៌មាននៅក្នុងអត្តសញ្ញាណប័ណ្ណដែលបានដាក់ពាក្យស្នើសុំ
                        </p>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-3">

                    <form wire:submit.prevent="saveService" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-7 gap-2">
                                    <div class="col-span-7 sm:col-span-3">
                                        <label for="customer_namekh"
                                               class="block text-sm font-medium text-gray-700">ឈ្មោះ</label>
                                        <input type="text" name="customer_namekh" wire:model="customer_namekh"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_namekh" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-3">
                                        <label for="customer_nameen"
                                               class="block text-sm font-medium text-gray-700">អក្សរឡាតាំង</label>
                                        <input type="text" name="customer_nameen" wire:model="customer_nameen"
                                               class="form-input rounded-sm mb-1 block w-full">
                                        <x-jet-input-error for="customer_nameen" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="last_name"
                                               class="block text-sm font-medium text-gray-700">ភេទ</label>
                                        <select wire:model="gender" id="gender" name="gender"
                                                class="form-input rounded-md mb-1 block w-full">
                                            <option value="">---</option>
                                            <option value="ប្រុស">ប្រុស</option>
                                            <option value="ស្រី">ស្រី</option>
                                        </select>
                                        <x-jet-input-error for="gender" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="dob"
                                               class="block text-sm font-medium text-gray-700">ថ្ងៃខែឆ្នាំកំណើត</label>
                                        <input type="date" name="dob" id="dob" wire:model="dob"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="dob" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="national"
                                               class="block text-sm font-medium text-gray-700">សញ្ជាតិ</label>
                                        <input type="text" name="national" id="national" wire:model="national"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="national" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-3 lg:col-span-3">
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">លេខអត្តសញ្ញាណប័ណ្ណ/លិខិតឆ្លងដែន </label>
                                        <input type="text" name="national_id" id="national_id" wire:model="national_id"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="national_id" class="mt-2"/>
                                    </div>
                                    <div class="col-span-7 sm:col-span-7 lg:col-span-7 mb-0">
                                        <b>អាសយដ្ឋានបច្ចុប្បន្ន</b>
                                    </div>
                                    <div class="col-span-7 sm:col-span-3 lg:col-span-3">
                                        <label for="customer_province" class="block text-sm font-medium text-gray-700">ខេត្ត/រាជធានី</label>
                                        <select name="customer_province" id="customer_province"
                                                wire:model="customer_province"
                                                class="form-input rounded-md mb-1 block w-full">
                                            <option value="">-- ជ្រើសរើស --</option>
                                            @if(count($pro) > 0)
                                                @foreach($pro as $p)
                                                    <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-jet-input-error for="customer_province" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-4 lg:col-span-4">
                                        <label for="city"
                                               class="block text-sm font-medium text-gray-700">ស្រុក/ក្រុង/ខណ្ឌ </label>
                                        <select name="customer_district" id="customer_district"
                                                wire:model="customer_district"
                                                class="form-input rounded-md mb-1 block w-full">
                                            <option value="">-- ជ្រើសរើស --</option>
                                            @if(count($dis) > 0)
                                                @foreach($dis as $p)
                                                    <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-jet-input-error for="customer_district" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-2  lg:col-span-2">
                                        <label for="country"
                                               class="block text-sm font-medium text-gray-700">ឃុំ/សង្កាត់</label>
                                        <select name="customer_commune" id="customer_commune"
                                                wire:model="customer_commune"
                                                class="form-input rounded-md mb-1 block w-full">
                                            <option value="">-- ជ្រើសរើស --</option>
                                            @if(count($com) > 0)
                                                @foreach($com as $p)
                                                    <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-jet-input-error for="customer_commune" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-2">
                                        <label for="street_address"
                                               class="block text-sm font-medium text-gray-700">ភូមិ </label>
                                        <select name="customer_village" id="customer_village"
                                                wire:model="customer_village"
                                                class="form-input rounded-md mb-1 block w-full">
                                            <option value="">-- ជ្រើសរើស --</option>
                                            @if(count($vil) > 0)
                                                @foreach($vil as $p)
                                                    <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <x-jet-input-error for="customer_village" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="country"
                                               class="block text-sm font-medium text-gray-700">ផ្លូវ</label>
                                        <input type="text" name="customer_street" id="customer_street"
                                               wire:model="customer_street"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_street" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="country"
                                               class="block text-sm font-medium text-gray-700">ក្រុមទី </label>
                                        <input type="text" name="customer_group" id="customer_group"
                                               wire:model="customer_group"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_group" class="mt-2"/>
                                    </div>

                                    <div class="col-span-3 sm:col-span-1">
                                        <label for="country"
                                               class="block text-sm font-medium text-gray-700">ផ្ទះលេខ </label>
                                        <input type="text" name="customer_home" id="customer_home"
                                               wire:model="customer_home"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_home" class="mt-2"/>
                                    </div>

                                    <div class="col-span-7 sm:col-span-3 lg:col-span-3">
                                        <label for="postal_code"
                                               class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ </label>
                                        <input type="text" name="customer_phone" id="customer_phone"
                                               wire:model="customer_phone"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_phone" class="mt-2"/>
                                    </div>
                                    <div class="col-span-7 sm:col-span-3 lg:col-span-3">
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">
                                            វ៉ិបសាយឬអ៊ីមែល </label>
                                        <input type="text" name="customer_email" id="customer_email"
                                               wire:model="customer_email"
                                               class="form-input rounded-md mb-1 block w-full">
                                        <x-jet-input-error for="customer_email" class="mt-2"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>

            <div class="hidden sm:block">
                <div class="py-3">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>

            <div class="md:grid md:grid-cols-4 md:gap-2">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">ព័ត៌មានអាជីវកម្ម </h3>
                        <p class="mb-1 text-sm text-gray-600">
                            សូមពិនិត្យមើលទីតាំងឲ្យបានជាក់លាក់របស់អាជីវកម្ម និងការទំនាក់ទំនងឲ្យបានច្បាស់លាស់
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-2">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="first_name"
                                           class="block text-sm font-medium text-gray-700">សេវា </label>
                                    <select name="sector" wire:model="sector"
                                            class="form-input rounded-md mb-1 block w-full">
                                        <option value="">-- ជ្រើសរើស --</option>
                                        @if(count($sec) > 0)
                                            @foreach($sec as $s)
                                                <option value="{{ $s->id }}">{{ $s->namekh }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-jet-input-error for="sector" class="mt-2"/>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="first_name"
                                           class="block text-sm font-medium text-gray-700">សេវា </label>
                                    <select name="service_type" wire:model="service_type"
                                            class="form-input rounded-md mb-1 block w-full">
                                        <option value="">-- ជ្រើសរើស --</option>
                                        @if(count($ser_type) > 0)
                                            @foreach($ser_type as $st)
                                                <option value="{{ $st->id }}">{{ $st->namekh }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-jet-input-error for="service_type" class="mt-2"/>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="last_name"
                                           class="block text-sm font-medium text-gray-700">អាជីវកម្ម </label>
                                    <input type="text" name="business_type" id="business_type"
                                           wire:model="business_type"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="business_type" class="mt-2"/>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first_name"
                                           class="block text-sm font-medium text-gray-700">នាមករណ៍ </label>
                                    <input type="text" name="brand_name_kh" id="brand_name_kh"
                                           wire:model="brand_name_kh"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="brand_name_kh" class="mt-2"/>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">នាមករណ៍
                                        ភាសាបរទេស </label>
                                    <input type="text" name="brand_name_en" id="brand_name_en"
                                           wire:model="brand_name_en"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="brand_name_en" class="mt-2"/>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="state"
                                           class="block text-sm font-medium text-gray-700">ខេត្ត/រាជធានី</label>
                                    <input type="text" name="state" value="បាត់ដំបង" readonly
                                           class="form-input rounded-md mb-1 block w-full">
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="city"
                                           class="block text-sm font-medium text-gray-700">ស្រុក/ក្រុង/ខណ្ឌ </label>
                                    <input type="text" name="city" value="បាត់ដំបង" readonly
                                           class="form-input rounded-md mb-1 block w-full">
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="country"
                                           class="block text-sm font-medium text-gray-700">ឃុំ/សង្កាត់</label>
                                    <select name="commune" id="commune" wire:model="commune"
                                            class="form-input rounded-md mb-1 block w-full">
                                        <option value="">-- ជ្រើសរើស --</option>
                                        @if(count($com2) > 0)
                                            @foreach($com2 as $p)
                                                <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-jet-input-error for="commune" class="mt-2"/>
                                </div>

                                <div class="col-span-3 sm:col-span-2">
                                    <label for="street_address"
                                           class="block text-sm font-medium text-gray-700">ភូមិ </label>
                                    <select name="village" id="village" wire:model="village"
                                            class="form-input rounded-md mb-1 block w-full">
                                        <option value="">-- ជ្រើសរើស --</option>
                                        @if(count($vil2) > 0)
                                            @foreach($vil2 as $p)
                                                <option value="{{ $p->id }}">{{ $p->namekh }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-jet-input-error for="village" class="mt-2"/>
                                </div>

                                <div class="col-span-3 sm:col-span-2">
                                    <label for="country" class="block text-sm font-medium text-gray-700">ផ្លូវ</label>
                                    <input type="text" name="street" id="street" wire:model="street"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="street" class="mt-2"/>
                                </div>

                                <div class="col-span-3 sm:col-span-1">
                                    <label for="country"
                                           class="block text-sm font-medium text-gray-700">ក្រុមទី </label>
                                    <input type="text" name="group" id="group" wire:model="group"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="group" class="mt-2"/>
                                </div>

                                <div class="col-span-3 sm:col-span-1">
                                    <label for="country"
                                           class="block text-sm font-medium text-gray-700">ផ្ទះលេខ </label>
                                    <input type="text" name="home" id="home" wire:model="home"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="home" class="mt-2"/>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="postal_code"
                                           class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ </label>
                                    <input type="text" name="phone" id="phone" wire:model="phone"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="phone" class="mt-2"/>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700">
                                        វ៉ិបសាយឬអ៊ីមែល </label>
                                    <input type="text" name="email" id="email" wire:model="email"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="email" class="mt-2"/>
                                </div>
                            </div>
                        </div>
                        @if(!empty($successMsg))
                        <div class="text-green-500">
                                {{ $successMsg }}
                        </div>
                    @endif
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm
                                    font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                                    focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                    </form>


                </div>
            </div>

        </div>

    </div>


</div>
