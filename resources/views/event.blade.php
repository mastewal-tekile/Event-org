<x-app-layout>
    <x-slot name="header">
        <div class="flex" style="justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Event') }}
            </h2>
            <a href="/organizers/create">

            </a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 middle">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="flex-col">
                        <h1 class="text-2xl" style="text-transform: capitalize;">{{$event->name}}</h1>
                        <p style="color: #666">
                            {{ \Carbon\Carbon::parse($event->start_at)->diffForHumans()}} to
                            {{ \Carbon\Carbon::parse($event->finish_at)->diffForHumans()}}</p>
                        <i style="color: #666">{{$event->number_of_seats}} seats</i>
                        <h2><b>Description</b></h2>
                        <p>{{$event->description}}</p>
                    </div>

                        <div class="flex" style="width: 100%;flex-flow: row-reverse">
                            @if(Auth::user()->reservation($event) === null)
                                <form action="/events/reserve/{{$event->id}}" method="post">
                                    @csrf
                                    <x-button class="ml-3 disable">
                                        {{ __('Reserve') }}
                                    </x-button>
                                </form>
                            @elseif(Auth::user()->reservation($event) == 1)
                                <i>You have reservation.</i>
                            @else
                                <i>You are on the waiting list.</i>
                            @endif

                        </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
