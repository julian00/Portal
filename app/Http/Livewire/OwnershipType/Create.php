<?php

namespace App\Http\Livewire\OwnershipType;

use Livewire\Component;
use App\Models\OwnershipTypes;

class Create extends Component
{
    public $open =false;
    public $type;

    //validaciones
    protected $rules = [
        'type' => 'required'
    ];

    public function save()
    {
        $this->validate();
        OwnershipTypes::create([
            'type' => $this->type
        ]);

        $this->reset(['open','type']);
        //ownershiptypes
        $this->emitTo('ownershipTypes.index','render');
    }

    public function render()
    {
        return view('livewire.ownership-type.create');
    }
}
