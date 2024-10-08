<x-app-layout>
    <x-slot name="header">
        <div class="flex" style="justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add new Event') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex-col middle">
                        <x-forms.event-form :organizer="$organizer_id"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
