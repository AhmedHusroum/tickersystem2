<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EventController;
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

Route::resource('events', EventController::class)->middleware(['auth']);
Route::resource('', EventController::class)->middleware(['auth']);


Route::get('/publicevents', [EventController::class, 'publicindex'])->name('publicevents.index');
Route::get('publicevents/{event}/checkout', [EventController::class, 'checkout'])->name('publicevents.Checkout');
Route::post('publicevents/{event}/checkout', [EventController::class, 'storecheckout'])->name('publicevents.storeCheckout');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
