<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;

    public function konsumen()
    {
        return $this->belongsTo(Konsumen::class, 'id_konsumen');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project');
    }

    public function siteplan()
    {
        return $this->belongsTo(Siteplan::class, 'id_siteplan');
    }

    public function progresBangunan()
    {
        return $this->hasMany(ProgresBangunan::class, 'id_bangunan'); // Relasi hasMany
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($bangunan) {
            //mengecek apakah penulis masih punya wisata
            if ($bangunan->progresBangunan->count() > 0) {
                // Flash::success('Data Tidak Bisa Di Hapus Karena Memiliki Transaksi');
                toastr()->error('Data Tidak Bisa Di Hapus Karena Memiliki Progres Bangunan.');
                return false;
            }
        });
    }
}
