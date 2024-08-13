<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menggunakan eloquent
        $relawan = Relawan::all();
        return view('admin.relawan.index', ['relawan' => $relawan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menggunakan eloquent
        $gender = ['Laki-laki','Perempuan'];
        return view('admin.relawan.create', ['gender' => $gender]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //membuat validasi
        $request->validate([
            'nama' => 'required|max:45',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'required|numeric',
            'email' => 'required|email',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'jenis_kelamin.required' => 'pilih jenis kelamin anda',
            'no_telepon.required' => 'Isi nomor telepon anda',
            'no_telepon.max' => 'Nomor telepon maksimal hanya 13 angka saja',
            'email.required' => 'Masukkan email anda',
            'foto.max' => 'Foto maksimal 2 MB',
            'foto.mimes' => 'File ekstensi hanya bisa jpg, png, jpeg, gif, svg',
            'foto.image' => 'File hanya boleh berupa image'
        ]);

        ////proses upload foto
        //jika file foto ada yang terupload
        if(!empty($request->foto)){
            //maka proses berikut yang dijalankan
            $fileName = 'foto-'.uniqid(). '.'. $request->foto->getClientOriginalExtension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->foto->move(public_path('admin/img'), $fileName);
        }
        else {
            $fileName = '';
        }


        $relawan = new Relawan;
        $relawan->nama = $request->nama;
        $relawan->jenis_kelamin = $request->jenis_kelamin;
        $relawan->no_telepon = $request->no_telepon;
        $relawan->email = $request->email;
        $relawan->foto = $fileName;
        $relawan->save();
        // Alert::success('Tambah Relawan', 'Berhasil Menambahkan Relawan');
        return redirect('admin/relawan')->with('success', 'Berhasil Menambahkan Relawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menggunakan eloquent
        $relawan = Relawan::findOrFail($id);
        $gender = ['Laki-laki', 'Perempuan'];
        return view('admin.relawan.show', ['relawan' => $relawan, 'gender' => $gender]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //menggunakan eloquent
        $relawan = Relawan::findOrFail($id);
        $gender = ['Laki-laki', 'Perempuan'];
        return view('admin.relawan.edit', ['relawan' => $relawan, 'gender' => $gender]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Mendapatkan foto lama
        $relawan = Relawan::find($id);
        $fotoLama = $relawan->foto;

        if ($request->hasFile('foto')) {
            // Menghapus foto lama jika ada
            if (!empty($fotoLama)) {
                $fotoPath = public_path('admin/img/' . $fotoLama);
                if (file_exists($fotoPath)) {
                    unlink($fotoPath);
                }
            }

            // Membuat nama file baru dengan unik
            $fileName = 'foto-' . uniqid() . '.' . $request->foto->extension();
            // Memindahkan file ke folder public
            $request->foto->move(public_path('admin/img'), $fileName);
        } else {
            // Menggunakan foto lama jika tidak ada foto baru yang diupload
            $fileName = $fotoLama;
        }

        $relawan->nama = $request->nama;
        $relawan->jenis_kelamin = $request->jenis_kelamin;
        $relawan->no_telepon = $request->no_telepon;
        $relawan->email = $request->email;
        $relawan->foto = $fileName;
        $relawan->save();
        return redirect('admin/relawan')->with('success', 'Berhasil Mengupdate Relawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $relawan = Relawan::findOrFail($id);
        Storage::delete('public/admin/img/'.$relawan->foto);
        $relawan->delete();

        return redirect('admin/relawan')->with('success', 'Berhasil Menghapus Relawan');
    }
}
