<x-app-layout>
    <x-slot name="header">
        <div class="flex" style="justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add new organizer group') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex-col middle">
                        <form method="POST" action="{{ route('organizers.store') }}" id="organizer-form">
                        @csrf

                        <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="description" :value="__('Description')" />

                                <textarea id="description"
                                          class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                          type="text" name="description" form="organizer-form"></textarea>
                            </div>


                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Add') }}
                                </x-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
