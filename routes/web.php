<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CurrencyController;
use App\Http\Livewire\Province\IndexComponent;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\OrientationController;
use App\Http\Controllers\OwnershipTypeController;
use App\Http\Controllers\ServiceController;
use App\Models\Currency;
use App\Models\Operation;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/provinces', ProvinceController::class);

Route::resource('/cities', CityController::class);
Route::resource('/currencies', CurrencyController::class);
Route::resource('/operations', OperationController::class);
Route::resource('/orientations', OrientationController::class);
Route::resource('/ownershiptypes',OwnershipTypeController::class);
Route::resource('/services',ServiceController::class);

//Route::get('/provinces', IndexComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//envio de mails
Route::get('contactUs', [ContactUsController::class, 'index'])->name('contactUs.index');
Route::post('contactUs',[ContactUsController::class, 'store'])->name('contactUs.store');

