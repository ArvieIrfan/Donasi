<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Donasi;
use App\Models\Donatur;

class FrontDonasiController extends Controller
{
    public function showForm($id)
    {
        $informasi = DB::table('tb_informasibencana')->get();
        return view('front.donasi.form', compact('informasi', 'id'));
    }

    public function store(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'tanggal' => 'required|date',
            'jumlah_donasi' => 'required|numeric|min:0',
        ]);

        // Generate a unique id_donasi using bin2hex(random_bytes())
        $unique = false;
        do {
            $newIdDonasi = bin2hex(random_bytes(3)); // Generate 8 characters (4 bytes * 2)
            $exists = DB::table('tb_donasi')->where('id_donasi', $newIdDonasi)->exists();
            if (!$exists) {
                $unique = true;
            }
        } while (!$unique);

        // Check if the donatur already exists based on name and email
        $existingDonatur = DB::table('tb_donatur')
            ->where('nama', $validatedData['nama'])
            ->where('email', $validatedData['email'])
            ->first();

        if ($existingDonatur) {
            // Donatur already exists, get the existing ID
            $idDonatur = $existingDonatur->id_donatur;
        } else {
            // Donatur does not exist, insert new record and get the new ID
            $maxIdDonatur = DB::table('tb_donatur')->max('id_donatur');
            $idDonatur = $maxIdDonatur + 1;

            // Insert into tb_donatur
            DB::table('tb_donatur')->insert([
                'id_donatur' => $idDonatur,
                'nama' => $validatedData['nama'],
                'no_telepon' => $validatedData['no_telepon'],
                'email' => $validatedData['email'],
            ]);
        }

        // Insert into tb_donasi
        DB::table('tb_donasi')->insert([
            'id_donasi' => $newIdDonasi,
            'id_informasi_bencana' => $id, // Ensure $id is defined and valid
            'id_donatur' => $idDonatur,
            'tanggal' => $validatedData['tanggal'],
            'jumlah_donasi' => $validatedData['jumlah_donasi'],
            'status' => 'pending',
        ]);




            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $newIdDonasi,
                    'gross_amount' => $validatedData['jumlah_donasi'],
                ),
                'customer_details' => array(
                    'first_name' => $validatedData['nama'],
                    'email' => $validatedData['email'],
                    'phone' => $validatedData['no_telepon'],
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return view('front.donasi.confirmPay', ['token' => $snapToken, 'data' => $validatedData, 'id_donasi' => $newIdDonasi, 'id_bencana' => $id]);
            // return redirect()->route('front.donasi.form')->with('success', 'Donasi berhasil dibuat.');

    }
    public function callback(Request $request)
    {
        $serverkey = config('midtrans.server_key');

        // Pastikan variabel $request->order_id, $request->status_code, dan $request->gross_amount adalah string
        $order_id = (string) $request->input('order_id');
        $status_code = (string) $request->input('status_code');
        $gross_amount = (string) $request->input('gross_amount');

        // Generate hashed signature
        $hashed = hash("sha512", $order_id . $status_code . $gross_amount . $serverkey);

        // Validasi signature key
        if ($hashed === $request->input('signature_key')) {
            // Pastikan status transaksi adalah 'capture'
            if ($request->input('transaction_status') === 'settlement') {
                // Cari order dengan order_id
                $order = Donasi::find($order_id);

                if ($order) {
                    // Update status order menjadi 'success'
                    $order->status = 'success';
                    $order->save();

                    // Kembalikan respons sukses
                    return response()->json(['message' => 'Order updated successfully'], 200);
                } else {
                    // Order tidak ditemukan
                    return response()->json(['message' => 'Order not found'], 404);
                }
            } else {
                // Status transaksi bukan 'capture'
                return response()->json(['message' => 'Invalid transaction status'], 400);
            }
        } else {
            // Signature key tidak valid
            return response()->json(['message' => 'Invalid signature key'], 400);
        }


        // \Midtrans\Config::$isProduction = false;
        // \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // $notif = new \Midtrans\Notification();

        // $transaction = $notif->transaction_status;
        // $order_id = $notif->order_id;
        // $fraud = $notif->fraud_status;

        // if ($transaction == 'capture') {
        //     if($fraud == 'accept'){
        //     // TODO set payment status in merchant's database to 'Success'
        //         $order = Donasi::findOrFail($order_id);
        //         $order->update(['status' => 'success']);
        //     }
        // }
    }
}
