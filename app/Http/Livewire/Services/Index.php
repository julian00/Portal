<?php

namespace App\Http\Livewire\Services;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Service;

class Index extends Component
{
    public $service, $identifier;

    public $open_edit = false;

    protected $listener = ['render' => 'render'];

    protected $rules = [
        'service' => 'required'
    ];

    public function edit(Service $request)
    {
        $this->identifier = $request->id;
        $this->service = $request->service;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        
        DB::table('services')
            ->where('id' ,$this->identifier)
            ->update(['service'=>$this->service
        ]);

        $this->reset(['open_edit']);

        $this->emitTo('services.index','render');
    }

    public function destroy(Service $service)
    {
        $service->delete();
    }

    public function render()
    {
        $services = Service::all();
        return view('livewire.services.index',compact('services'));
    }
}
