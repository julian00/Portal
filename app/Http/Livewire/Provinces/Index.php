<?php

namespace App\Http\Livewire\Provinces;

use Livewire\Component;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $province;
    public $open_edit = false;

    protected $rules =[
        'province.province' => 'required'
    ];

    public function edit(Province $province)
    {
        $this->province = $province;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->province->save();
        $this->reset(['open_edit']);

        $this->emitTo('provinces','render');
    }

    protected $listener = ['render' => 'render'];
    
    public function destroy(Province $province)
    {
        $province->delete();
    }

    public function render()
    {
        $provinces = Province::all();
        return view('livewire.provinces.index',compact('provinces'));
    }
}
