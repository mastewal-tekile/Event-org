<div class="flex">
    @foreach($events as $event)
        <x-components.event-tumb :event="$event"/>
    @endforeach
</div>
