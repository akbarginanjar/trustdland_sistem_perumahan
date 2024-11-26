<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard(){
        $totalTransaksi = Transaksi::whereYear('created_at', '=', date('Y'))->count();
    
        $januari = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 1)->count() / $totalTransaksi) * 100 : 0;
        $februari = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 2)->count() / $totalTransaksi) * 100 : 0;
        $maret = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 3)->count() / $totalTransaksi) * 100 : 0;
        $april = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 4)->count() / $totalTransaksi) * 100 : 0;
        $mei = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 5)->count() / $totalTransaksi) * 100 : 0;
        $juni = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 6)->count() / $totalTransaksi) * 100 : 0;
        $juli = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 7)->count() / $totalTransaksi) * 100 : 0;
        $agustus = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 8)->count() / $totalTransaksi) * 100 : 0;
        $september = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 9)->count() / $totalTransaksi) * 100 : 0;
        $oktober = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 10)->count() / $totalTransaksi) * 100 : 0;
        $november = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 11)->count() / $totalTransaksi) * 100 : 0;
        $desember = ($totalTransaksi > 0) ? (Transaksi::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', 12)->count() / $totalTransaksi) * 100 : 0;
    
        $transaksi = Transaksi::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.dashboard', compact(
            'januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember', 'transaksi'
        ));
    }
    
}
