<?php

namespace App\Http\Livewire\Cities;

use Livewire\Component;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $msj='hello';
    public $cities;
    public function render()
    {
        return view('livewire.cities.index');
        //return view('livewire.cities.index', ['cities'=>City::all()]);
    }
}
