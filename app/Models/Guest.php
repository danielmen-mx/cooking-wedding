<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    const ANSWER_TRUE = 'Asistimos';

    protected $fillable = [
        'name',
        'assistance'
    ];

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }

    public function guest_on_list()
    {
        return $this->belongsTo(GuestOnList::class);
    }

    private function createOrUpdate($request, $assistance, $guest)
    {
        $nameComplete = $this->convertName($request->name);

        if ($guest) {
            $guest->update([
                'assistance' => $assistance
            ]);
        } else {
            $guest = Guest::create([
                'name' => $nameComplete,
                'assistance' => $assistance
            ]);
        }
    }

    public function checkExistsInGuestOnList($guest)
    {
        $guestName = explode(' ', $guest->name);
        $guestOnListArr = GuestOnList::get();
        $tickets = Ticket::get();

        foreach ($guestOnListArr as $realGuest) {
            if ($realGuest->name == $guestName[0]) {

                if (count($guestName) >= 4) {
                    if ($realGuest->last_name == $guestName[1]) {
                        
                        if ($realGuest->surname == $guestName[2]) {
                            $guest->guest_on_list_id = $realGuest->id;
                            $guest->save();
        
                            foreach ($tickets as $ticket) {
                                if ($realGuest->ticket_id == $ticket->id) {
                                    $ticket->guest_on_list_id = $realGuest->id;
                                    $ticket->save();
                                }
                            }
        
                            return $realGuest;
                        }
                    }
                }

                if (count($guestName) == 3) {

                    if ($realGuest->surname == $guestName[1]) {

                        if ($realGuest->second_surname == $guestName[2]) {
                            $guest->guest_on_list_id = $realGuest->id;
                            $guest->save();
    
                            foreach ($tickets as $ticket) {
                                if ($realGuest->ticket_id == $ticket->id) {
                                    $ticket->guest_on_list_id = $realGuest->id;
                                    $ticket->save();
                                }
                            }
    
                            return $realGuest;
                        }
                    }

                }
            }
        }

        $guest->delete();

        return false;
    }
}
