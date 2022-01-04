<?php

namespace App\Http\Livewire;

use App\Models\Province;
use Livewire\Component;

class SelectProvince extends Component
{
    public $provinces;
    public $province_id=0;

    public function mount()
    {
        $this->provinces = Province::all();
    }

    //se ejecuta cada vez que se modifica el valor de $province_id
    public function updatedProvinceId($value)
    {
        $this->province_id = $this->provinces->find($value)->id;
    }

    public function render()
    {
        return view('livewire.select-province');
    }
}
