<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestPropertis extends Component
{


    // تعريف متغير واعطاه قيمة
//    public $name = 'ahmed';
    public $names = ['laravel','php'];
    public $name;


//    public function getFullNameProperty(){
//
//
//        return implode('',$this->names);
//    }

    //تعريف متغير
//    public $name2;
//
//    public $name3;


    // mount تعطي رن لمرة واحدة فقط
//     public function mount(){
//
//         // اعطاء قيمة للمتغير واحد
//        $this->name2 = "alammar";
//
//        //اعطاء مصفوفة تعريف للمتغيرات مجموعة
//        $this->fill([
//            'name3'=>'live wire'
//        ]);

//        $this->reset(['name3']);




//         //خروج متغير واحد
//        $this->resetExcept(['name3']);
//     }
    public function render()
    {
        return view('livewire.test-propertis');
    }
//    public function search(){
//
//
//    }
}
