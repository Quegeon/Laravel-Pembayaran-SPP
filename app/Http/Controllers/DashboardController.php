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

        $start_date = Carbon::today()->firstOfMonth();
        $sum_days = $start_date->daysInMonth;
        $end_date = $start_date->addDays($sum_days);
        
        $total_transaksi = Pembayaran::Select(Pembayaran::raw('SUM(jumlah_bayar) as a'))
            ->whereBetween('tgl_bayar',[$start_date, $end_date])->first();

        return view('dashboard', compact(['siswa_count','kelas_count','total_transaksi']));
   }

}
