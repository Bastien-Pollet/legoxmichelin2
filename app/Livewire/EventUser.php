<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EventUser extends Component
{

    public $events = [];

    public function mount()
    {
        $this->events = Auth::user()
            ->events()
            ->orderBy('event_date')
            ->get();
    }

    public function render()
    {
        return view('livewire.event-user');
    }
}
