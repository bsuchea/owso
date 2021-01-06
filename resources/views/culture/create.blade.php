<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl text-blue-700 leading-tight">
            {{ __('វិស័យវប្បធម៌ និងវិចិត្រសិល្បៈ') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="mt-10 sm:mt-0">

            <livewire:create-service />

        </div>

    </div>


</x-app-layout>