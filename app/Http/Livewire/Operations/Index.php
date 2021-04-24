<?php

namespace App\Http\Livewire\Operations;

use Livewire\Component;
use App\Models\Operation;

class Index extends Component
{
    public $operation;

    //escuchador del evento ['eventoEmitido' => 'metodoAEjecutar']
    protected $listeners = ['render' => 'render'];


    public function render()
    {
        $operations = Operation::all();
        return view('livewire.operations.index',compact('operations'));
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();
    }
}
