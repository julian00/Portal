<?php

namespace App\Http\Livewire\OwnershipType;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\OwnershipTypes;

class Index extends Component
{
    public $type;
    public $open_edit = false;

    protected $rules = [
        'type' => 'required'
    ];
    protected $listeners = ['render' => 'render'];

    public function edit(OwnershipTypes $request)
    {
        $this->type = $request->type;
        $this->open_edit=true;
    }

    public function update()
    {
        $this->validate();
        $this->type->save();

        $this->reset(['open_edit']);
        $this->emitTo('ownershipType.index','render');
    }

    public function destroy(OwnershipTypes $type)
    {
        $type->delete();
    }

    public function render()
    {
        $ownershipTypes= OwnershipTypes::all();
        return view('livewire.ownership-type.index');
    }
}
