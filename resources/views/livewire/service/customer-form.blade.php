<div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-2">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="first_name"
                                           class="block text-sm font-medium text-gray-700">វិស័យ </label>
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

                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">ទីតាំង</label>
                                    <input type="text" name="locate" id="locate" wire:model="locate"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="locate" class="mt-2"/>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="postal_code"
                                           class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ </label>
                                    <input type="text" name="phone" id="phone" wire:model="phone"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="phone" class="mt-2"/>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700">
                                        វ៉ិបសាយឬអ៊ីមែល </label>
                                    <input type="text" name="email" id="email" wire:model="email"
                                           class="form-input rounded-md mb-1 block w-full">
                                    <x-jet-input-error for="email" class="mt-2"/>
                                </div>
                            </div>
                        </div>
