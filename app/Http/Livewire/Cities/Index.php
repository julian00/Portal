<?php

namespace App\Http\Livewire\Cities;

use Livewire\Component;
use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $city, $id_province;
    public $open_edit = false;

    protected $rules =[
        'cities.city' => 'required',
        'id_province' => 'required'
    ];

    public function edit(City $city)
    {
        $this->city = $city;
        $this->id_province = $city->id_province;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->city->save();
        $this->reset(['open_edit']);

        $this->emitTo('cities','render');
    }

    protected $listeners = ['render' => 'render'];

    public function destroy(City $city)
    {
        $city->delete();
    }

    public function render()
    {
        $provinces = Province::all(); 
        $cities = City::all();
        //return view('livewire.cities.index');
        return view('livewire.cities.index',compact('cities','provinces'));// ['cities'=>City::all()]);
    }
}
