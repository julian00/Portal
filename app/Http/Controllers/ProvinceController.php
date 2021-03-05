<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::paginate();
        return view('provinces.index',compact('provinces'));
    }

    public function create()
    {
        return view('provinces.create');
    }

    public function edit(Province $province)
    {
        return view('provinces.edit', compact('province'));
    }

    public function store()//StoreProvince $request)
    {
        $province=province::create(request()->all());
        return redirect() -> route('provinces.index');
    }
    public function update(Request $request, Province $province)
    {
        //valida el formulario
        /*$request-validate([
            'province'=>'required'
        ]);*/

        $province->update($request->all());
        return redirect() ->route('provinces.index');
    }

    public function destroy(Province $province)
    {
        $province->delete();
        return redirect()->route('provinces.index');
    }
}
