<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donasi;
use Illuminate\Http\Request;
use App\Models\Donatur;
use App\Models\Laporan;
use App\Models\Relawan;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $donasi = donasi::sum('jumlah_donasi');
        $donasi1 = donasi::all();
        $donatur = Donatur::count();
        $laporan = Laporan::count();
        $relawan = Relawan::count();
        $monthlyDonations = $donasi1->groupBy(function($date) {
            return Carbon::parse($date->tanggal)->format('Y-m'); // Mengelompokkan berdasarkan bulan
        });

        // Hitung jumlah donasi per bulan
        $monthlyDonationsData = [];
        foreach ($monthlyDonations as $month => $donations) {
            $monthlyDonationsData[$month] = $donations->sum('jumlah_donasi');
        }

        ksort($monthlyDonationsData);

        // Mengubah format bulan menjadi nama bulan
        $formattedMonthlyDonationsData = [];
        foreach ($monthlyDonationsData as $month => $total) {
            $formattedMonth = Carbon::createFromFormat('Y-m', $month)->format('M');
            $formattedMonthlyDonationsData[$formattedMonth] = $total;
        }

        return view('admin.dashboard', compact('donasi', 'donatur', 'laporan', 'relawan'), ['monthlyDonationsData' => $formattedMonthlyDonationsData]);
    }
}
