<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class BookingResi extends Model
{
    protected $table = 'booking_resi';

    protected $fillable = [
        'id_user',
        'resi',
        'kode_unik',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
}
}
