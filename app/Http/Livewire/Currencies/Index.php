<?php

namespace App\Http\Livewire\Currencies;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Currency;

class Index extends Component
{
    public $currency, $symbol, $identifier;

    public $open_edit =false;

    protected $rules = [
        'currency' => 'required',
        'symbol' => 'required|max:3'
    ];

    public function edit(Currency $request)
    {
        $this->identifier = $request->id;
        $this->currency = $request->currency;
        $this->symbol = $request->symbol;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();

        DB::table('currencies')
            ->where('id', $this->identifier)
            ->update(['currency'=>$this-> currency,
            'symbol' => $this->symbol
        ]);

        //$this->object->save();
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
