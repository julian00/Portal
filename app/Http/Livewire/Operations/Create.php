<?php

namespace App\Http\Livewire\Operations;

use Livewire\Component;
use App\Models\Operation;

class Create extends Component
{
    public $open = false;
    public $operation;

    //validaciones
    protected $rules =[
        'operation' => 'required'
    ];

    //guarda los datos
    public function save()
    {
        $this -> validate();
        Operation::create([
            'operation' => $this->operation
        ]);
        
        //limpio el formulario y lo cierro
        $this->reset(['open','operation']);

        //emitir un evento
        $this->emitTo('operations.index','render');
    }
    
    public function render()
    {
        return view('livewire.operations.create');
    }
}
