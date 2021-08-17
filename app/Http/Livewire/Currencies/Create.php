<?php

namespace App\Http\Livewire\Currencies;

use App\Models\Currency;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $currency, $symbol;

    //validaciones
    protected $rules =[
        'currency' => 'required',
        'symbol' => 'required | max:3'
    ];

    public function save()
    {
        $this->validate();
        Currency::create([
            'currency'=>$this-> currency,
            'symbol' => $this->symbol
        ]);

        $this->reset(['open','currency','symbol']);

        $this->emitTo('currencies.index','render');
    }
    
    public function render()
    {
        return view('livewire.currencies.create');
    }
}
