<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;

class OperationController extends Controller
{
    public function index()
    {
        $operations = Operation::paginate();
        return view('operations.index',compact('operations'));
    }

    public function create()
    {
        return view('operations.create');
    }

    public function edit(Operation $operation)
    {
        return view('operations.edit', compact('operation'));
    }

    public function store()//StoreProvince $request)
    {
        $operation=Operation::create(request()->all());
        return Redirect() -> route('operations.index');
    }
    public function update(Request $request, Operation $operation)
    {
        //valida el formulario
        /*$request-validate([
            'province'=>'required'
        ]);*/

        $operation->update($request->all());
        return Redirect() ->route('operations.index');
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();
        return Redirect()->route('operations.index');
    }
}
