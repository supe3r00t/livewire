<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FilesComponent extends Component
{
    use WithFileUploads;
    public $photo ;


    public function rules(){

        return [
            'photo'=>'required|image',
            ];
    }
    public function submit(){

        $this->validate();
//        foreach ($this->photos as $photo)
{
        $this->photo->storeAs('local','Heloo.jpg');
    }
        }
    public function render()
    {
        return view('livewire.files-component');
    }
}
