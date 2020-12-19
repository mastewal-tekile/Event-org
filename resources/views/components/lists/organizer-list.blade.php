<div class="flex">
    @foreach($organizers as $organizer)
        <x-components.organizer-tumb :organizer="$organizer"/>
    @endforeach
</div>
