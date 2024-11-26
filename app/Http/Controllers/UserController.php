<?php

namespace App\Http\Controllers;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Laracasts\Flash\Flash;

class UserController extends Controller
{
    public function index()
    {
        $user = User ::all();
        return view('admin.user.index', compact('user'));
    }
    
    public function create()
    {
        return view('admin.user.create');
    }
    
    public function store(Request $request)
    {
        // Menambahkan aturan validasi
        $rules = [
            'name' => 'required|string|max:255', // Pastikan nama valid
            'email' => 'required|email|unique:users,email', // Validasi email yang unik
            'password' => 'required|min:6|confirmed', // Menambahkan aturan confirmed untuk validasi password dan konfirmasi
        ];

        // Menambahkan pesan untuk setiap aturan
        $message = [
            'required' => 'Data wajib diisi!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.confirmed' => 'Password dan konfirmasi password tidak sama!',
            'password.min' => 'Password minimal 6 karakter!',
        ];

        // Validasi input
        $request->validate($rules, $message);

        // Membuat user baru
        $user = new User();
        $user->name = $request->name;  // Menggunakan 'nama' dari form
        $user->email = $request->email;
        $user->role_id = 1;  // Role default 2, bisa diubah sesuai kebutuhan
        $user->password = Hash::make($request->password);  // Meng-hash password
        $user->save();  // Simpan data user

        // Menyimpan pesan sukses di session dan redirect
        session()->put('success', 'Data Berhasil ditambahkan');
        return redirect()->route('user-admin.index');
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'old_password' => 'required',
            'password' => 'nullable|min:6|confirmed', // Password baru optional, hanya jika diisi
        ];

        $message = [
            'required' => 'Data wajib diisi!',
            'confirmed' => 'Konfirmasi password tidak sesuai!',
        ];

        // Validasi input
        $validated = $request->validate($rules, $message);

        $user = User::findOrFail($id);

        // Verifikasi Password Lama
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama yang Anda masukkan salah!']);
        }

        // Update user
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password); // Jika password baru diisi
        }
        $user->save();

        session()->put('success', 'Data Berhasil diperbarui');
        return redirect()->route('user-admin.index');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        // toastr()->success('Data Berhasil Dihapus.');
        return redirect()->route('user-admin.index');
    }
}