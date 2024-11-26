<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function siteplan()
{
    return $this->hasMany(Siteplan::class, 'id_project');
}

public static function boot()
    {
        parent::boot();
        self::deleting(function ($project) {
            //mengecek apakah penulis masih punya wisata
            if ($project->siteplan->count() > 0) {
                // Flash::success('Data Tidak Bisa Di Hapus Karena Memiliki Transaksi');
                toastr()->error('Data Tidak Bisa Di Hapus Karena Memiliki Siteplan.');
                return false;
            }
        });
    }
}
