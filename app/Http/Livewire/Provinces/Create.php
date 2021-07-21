<?php

namespace App\Http\Livewire\Provinces;

use Livewire\Component;
use App\Models\Province;

class Create extends Component
{
    public $open = false;
    public $province;

    protected $rules =[
        'province' => 'required'
    ];

    public function save()
    {
        $this -> validate();
        Province::create([
            'province' => $this->province
        ]);

        $this->reset(['open','province']);

        $this->emitTo('orientation','render');
    }

    public function render()
    {
        return view('livewire.provinces.create');
    }
}
