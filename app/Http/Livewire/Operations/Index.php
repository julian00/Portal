<?php

namespace App\Http\Livewire\Operations;

use Livewire\Component;
use App\Models\Operation;

class Index extends Component
{
    public $operation;

    public $open_edit = false;

    

    protected $rules = [
        'operation.operation' => 'required'
    ];

    public function edit(Operation $operation)
    {
        $this->operation = $operation;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->operation->save();
        $this->reset(['open_edit']);

        $this->emitTo('operations.index','render');
    }

    //escuchador del evento ['eventoEmitido' => 'metodoAEjecutar']
    protected $listeners = ['render' => 'render'];

    public function destroy(Operation $operation)
    {
        $operation->delete();
    }

    public function render()
    {
        $operations = Operation::all();
        return view('livewire.operations.index',compact('operations'));
    }

}
