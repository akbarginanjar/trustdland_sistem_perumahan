<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

    public function buktiBayar()
    {
        if ($this->bukti_bayar && file_exists(public_path('images/buktiBayar/' . $this->bukti_bayar))) {
            return asset('images/buktiBayar/' . $this->bukti_bayar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteBuktiBayar()
    {
        if ($this->bukti_bayar && file_exists(public_path('images/buktiBayar/' . $this->bukti_bayar))) {
            return unlink(public_path('images/buktiBayar/' . $this->bukti_bayar));
        }

    }
}
