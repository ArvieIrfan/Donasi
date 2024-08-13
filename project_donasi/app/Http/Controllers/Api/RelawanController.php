<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RelawanResource;
use Illuminate\Http\Request;
use App\Models\Relawan;
use Illuminate\Support\Facades\Validator;

class RelawanController extends Controller
{
    //
    public function index(){
        $relawan = Relawan::all();
        return new RelawanResource(true, 'List Data Relawan', $relawan);
    }
    public function show($id){
        $relawan = Relawan::findOrFail($id);
        if ($relawan) {
            return new RelawanResource(true, 'Detail Data Relawan', $relawan);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'tidak ada data yang ditemukan'
            ], 404);
        }
    }
    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'nama' => 'required|max:45',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'required|numeric',
            'email' => 'required|email',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        else {
            $relawan = new Relawan;
            $relawan->nama = $request->nama;
            $relawan->jenis_kelamin = $request->jenis_kelamin;
            $relawan->no_telepon = $request->no_telepon;
            $relawan->email = $request->email;
            $relawan->foto = $request->foto;
            $relawan->save();

            return new RelawanResource(true, 'Data Relawan Berhasil Ditambahkan!', $relawan);
        }
    }
    public function update(Request $request, $id){
        $validator = validator::make($request->all(),[
            'nama' => 'required|max:45',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'required|numeric',
            'email' => 'required|email',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        else {
            $relawan = Relawan::findOrFail($id);
            $relawan->nama = $request->nama;
            $relawan->jenis_kelamin = $request->jenis_kelamin;
            $relawan->no_telepon = $request->no_telepon;
            $relawan->email = $request->email;
            $relawan->foto = $request->foto;
            $relawan->save();

            return new RelawanResource(true, 'Data Relawan Berhasil Ditambahkan!', $relawan);
        }
    }
    public function destroy($id){
        $relawan = Relawan::findOrFail($id);
        $relawan->delete();
        return new RelawanResource(true, 'Data Relawan Berhasil dihapus!', $relawan);
    }
}
