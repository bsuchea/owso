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