<?php

namespace App\Http\Livewire\Currencies;

use Livewire\Component;
use App\Models\Currency;

class Index extends Component
{
    public $currency, $symbol;

    public $open_edit =false;

    protected $rules = [
        'currencies.currency' => 'required',
        'currencies.symbol' => 'requiered|max:3'
    ];

    public function edit(Currency $obj)
    {
        $this->currency = $obj->currency;
        $this->symbol = $obj->symbol;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();
        $this->currency->save();
        $this->symbol->save();
        $this->reset(['open_edit']);

        $this->emitTo('currencies.index','render');
    }

    protected $listeners = ['render' => 'render'];

    public function destroy(Currency $currency)
    {
        $currency->delete();
    }

    public function render()
    {
        $currencies = Currency::all();
        return view('livewire.currencies.index',compact('currencies'));
    }
}
