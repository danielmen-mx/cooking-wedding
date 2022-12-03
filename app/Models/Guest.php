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

    private function checkExistsInGuestOnList($guest)
    {

    }
}
