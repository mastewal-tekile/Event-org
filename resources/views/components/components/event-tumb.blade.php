<a href="/events/{{$event->id}}" style="width: 100%">
    @if(!$horizontal)
        <div class="flex-col" style="margin: .8em; justify-content: center;width: 100%">
            <img src="/img/organizer.svg" alt="" style="width: 60px;">
            <h1>{{$event->name}}</h1>
        </div>
    @else
        <div class="flex" style="margin: .8em;width: 100%">
            <img src="/img/organizer.svg" alt="" style="width: 60px;">
            <div class="flex-col" style="margin-left: 1.5em; flex: 10">
                <h1 class="text-2xl">{{$event->name}}</h1>
                <p style="color: #555">{{$event->description}}</p>
            </div>
            <div class="flex-col" style="margin-left: 1.5em">
                {{ \Carbon\Carbon::parse($event->start_at)->diffForHumans()}} to<br>
                {{ \Carbon\Carbon::parse($event->finish_at)->diffForHumans()}}
            </div>
        </div>
    @endif
</a>

