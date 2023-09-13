<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{

    protected $listeners =[
        'fire'=> 'ambulance'
    ];

    public function ambulance(){

        dd('Event Test');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
