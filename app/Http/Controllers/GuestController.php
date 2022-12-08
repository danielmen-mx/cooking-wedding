<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guest\Store;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\GuestOnList;
use App\Models\Ticket;
use Exception;
use Illuminate\Support\Facades\View;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::get();
        $guestsOnList = GuestOnList::whereIn('id', $guests->pluck('guest_on_list_id')->get())->get();
        $tickets = Ticket::whereIn('id', $guestsOnList->pluck('ticket_id')->get())->get();
        $guestsResource = $guests->each(function ($guest, $key) use ($tickets) {
            $collect = collect();
            $collect->name = $guest->name;
            $collect->assistance = $guest->assistance;
            $actualTicket = $tickets->where('guest_on_list_id', $guest->guest_on_list_id)->first();
            $collect->passes = $actualTicket->passes;

            return $collect;
        });

        return $guestsResource;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        try {
            $request->checkNameComplete($request->name);
            $guestInExistence = $request->checkIfGuestExists($request->name);
            $data = $request->validated();
            $data = $request->formatRequest($data, $request);

            if ($guestInExistence) {
                $guestInExistence->update(["assistance" => $data['assistance']]);
                $ticket = $this->getTicket($guestInExistence->guest_on_list->ticket_id);
                $passes = $ticket->passes;

                if ($guestInExistence->assistance == false) {
                    $passes = '0 porque no quires ir :P';
                    return View::make('countdown', ['passes' => $passes]);
                }
                
                return View::make('countdown', ['passes' => $passes]);
            }

            $guest = Guest::create($data);
            $guestInList = $guest->checkExistsInGuestOnList($guest);

            if ($guestInList == false) {
                $name = $request->name;
                return view('not_found', ['name' => $name]);
            }

            $ticket = $this->getTicket($guestInList->ticket_id);
            $passes = $ticket->passes;

            return View::make('countdown', ['passes' => $passes]);

        } catch (Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code] $message";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }

    private function getTicket($ticketId)
    {
        return Ticket::where('id', $ticketId)->first();
    }
}
