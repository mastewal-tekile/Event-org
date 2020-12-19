<?php

namespace App\View\Components\components;

use Illuminate\View\Component;

class OrganizerTumb extends Component
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
        return view('components.components.organizer-tumb')
            ->with('organizer', $this->organizer);
    }
}
