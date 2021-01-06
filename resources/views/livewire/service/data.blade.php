<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-blue-700 leading-tight">
            {{ __('សេវាលើវិស័យ') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-10 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-end">
                        <div class="w-2/6 px-5">
                            <select name="sector" wire:model="sector" class="form-input mr-5 ml-1 w-full">
                                <option value="">-- ជ្រើសរើសវិស័យ --</option>
                                <option value="1">វិស័យវប្បធម៌ និងវិចិត្រសិល្បៈ</option>
                                <option value="2">វិស័យពាណិជ្ជកម្ម</option>
                            </select>
                        </div>
                        <div class="w-1/6">
                            <a href="{{ route('service.create') }}"
                               class="group flex items-center px-5 py-3 rounded-md bg-blue-100 text-blue-600 text-sm font-medium hover:bg-blue-200 hover:text-blue-800">
                                <svg class="group-hover:text-light-blue-600 text-light-blue-500 mr-2" width="12"
                                     height="20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                                </svg>
                                បញ្ជូលសេវាថ្នី
                            </a>
                        </div>
                    </div>

                    <div class="mt-3">
                        <livewire:service-datatable exportable="true"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
