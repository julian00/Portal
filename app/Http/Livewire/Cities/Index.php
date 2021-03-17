<?php

namespace App\Http\Livewire\Cities;

use Livewire\Component;
use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $msj='hello';
    public function render()
    {
        $provinces = Province::all(); 
        $cities = City::all();
        //return view('livewire.cities.index');
        return view('livewire.cities.index',compact('cities','provinces'));// ['cities'=>City::all()]);
    }
}
