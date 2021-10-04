<?php

namespace App\Http\Livewire\OwnershipType;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\OwnershipTypes;

class Index extends Component
{
    public $type , $identifier;
    public $open_edit = false;

    protected $rules = [
        'type' => 'required'
    ];
    protected $listeners = ['render' => 'render'];

    public function edit(OwnershipTypes $request)
    {
        $this->identifier = $request->id;
        $this->type = $request->type;
        $this->open_edit=true;
    }

    public function update()
    {
        $this->validate();

        DB::table('ownership_types')
            ->where('id', $this->identifier)
            ->update(['type'=>$this-> type
        ]);
        //$this->save->type();

        $this->reset(['open_edit']);
        //ownershiptypes
        $this->emitTo('ownershipType.index','render');
    }

    public function destroy(OwnershipTypes $type)
    {
        $type->delete();
    }

    public function render()
    {
        $ownershipTypes= OwnershipTypes::all();
        return view('livewire.ownership-type.index',compact('ownershipTypes'));
    }
}
