<div>
    <form method="POST" action="{{ route('events.store') }}" id="organizer-form">
        <input hidden name="organizer_id" value="{{$organizer}}"/>
        @csrf
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div>
            <x-label for="event_type" :value="__('Event type')" />

            <select id="event_type"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="event_type_id">
                @foreach(App\Models\EventType::get() as $eventType)
                    <option value="{{$eventType->id}}">{{$eventType->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex" style="justify-content: space-between;">
            <div style="margin-right: .2em">
                <x-label for="start_at" :value="__('Start at')" />
                <x-input id="start_at"
                         class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                         type="datetime-local"
                         name="start_at"
                         style="width: 100%"
                />
            </div>
            <div>
                <x-label for="finish_at" :value="__('Start at')" />
                <x-input id="finish_at"
                         class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                         type="datetime-local"
                         name="finish_at"
                         style="width: 100%"
                />
            </div>
        </div>
        <div>
            <x-label for="city" :value="__('City')" />

            <select id="city"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="city_id">
                @foreach(App\Models\City::get() as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <x-label for="name" :value="__('Number of seats')" />

            <x-input id="number_of_seats" class="block mt-1 w-full" type="number" name="number_of_seats"/>
        </div>
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
