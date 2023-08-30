<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index () {
        $siswa_count = Siswa::count();
        $kelas_count = Kelas::count();

        $start_date = Carbon::now()->startOfMonth();
        $dupe_stdate = Carbon::now()->startOfMonth();
        $sum_days = $start_date->daysInMonth;
        $end_date = $dupe_stdate->addDays($sum_days-1);

        $total_transaksi = Pembayaran::Select(Pembayaran::raw('SUM(jumlah_bayar) as total_price'))
            ->whereBetween('tgl_bayar',[$start_date, $end_date])->first();

        $pembayaran = Pembayaran::select()->orderBy('tgl_bayar','desc')
            ->limit(5)->get();

        return view('dashboard', compact(['siswa_count','kelas_count','total_transaksi','pembayaran']));
   }

}
