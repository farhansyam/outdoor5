<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryChart extends Model
{
    use HasFactory;

    protected $table = 'temporary_chart'; // Nama tabel
    public $timestamps = false;
    protected $fillable = [
        'id_user',
        'id_barang',
        'jumlah',
        'status',
        'kode_unik',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
