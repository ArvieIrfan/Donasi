<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donatur;
use Illuminate\Support\Facades\DB;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $donatur = DB::table('tb_donatur')->get();
        return view('admin.donatur.index', compact('donatur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.donatur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
        ]);

        $maxIdDonatur = DB::table('tb_donatur')->max('id_donatur');
        $idDonatur = $maxIdDonatur + 1;

        // Pastikan bahwa nama kolom yang dipanggil adalah 'no_telepon', bukan 'no_telpon'
        DB::table('tb_donatur')->insert([
            'id_donatur' => $idDonatur,
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon, // Perbaiki penamaan kolom 'no_telepon'
            'email' => $request->email,
        ]);
        return redirect()->route('admin.donatur.index')->with('success', 'Donatur created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $donatur = DB::table('tb_donatur')->where('id_donatur', $id)->first();

        // Handle case where donatur is not found
        if (!$donatur) {
            return redirect()->route('admin.donatur.index')->with('error', 'Donatur not found.');
        }

        return view('admin.donatur.detail', compact('donatur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $donatur = DB::table('tb_donatur')->where('id_donatur', $id)->first();
        return view('admin.donatur.edit', compact('donatur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
        ]);

        DB::table('tb_donatur')->where('id_donatur', $id)->update([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ]);
        return redirect()->route('admin.donatur.index')->with('success', 'Donatur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donatur = DB::table('tb_donatur')->where('id_donatur', $id)->first();

        // Pastikan donatur ditemukan
        if (!$donatur) {
            return redirect()->route('admin.donatur.index')->with('error', 'Donatur tidak ditemukan.');
        }

        // Hapus donatur
        DB::table('tb_donatur')->where('id_donatur', $id)->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.donatur.index')->with('success', 'Donatur berhasil dihapus.');
    }
}
