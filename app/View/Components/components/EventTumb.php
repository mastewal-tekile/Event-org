<?php

namespace App\View\Components\components;

use Illuminate\View\Component;

class EventTumb extends Component
{
    private $event;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.components.event-tumb');
    }
}
