<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Penyewa;
use App\Models\Transaksi;
use App\Models\ProgresBangunan;
use App\Models\Konsumen;
use App\Models\Bangunan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function dashboard() {
        $bangunan = Bangunan::where('id_konsumen', Auth::user()->konsumen->id)->get();
        $progresBangunan = ProgresBangunan::where('id_bangunan', 1)->orderBy('created_at', 'desc')->get();
        $konsumen = Konsumen::find(Auth::user()->konsumen->id);
        $konsumenBangunan = $konsumen->bangunan;
        return view('member.dashboard', compact('konsumen', 'konsumenBangunan'));
    }

    public function sewa(Request $request, Mobil $mobil){
        $penyewa = Auth::user()->penyewa;
        $lamaSewa = $request->lama_sewa;
        $totalBayar = $mobil->harga_sewa * $request->lama_sewa;
        return view('member.sewa', compact('penyewa', 'mobil', 'totalBayar', 'lamaSewa'));
    }
    
    public function prosesSewa(Request $request, Mobil $mobil){
        $idPenyewa = Penyewa::find(Auth::user()->id);
        $penyewaCek = Auth::user()->penyewa;
        if($penyewaCek == '[]') {
            $penyewa = new Penyewa();
            $penyewa->id_user = Auth::user()->id;
            $penyewa->no_telepon = $request->no_telepon;
            $penyewa->alamat = $request->alamat;
            $penyewa->save();
            $transaksi = new Transaksi();
            $transaksi->id_mobil = $mobil->id;
            $transaksi->id_penyewa = $penyewa->id;
            $transaksi->tgl_sewa = $request->tgl_sewa;
            $transaksi->tgl_pengembalian = $request->tgl_pengembalian;
            $transaksi->lama_sewa = $request->lama_sewa;
            $transaksi->status = 1;
            $transaksi->total_bayar = $request->total_bayar;
            if ($request->hasFile('bukti_bayar')) {
                $image = $request->file('bukti_bayar');
                $name = rand(1000, 9999) . $image->getClientOriginalName();
                $image->move('images/buktiBayar/', $name);
                $transaksi->bukti_bayar = $name;
            }
            $transaksi->save();
        } else {
            $transaksi = new Transaksi();
            $transaksi->id_mobil = $mobil->id;
            $transaksi->id_penyewa = Auth::user()->penyewa[0]->id;
            $transaksi->tgl_sewa = $request->tgl_sewa;
            $transaksi->tgl_pengembalian = $request->tgl_pengembalian;
            $transaksi->lama_sewa = $request->lama_sewa;
            $transaksi->total_bayar = $request->total_bayar;
            $transaksi->status = 1;
            if ($request->hasFile('bukti_bayar')) {
                $image = $request->file('bukti_bayar');
                $name = rand(1000, 9999) . $image->getClientOriginalName();
                $image->move('images/buktiBayar/', $name);
                $transaksi->bukti_bayar = $name;
            }
            $transaksi->save();
        }
        return redirect('/member/profil');
    }
    public function profil() {
        $penyewaCek = Auth::user()->penyewa;
        if($penyewaCek == '[]') {
            return view('member.form-penyewa');
        } else {
        $transaksi = Transaksi::where('id_penyewa', Auth::user()->penyewa[0]->id)->orderBy('created_at', 'desc')->get();
        $countTransaksi = Transaksi::where('id_penyewa', Auth::user()->penyewa[0]->id)->where('status', 2)->count();
        return view('member.profil', compact('transaksi', 'countTransaksi'));
        }
    }

    public function simpanPenyewa(Request $request){
        $penyewa = new Penyewa();
        $penyewa->id_user = Auth::user()->id;
        $penyewa->no_telepon = $request->no_telepon;
        $penyewa->alamat = $request->alamat;
        $penyewa->save();
        return redirect('/member/profil');
    }
}
