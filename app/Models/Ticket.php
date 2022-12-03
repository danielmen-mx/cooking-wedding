<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'passes'
    ];

    public function guest_on_list()
    {
        return $this->belongsTo(GuestOnList::class);
    }
}
