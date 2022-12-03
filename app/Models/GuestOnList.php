<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestOnList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'surname',
        'second_surname'
    ];

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }
}
