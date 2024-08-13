<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donasi;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $donasi = DB::table('tb_donasi')->get();
        $donasi = Donasi::with(['InformasiBencana', 'Donatur'])->orderBy('tanggal', 'desc')->get();;

        return view('admin.donasi.index', compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $donatur = DB::table('tb_donatur')->get();
    $informasiBencana = DB::table('tb_informasibencana')->get();
    return view('admin.donasi.create', compact('donatur', 'informasiBencana'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_donatur' => 'required|integer',
            'id_informasi_bencana' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlah_donasi' => 'required|numeric',
        ], [
            'id_donatur.required' => 'Silahkan pilih Donatur',
            'id_informasi_bencana.required' => 'Silahkan pilih Informasi Bencana',
            'tanggal.required' => 'Silahkan isi Tanggal Donasi',
            'jumlah_donasi.required' => 'Silahkan isi Jumlah Donasi',
        ]);

        DB::table('tb_donasi')->insert([
            'id_donatur' => $request->id_donatur,
            'id_informasi_bencana' => $request->id_informasi_bencana,
            'tanggal' => $request->tanggal,
            'jumlah_donasi' => $request->jumlah_donasi,
        ]);

        return redirect()->route('admin.donasi.index')->with('success', 'Donation created successfully.');
    }

    public function show($id)
{
    $donasi = DB::table('tb_donasi')->where('id_donasi', $id)->first();
    $donatur = DB::table('tb_donatur')->where('id_donatur', $donasi->id_donatur)->first();
    return view('admin.donasi.detail', compact('donasi', 'donatur', 'id'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $donasi = DB::table('tb_donasi')->where('id_donasi', $id)->first();
        $donatur = DB::table('tb_donatur')->get();
        $informasiBencana = DB::table('tb_informasibencana')->get();
        return view('admin.donasi.edit', compact('donasi', 'donatur', 'informasiBencana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_donatur' => 'required|string',
            'id_informasi_bencana' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlah_donasi' => 'required|numeric',
            'norek' => 'required|string',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $donasi = DB::table('tb_donasi')->where('id_donasi', $id)->first();

        if (!$donasi) {
            return redirect()->route('admin.donasi.index')->with('error', 'Donation not found.');
        }

        $filePath = $donasi->bukti;
        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('admin/images'), $filename);
            $filePath = $filename;

            // Optionally delete the old file if exists
            if ($donasi->bukti && file_exists(public_path($donasi->bukti))) {
                unlink(public_path($donasi->bukti));
            }
        }

        DB::table('tb_donasi')->where('id_donasi', $id)->update([
            'id_donatur' => $request->id_donatur,
            'id_informasi_bencana' => $request->id_informasi_bencana,
            'tanggal' => $request->tanggal,
            'jumlah_donasi' => $request->jumlah_donasi,
            'norek' => $request->norek,
            'bukti' => $filePath,
        ]);

        return redirect()->route('admin.donasi.index')->with('success', 'Donation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donasi = DB::table('tb_donasi')->where('id_donasi', $id)->first();

        if (!$donasi) {
            return redirect()->route('admin.donasi.index')->with('error', 'Donation not found.');
        }

        DB::table('tb_donasi')->where('id_donasi', $id)->delete();

        return redirect()->route('admin.donasi.index')->with('success', 'Donation deleted successfully.');
    }

    public function showForm()
    {
        // Placeholder data for Informasi Bencana
        $informasi_bencanas = [
            ['id' => 1, 'nama' => 'Bencana 1'],
            ['id' => 2, 'nama' => 'Bencana 2'],
        ];

        return view('front.donasi.form', compact('informasi_bencanas'));
    }

    public function print()
    {
        // $donasi = Donasi::with(['InformasiBencana', 'Donatur'])->orderBy('tanggal', 'asc')->get();
        $donasi = Donasi::with(['InformasiBencana', 'Donatur'])
        ->where('status', 'success')
        ->get();

        return view('admin.donasi.print', compact('donasi'));
    }


}
