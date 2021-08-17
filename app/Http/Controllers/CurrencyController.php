<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
       $currencies = Currency::paginate();
       return view('currencies.index',compact('currencies')); 
    }
}
