<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::orderBy('created_at','desc')->get();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_project' => 'required',
            'lokasi' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $project = new Project();
        $project->nama_project = $request->nama_project;
        $project->lokasi = $request->lokasi;
        $project->lat = $request->lat;
        $project->long = $request->long;
        $project->save();

        return redirect()->route('project.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_project' => 'required',
            'lokasi' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
        ];

        $validatedData = $request->validate($rules, $message);

        $project = Project::findOrFail($id);
        $project->nama_project = $request->nama_project;
        $project->lokasi = $request->lokasi;
        $project->lat = $request->lat;
        $project->long = $request->long;
        $project->save();

        return redirect()->route('project.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if (!Project::destroy($id)) {
            return redirect()->back();
        } else {
            $project->delete();
            session()->put('success', 'Data Berhasil Di Hapus');
            return redirect()->back();
        }
    }
}
