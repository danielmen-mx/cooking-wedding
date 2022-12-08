<?php

use App\Http\Controllers\GuestController;
use App\Models\Guest;
use App\Models\GuestOnList;
use App\Models\Ticket;
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

Route::get('/bodorrio', function () { return view('wedding_template'); });
Route::get('/confirmed', function () {
    $guests = Guest::get();
    $guestsOnList = GuestOnList::whereIn('id', $guests->pluck('guest_on_list_id'))->get();
    $tickets = Ticket::whereIn('id', $guestsOnList->pluck('ticket_id'))->get();
    $collection = collect();
    foreach ($guests as $guest) {
        $collect = collect();
        $collect->name = $guest->name;
        $collect->assistance = $guest->assistance == 1 ? 'Si' : 'No';
        $actualTicket = $tickets->where('guest_on_list_id', $guest->guest_on_list_id)->first();
        $collect->passes = $actualTicket->passes;
    
        $collection->push($collect);
    }

    return view('table', ['guests' => $collection]);
});

Route::resource('guests', GuestController::class)->except('show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
