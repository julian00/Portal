<?php

namespace App\Http\Livewire\Orientations;

use App\Models\Orientation;
use Livewire\Component;

class Index extends Component
{
    public $orientation;
    public $open_edit = false;

    protected $rules =[
        'orientation.orientation' =>'required'
    ];

    public function edit(Orientation $orientation)
    {
        $this->orientation = $orientation;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->orientation->save();
        $this->reset(['open_edit']);

        $this->emitTo('orientations.index','render');
    }

    protected $listeners = ['render' => 'render'];

    public function destroy(Orientation $orientation)
    {
        $orientation->delete();
    }

    public function render()
    {
        $orientations = Orientation::all();
        return view('livewire.orientations.index',compact('orientations'));
    }
}
