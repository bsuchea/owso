<div>

    <x-slot name="header">
        <h2 class="text-xl text-blue-700 leading-tight">
            {{ __('ទំរង់កែប្រែព័ត៌មានសេវា') }}
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

                    <div class="shadow overflow-hidden sm:rounded-md">

                        @include('livewire.service.service-form')

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="saveCustomer()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm
                                    font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                                    focus:ring-offset-2 focus:ring-indigo-500">
                                រក្សាទុក
                            </button>
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

                        @include('livewire.service.customer-form')

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="saveService()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm
                                    font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2
                                    focus:ring-offset-2 focus:ring-indigo-500">
                                រក្សាទុក
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</div>
