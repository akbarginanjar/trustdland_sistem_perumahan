<?php

namespace App\Http\Controllers;

use App\Models\ProgresBangunan;
use App\Models\Bangunan;
use Illuminate\Http\Request;

class ProgresBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Bangunan $bangunan)
    {
        $progresBangunan = ProgresBangunan::where('id_bangunan', $bangunan->id)->orderBy('created_at', 'desc')->get();
        return view('admin.progres-bangunan.index', compact('progresBangunan', 'bangunan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Bangunan $bangunan)
    {
        return view('admin.progres-bangunan.create', compact('bangunan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Bangunan $bangunan)
    {
        $rules = [
            'foto' => 'required|file|mimes:jpeg,jpg,png,webp|max:2048',
            'video' => 'nullable',
            'tgl_laporan' => 'required',
            'waktu_laporan' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'required' => 'Data wajib diisi!',
            'mimes' => 'Format file tidak valid.',
            'max' => 'Ukuran file maksimum adalah 2 MB.',
        ];

        $validatedData = $request->validate($rules, $messages);

        $progresBangunan = new ProgresBangunan();
        $progresBangunan->id_bangunan = $bangunan->id;

        // Simpan foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $progresBangunan->foto = $name;
        }
        $progresBangunan->video = $request->video;
        $progresBangunan->tgl_laporan = $request->tgl_laporan;
        $progresBangunan->waktu_laporan = $request->waktu_laporan;
        $progresBangunan->keterangan = $request->keterangan;
        $progresBangunan->save();

        return redirect('/admin/bangunan/' . $bangunan->id . '/progres-bangunan')
            ->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(ProgresBangunan $progresBangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idBangunan, $idProgresBangunan)
    {
        $progresBangunan = ProgresBangunan::findOrFail($idProgresBangunan);
        return view('admin.progres-bangunan.edit', compact('progresBangunan', 'idBangunan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idBangunan, $idProgresBangunan)
    {
        $rules = [
            'tgl_laporan' => 'required',
            'waktu_laporan' => 'required',
            'keterangan' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $progresBangunan = ProgresBangunan::findOrFail($idProgresBangunan);
        // $progresBangunan->id_bangunan = $bangunan->id;
        if ($request->hasFile('foto')) {
            $progresBangunan->deleteFoto();
            $image = $request->foto;
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/foto/', $name);
            $progresBangunan->foto = $name;
        }
        $progresBangunan->video = $request->video;
        $progresBangunan->tgl_laporan = $request->tgl_laporan;
        $progresBangunan->waktu_laporan = $request->waktu_laporan;
        $progresBangunan->keterangan = $request->keterangan;
        $progresBangunan->save();

        return redirect('/admin/bangunan/'.$idBangunan.'/progres-bangunan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idBangunan, $idProgresBangunan)
    {
        $progresBangunan = ProgresBangunan::findOrFail($idProgresBangunan);
        $progresBangunan->delete();
        return redirect('/admin/bangunan/'.$idBangunan.'/progres-bangunan')->with('success', 'Data berhasil dihapus');
    }
}
