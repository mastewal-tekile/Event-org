<?php

namespace App\View\Components\forms;

use App\Models\EventType;
use Illuminate\View\Component;

class EventForm extends Component
{
    private $organizer;
    private $cities;
    private $eventTypes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($organizer, $cities, $eventTypes)
    {
        $this->organizer = $organizer;
        $this->cities = City::get();
        $this->eventTypes = EventType::get();
        $this->defaultAttributes([
            'cities' => "xyz"
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.event-form'. [
                'cities' => $this->cities,
                'eventTypes' => $this->eventTypes,
                'organizer' => $this->organizer
            ]);
    }
}
