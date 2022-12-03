<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/wedding', function () { return view('wedding_template'); });
Route::get('/countdown', function () { return view('countdown'); });

// Route::get('/wedding-vue', function () { return view('wedding-vue/wedding_reactive'); });
// Route::get('/wedding-i', function () { return view('wedding-interactive/wedding'); });

Route::resource('guests', GuestController::class)->except('show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/wedding', function () {
//     return view('wedding_template');
// })->middleware(['auth'])->name('wedding');

require __DIR__.'/auth.php';
