<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_date',
        'start_time',
        'end_time',
        'reservation_status',
        'cancellation_reason',
        'user_id',
        'consultor_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function consultor()
    {
        return $this->belongsTo(User::class, 'consultor_id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }
}
