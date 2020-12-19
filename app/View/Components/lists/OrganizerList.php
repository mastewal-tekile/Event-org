<?php

namespace App\View\Components\lists;

use Illuminate\View\Component;

class OrganizerList extends Component
{
    private $organizers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($organizers)
    {
        $this->organizers = $organizers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.lists.organizer-list')
            ->with('organizers', $this->organizers);
    }
}
