<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBencana;
use Illuminate\Support\Facades\DB;

class JenisBencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jenis = JenisBencana::all();
        return view('admin.jenis_bencana.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = JenisBencana::all();
        return view('admin.jenis_bencana.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //membuat validasi
        $request->validate([
            'nama' => 'required|max:45',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
        ]);

        $jenis = new JenisBencana;
        $jenis->nama_bencana = $request->nama;
        $jenis->save();
        return redirect('admin/jenis_bencana')->with('success', 'Berhasil Menambahkan Jenis Bencana');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jenis = JenisBencana::findOrFail($id);
        return view('admin.jenis_bencana.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $jenis = JenisBencana::findOrFail($id);
        $jenis->nama_bencana = $request->nama;
        $jenis->save();
        return redirect('admin/jenis_bencana')->with('success', 'Berhasil Mengupdate Jenis Bencana');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = JenisBencana::findOrFail($id);
        $jenis->delete();

        return redirect('admin/jenis_bencana')->with('success', 'Berhasil Menghapus Jenis Bencana');
    }
}
