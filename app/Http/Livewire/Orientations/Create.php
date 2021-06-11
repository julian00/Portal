<?php

namespace App\Http\Livewire\Orientations;

use App\Models\Orientation;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $orientation;

    //validaciones
    protected $rules = [
        'orientation' => 'required'
    ];

    public function save()
    {
        $this -> validate();
        Orientation::create([
            'orientation' => $this->orientation
        ]);

        //limpio el formulario y lo cierro
        $this->reset(['open','orientation']);

        $this->emitTo('orientations','render');
    }
    public function render()
    {
        return view('livewire.orientations.create');
    }
}
