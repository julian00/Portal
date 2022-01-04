<?php

namespace App\Http\Livewire\Cities;

use App\Models\City;
use App\Models\Province;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $city;
    public $id_province=0;
    public $provinces;

    protected $rules =[
        'city' => 'required',
        'id_province' => 'required'
    ];

    public function save()
    {
        $this -> validate();
        City::create([
            'city' => $this->city,
            'id_province' => $this->id_province
        ]);

        $this->reset(['open','city','id_province']);

        $this->emitTo('cities','id_provinces','render');
    }

    public function render()
    { 
        return view('livewire.cities.create');
        
    }
}
