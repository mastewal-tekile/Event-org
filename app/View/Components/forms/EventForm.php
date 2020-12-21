<?php

namespace App\View\Components\forms;

use App\Models\EventType;
use Illuminate\View\Component;

class EventForm extends Component
{
    private $organizer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.event-form', [
                'organizer' => $this->organizer
            ]);
    }
}
