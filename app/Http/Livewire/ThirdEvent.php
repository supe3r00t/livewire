<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThirdEvent extends Component
{

    protected $listeners =[
        'fire'=> 'ambulance'
    ];

    public function ambulance(){

        dd('Event Test ThirdEvent');
    }
    public function render()
    {
        return view('livewire.third-event');
    }
}
