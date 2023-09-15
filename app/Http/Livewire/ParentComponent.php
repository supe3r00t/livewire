<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{

    public $parentTitle ='Larvel Title';

    public $myChildren = ['ahmed' ,'khaled', 'azoz'];
    public function render()
    {
        return view('livewire.parent-component');
    }
}
