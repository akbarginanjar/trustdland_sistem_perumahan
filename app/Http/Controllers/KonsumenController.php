<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsumen = Konsumen::orderBy('created_at', 'desc')->get();
        return view('admin.konsumen.index', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'confirmed' => 'Konfirmasi password tidak sesuai!',
        ];

        if($request->password_confirmation != $request->password) {
            $validated = $request->validate($rules, $message);
            toastr()->error('Coba lagi, Password harus sesuai.');
            return redirect()->back();
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = 2;
            $user->password = Hash::make($request->password);
            $user->save();
    
            $konsumen = new Konsumen();
            $konsumen->id_user = $user->id;
            $konsumen->alamat = $request->alamat;
            $konsumen->no_telepon = $request->no_telepon;
            $konsumen->save();
        }


        return redirect()->route('konsumen.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $konsumen = Konsumen::findOrFail($id);
        return view('admin.konsumen.edit', compact('konsumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validation rules
    $rules = [
        'name' => 'required',
        'email' => 'required|email', // Ensuring the email is unique excluding the current user
        'no_telepon' => 'required',
        'alamat' => 'required',
        'old_password' => 'nullable|string|min:6', // Optional, for password update
        'password' => 'nullable|string|min:6|confirmed', // Only required if changing password
    ];

    $message = [
        'required' => 'Data wajib diisi!',
        'confirmed' => 'Konfirmasi password tidak sesuai!',
    ];

    // Validate the request
    $validated = $request->validate($rules, $message);

    // Find and update the user
    $user = User::findOrFail($request->id_user);
    
    // Check if old password is provided and matches
    if ($request->filled('old_password')) {
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
        }
    }

    // Update the user details
    $user->name = $request->name;
    $user->email = $request->email;

    // Only update the password if a new password is provided
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    $user->save();

    // Update Konsumen details
    $konsumen = Konsumen::findOrFail($id);
    $konsumen->no_telepon = $request->no_telepon;
    $konsumen->alamat = $request->alamat;
    $konsumen->save();

    return redirect()->route('konsumen.index')->with('success', 'Data berhasil diperbarui');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $konsumen = Konsumen::findOrFail($id);
        $user = User::findOrFail($konsumen->id_user);
        if (!Konsumen::destroy($id)) {
            return redirect()->back();
        } else {
            $konsumen->delete();
            $user->delete();
            session()->put('success', 'Data Berhasil Di Hapus');
            return redirect()->back();
        }
    }
}
