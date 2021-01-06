
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-blue-700 leading-tight">
            {{ __('វិស័យវប្បធម៌ និងវិចិត្រសិល្បៈ') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-10 bg-white border-b border-gray-200">

                    <a href="{{ route('service.create') }}" class="bg-green-500 rounded p-2 px-6 text-white text-sm">New Service</a> <br>

                    <div class="mt-3">
                        <livewire:service-datatable exportable="true"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
