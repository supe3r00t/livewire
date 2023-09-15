<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{
    public $email;
    public $password;
    public $remember;



//    protected $rules = [
//        'email' => 'required|email',
//        'password'=>'required|min:5',
//        'remember'=>'nullable'
//    ];

    public function rules(){

            return [   'email' => 'required|email',
        'password'=>'required|min:5',
        'remember'=>'nullable'];

    }

    public function messages(){

        return [   'email.required' => 'Email Error !',
            ];

    }
//    public function updatedEmail(){
//
//
//        $this->validateOnly('email');
//
//    }

    public function attributes(){

        return [   'password' => 'My Password!',
        ];

    }

    public function submit(){


    $this->validate($this->rules(),$this->messages(),$this->attributes());
}
    public function render()
    {
        return view('livewire.validation-component');
    }
}
