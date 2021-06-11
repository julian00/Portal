<?php

namespace App\Http\Controllers;

use App\Models\Orientation;
use Illuminate\Http\Request;

class OrientationController extends Controller
{
    public function index()
    {
        $orientations = Orientation::paginate();
        return view('orientations',compact('orientations'));
    }
}
