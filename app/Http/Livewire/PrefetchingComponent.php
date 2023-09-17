<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PrefetchingComponent extends Component
{
    public $email;

    public function fetch(){


        $data = Http::get('https://api.github.com/users/engsahaly');
        dd($data)['name'];
    }
    public function render()
    {
        return view('livewire.prefetching-component');
    }
}
