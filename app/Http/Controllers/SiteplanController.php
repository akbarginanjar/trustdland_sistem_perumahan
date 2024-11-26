<?php

namespace App\Http\Controllers;

use App\Models\Siteplan;
use App\Models\Project;
use Illuminate\Http\Request;

class SiteplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
        $siteplan = Siteplan::where('id_project', $project->id)->orderBy('created_at', 'desc')->get();
        return view('admin.siteplan.index', compact('siteplan', 'project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        return view('admin.siteplan.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        $rules = [
            'kode' => 'required',
            'luas' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $siteplan = new Siteplan();
        $siteplan->id_project = $project->id;
        $siteplan->kode = $request->kode;
        $siteplan->luas = $request->luas;
        $siteplan->save();

        return redirect('/admin/project/'.$project->id.'/siteplan')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siteplan $siteplan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idProject, $idSiteplan)
    {
        $siteplan = Siteplan::findOrFail($idSiteplan);
        return view('admin.siteplan.edit', compact('siteplan', 'idProject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idProject, $idSiteplan)
    {
        $rules = [
            'kode' => 'required',
            'luas' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $siteplan = Siteplan::findOrFail($idSiteplan);
        $siteplan->id_project = $idProject;
        $siteplan->kode = $request->kode;
        $siteplan->luas = $request->luas;
        $siteplan->save();

        return redirect('/admin/project/'.$idProject.'/siteplan')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idProject, $idSiteplan)
    {
        $siteplan = Siteplan::findOrFail($idSiteplan);
        $siteplan->delete();
        return redirect('/admin/project/'.$idProject.'/siteplan')->with('success', 'Data berhasil dihapus');
    }
}
