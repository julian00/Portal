<?php

namespace App\Http\Livewire\Operations;

use Livewire\Component;
use App\Models\Operation;

class Edit extends Component
{
    public $open = false;
    public $operation;

    protected $rules = [
        'operation.operation' => 'required'
    ];

    public function mount(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function save()
    {
        $this->validate();
        $this->operation->save();

        $this->reset(['open']);
        $this->emitTo('operations.index','render');
    }

    public function render()
    {
        return view('livewire.operations.edit');
    }
}
