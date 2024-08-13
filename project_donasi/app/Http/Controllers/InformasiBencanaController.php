<?php

namespace App\Http\Controllers;

use App\Models\InformasiBencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laporan;

class InformasiBencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Mengambil parameter pencarian jika ada
        $informasiBencana = InformasiBencana::with(['laporan.jenisBencana'])
            ->get();

        return view('admin.informasi.index', compact('informasiBencana'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $laporan = DB::table('tb_laporan')->get();
        // return view('admin.informasi.create', compact('laporan'));
        $usedLaporanIds = InformasiBencana::pluck('id_laporan')->toArray();
        $laporan = Laporan::whereNotIn('id_laporan', $usedLaporanIds)->get();
        return view('admin.informasi.create', compact('laporan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tb_informasibencana')->insert([
            'tgl_bencana' => $request -> tgl_bencana,
            'tingkat_keparahan' => $request -> tingkat_keparahan,
            'keterangan' => $request -> keterangan,
            'judul' => $request -> judul,
            'target_donasi' => $request -> target_donasi,
            'id_laporan' => $request -> id_laporan,
        ]);
        return redirect('admin/informasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $informasiBencana = InformasiBencana::with(['laporan.relawan', 'laporan.jenisBencana'])->find($id);
        return view('admin.informasi.detail', compact('informasiBencana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laporan = DB::table('tb_laporan')->get();
        $informasiBencana = DB::table('tb_informasibencana')->where('id_bencana', $id)->first();
        return view('admin.informasi.edit', compact('informasiBencana', 'laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('tb_informasibencana')->where('id_bencana', $id)->update([
            'tgl_bencana'=>$request->tgl_bencana,
            'tingkat_keparahan'=>$request->tingkat_keparahan,
            'keterangan'=>$request->keterangan,
            'judul' => $request->judul,
            'target_donasi' => $request->target_donasi,
            'id_laporan'=>$request->id_laporan,
        ]);
        return redirect('admin/informasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_informasibencana')->where('id_bencana', $id)->delete();
        return redirect('admin/informasi');
    }
}
