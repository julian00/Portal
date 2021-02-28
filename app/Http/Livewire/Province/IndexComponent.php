<?php

namespace App\Http\Livewire\Province;

use Livewire\Component;

class IndexComponent extends Component
{
    public $name='hola';
    public $num=0;

    public function render()
    {
        return view('livewire.province.index-component');
    }
    


    public function incrementar()
    {
        $this->num++;
    }
}
