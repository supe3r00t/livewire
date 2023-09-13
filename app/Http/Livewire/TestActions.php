<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestActions extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;

//        dd('ahmed');
    }

    public function decrement()
    {
        $this->count--;
    }


    public function render()
    {
        return view('livewire.test-actions');
    }
}
