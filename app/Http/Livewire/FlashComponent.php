<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FlashComponent extends Component
{
    public function flash(){

        session()->flash('message', 'Post successfully updated.');

        return redirect()->route('welcome2');
    }
    public function render()
    {
        return view('livewire.flash-component');
    }
}
