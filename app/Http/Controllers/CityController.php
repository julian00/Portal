<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate();
        return view('cities.index',compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function edit(City $city)
    {
        return view('cities.edit',compact('city'));
    }

    public function store()
    {
        $city=City::create(request()->all());
        return Redirect() -> route('cities.index');
    }

    public function update(Request $request, City $city)
    {
        $city ->update($request->all());
        return Redirect() ->route('cities.index');
    }

    public function destroy(City $city)
    {
        $city ->delete();
        return Redirect('cities.index');
    }
}
