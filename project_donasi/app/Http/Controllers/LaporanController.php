<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil parameter pencarian jika ada
        $search = $request->get('search');

        // Query data dari model Laporan
        $laporan = Laporan::with(['relawan', 'jenisBencana'])
            ->when($search, function ($query, $search) {
                $query->where('lokasi_kejadian', 'like', "%{$search}%")
                    ->orWhereHas('relawan', function($query) use ($search) {
                        $query->where('nama', 'like', "%{$search}%");
                    })
                    ->orWhereHas('jenisBencana', function($query) use ($search) {
                        $query->where('nama_bencana', 'like', "%{$search}%");
                    });
            })
            ->get();

        return view('admin.laporan.index', compact('laporan', 'search'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $relawan = DB::table('tb_relawan')->get();
        $jenis_bencana = DB::table('tb_jenisbencana')->get();
        return view('admin.laporan.create', compact('relawan', 'jenis_bencana'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tgl_laporan' => 'required|date',
            'isi_laporan' => 'required|string',
            'lokasi_kejadian' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_relawan' => 'required|exists:tb_relawan,id_relawan',
            'id_jenis_bencana' => 'required|exists:tb_jenisbencana,id_jenis_bencana',
        ]);

        if(!empty($request->foto)){
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            $request->foto->move(public_path('admin/images'), $fileName);
        }else{
            $fileName = '';
        }

        //
        DB::table('tb_laporan')->insert([
            'tgl_laporan'=>$request->tgl_laporan,
            'isi_laporan'=>$request->isi_laporan,
            'lokasi_kejadian'=>$request->lokasi_kejadian,
            'foto'=>$fileName,
            'id_relawan'=>$request->id_relawan,
            'id_jenis_bencana'=>$request->id_jenis_bencana,
        ]);
        // Alert::success('Tambah Laporan', 'Laporan Berhasil Ditambahkan!');
        return redirect('admin/laporan')->with('success', 'Laporan updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $laporan = Laporan::find($id);
        return view('admin.laporan.detail', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $relawan = DB::table('tb_relawan')->get();
        $jenis_bencana = DB::table('tb_jenisbencana')->get();
        $laporan = DB::table('tb_laporan')->where('id_laporan', $id)->first();
        return view('admin.laporan.edit', compact('relawan', 'jenis_bencana', 'laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laporan = DB::table('tb_laporan')->where('id_laporan', $id)->first();

        $fotoLama = DB::table('tb_laporan')->select('foto')->where('id_laporan', $id)->get();
        foreach($fotoLama as $fl){
            $fotoLama = $fl->foto;
        }
        //jika foto sudah ada yang terupload
        if(!empty($request->foto)){
            //maka proses selanjutnya
        if(!empty($fotoLama->foto)) unlink(public_path('admin/images'.$fotoLama->foto));
        //proses ganti foto
            $fileName = 'foto-'.uniqid().'.'.$request->foto->extension();
            //setelah tau fotonya sudah masuk maka tempatkan ke public
            $request->foto->move(public_path('admin/images'), $fileName);
        } else{
            $fileName = $fotoLama;
        }

        //
        DB::table('tb_laporan')->where('id_laporan', $id)->update([
            'tgl_laporan'=>$request->tgl_laporan,
            'isi_laporan'=>$request->isi_laporan,
            'lokasi_kejadian'=>$request->lokasi_kejadian,
            'foto'=>$fileName,
            'id_relawan'=>$request->id_relawan,
            'id_jenis_bencana'=>$request->id_jenis_bencana,
        ]);
        Alert::success('Update Laporan', 'Laporan Berhasil Diperbaharui!');
        return redirect('admin/laporan')->with('success', 'Laporan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //hapus
        DB::table('tb_laporan')->where('id_laporan', $id)->delete();
        return redirect('admin/laporan');
    }
}
