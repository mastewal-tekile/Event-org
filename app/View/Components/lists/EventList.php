<?php

namespace App\View\Components\lists;

use Illuminate\View\Component;

class EventList extends Component
{
    private $events;
    private $horizontal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($events, $horizontal = false)
    {
        $this->events = $events;
        $this->horizontal = $horizontal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.lists.event-list')
            ->with('events', $this->events)
            ->with('horizontal', $this->horizontal);
    }
}
