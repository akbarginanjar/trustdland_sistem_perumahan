<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = true;

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return asset('images/mobil/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return unlink(public_path('images/mobil/' . $this->gambar));
        }

    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_mobil');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($mobil) {
            //mengecek apakah penulis masih punya wisata
            if ($mobil->transaksi->count() > 0) {
                session()->put('warning', 'Data Tidak Bisa Di Hapus Karena Memiliki Artikel');
                return false;
            }
        });
    }
}