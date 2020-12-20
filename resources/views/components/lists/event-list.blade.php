<div class="{{($horizontal)? 'flex-col': 'flex'}}">
    @foreach($events as $event)
        <x-components.event-tumb :event="$event" :horizontal="$horizontal"/>
        <hr>
    @endforeach
</div>
