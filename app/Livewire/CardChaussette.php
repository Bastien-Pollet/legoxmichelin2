<?php

namespace App\Livewire;

use App\Models\Socks;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class CardChaussette extends Component
{
    public $socks;
    public $notes = []; 

    public function mount()
    {
        $this->socks = Socks::all();
        
        foreach ($this->socks as $sock) {
            $this->notes[$sock->id] = 0;
        }
    }

    public function vote($sockId, $note)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }
        $this->notes[$sockId] = $note;
    }

    public function render()
    {
        return view('livewire.card-chaussette');
    }
}
