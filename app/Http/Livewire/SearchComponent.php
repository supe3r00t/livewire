<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class SearchComponent extends Component
{
    use withPagination;
     public $search ;


     //عند البحث يتغير الرابط وعند الحذف يرجع كما ككان

    protected $paginationTheme = 'bootstrap';

    protected $queryString = ['search' =>['except'=>'','as'=>'s'],];

    //تغير كلمه search الى ""S""

    public function updatingSearch(){

        $this->resetPage();
    }

    //استرجاع للصفحة الاول عند بحث عن مقالة
    public function render()
    {




        return view('livewire.search-component',['posts'=>Post::where('name','like','%'.
        $this->search . '%')->paginate(5),]);
    }

    //->paginate(5) اظهار عدد خمس مقالات بصفحة
//    مع اضافة فوق    use withPagination;
}
