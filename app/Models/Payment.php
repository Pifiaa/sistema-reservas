<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'total_amount',
        'payment_status',
        'reservation_id',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reservations()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetail::class);
    }
}
