<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Konsumen;
use App\Models\Siteplan;
use App\Models\Project;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bangunan = Bangunan::orderBy('created_at','desc')->get();
        return view('admin.bangunan.index', compact('bangunan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $konsumen = Konsumen::orderBy('created_at', 'desc')->get();
        $project = Project::orderBy('created_at', 'desc')->get();
        return view('admin.bangunan.create', compact('konsumen', 'project'));
    }

    public function pilih_siteplan($projectId)
{
    $siteplan = Siteplan::where('id_project', $projectId)->get();
    return response()->json($siteplan);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'id_project' => 'required',
            'id_siteplan' => 'required',
            'id_konsumen' => 'required',
            'tgl_pembelian' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $bangunan = new Bangunan();
        $bangunan->id_project = $request->id_project;
        $bangunan->id_siteplan = $request->id_siteplan;
        $bangunan->id_konsumen = $request->id_konsumen;
        $bangunan->tgl_pembelian = $request->tgl_pembelian;
        $bangunan->save();

        return redirect()->route('bangunan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bangunan $bangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bangunan = Bangunan::findOrFail($id);
        $konsumen = Konsumen::orderBy('created_at', 'desc')->get();
        $project = Project::orderBy('created_at', 'desc')->get();
        $siteplan = Siteplan::orderBy('created_at', 'desc')->get();
        return view('admin.bangunan.edit', compact('bangunan', 'konsumen', 'siteplan', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_project' => 'required',
            'id_siteplan' => 'required',
            'id_konsumen' => 'required',
            'tgl_pembelian' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $bangunan = Bangunan::findOrFail($id);
        $bangunan->id_project = $request->id_project;
        $bangunan->id_siteplan = $request->id_siteplan;
        $bangunan->id_konsumen = $request->id_konsumen;
        $bangunan->tgl_pembelian = $request->tgl_pembelian;
        $bangunan->save();

        return redirect()->route('bangunan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bangunan = Bangunan::findOrFail($id);
        if (!Bangunan::destroy($id)) {
            return redirect()->back();
        } else {
            $bangunan->delete();
            session()->put('success', 'Data Berhasil Di Hapus');
            return redirect()->back();
        }
    }
}
