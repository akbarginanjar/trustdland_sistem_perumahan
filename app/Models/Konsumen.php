<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function bangunan()
    {
        return $this->hasMany(Bangunan::class, 'id_konsumen'); // Relasi hasMany
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($konsumen) {
            //mengecek apakah penulis masih punya wisata
            if ($konsumen->bangunan->count() > 0) {
                // Flash::success('Data Tidak Bisa Di Hapus Karena Memiliki Transaksi');
                toastr()->error('Data Tidak Bisa Di Hapus Karena Memiliki Bangunan.');
                return false;
            }
        });
    }
}
