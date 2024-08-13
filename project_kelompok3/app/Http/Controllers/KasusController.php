<?php

namespace App\Http\Controllers;

use App\Models\InformasiBencana;
use App\Models\Laporan;
use App\Models\Donasi;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $informasi = InformasiBencana::with(['laporan', 'donasi' => function ($query) {
            $query->where('status', 'success');
        }])->get();
        return view('front.kasus.index', compact('informasi'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $informasi = InformasiBencana::join('tb_laporan', 'tb_informasibencana.id_laporan', '=', 'tb_laporan.id_laporan')
        // ->select('tb_informasibencana.*', 'tb_laporan.*')
        // ->where('tb_informasibencana.id_bencana', $id)
        // ->get();
        $informasi = InformasiBencana::with(['laporan', 'donasi' => function ($query) {
            $query->where('status', 'success');
        }])->where('id_bencana', $id)->first();

        // $bencana = InformasiBencana::join('tb_laporan', 'tb_informasibencana.id_laporan', '=', 'tb_laporan.id_laporan')
        // ->select('tb_informasibencana.*', 'tb_laporan.*')
        // ->whereNotIn('id_bencana', [$id])
        // ->orderByDesc('id_bencana')
        // ->take(4)
        // ->get();
        $bencana = InformasiBencana::with('laporan')->where('id_bencana', '!=', $id)->orderByDesc('id_bencana')->take(4)->get();
        // $donasi = Donasi::join('tb_informasibencana', 'tb_donasi.id_informasi_bencana', '=', 'tb_informasibencana.id_bencana')
        // ->select('tb_donasi.id_informasi_bencana', 'tb_donasi.jumlah_donasi')
        // ->where('tb_donasi.id_informasi_bencana', $id)
        // ->get();

        return view('front.kasus.show', ['informasi' => $informasi, 'bencana' => $bencana, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
