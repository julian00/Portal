<?php

namespace App\Http\Controllers;

use App\Models\OwnershipTypes;
use Illuminate\Http\Request;

class OwnershipTypeController extends Controller
{
    public function index()
    {
        $ownershipTypes = OwnershipTypes::paginate();
        return view('ownershipType.index', compact('ownershipTypes'));
    }
}
