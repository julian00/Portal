<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $service;

    protected $rules =['service' => 'required'];

    public function save()
    {
        $this->validate();
        Service::create([
            'service'=>$this->service
        ]);

        $this->reset(['open','service']);
        $this->emitTo('services.index','render');
    }

    public function render()
    {
        return view('livewire.services.create');
    }
}
