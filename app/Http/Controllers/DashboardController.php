<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index () {
        $siswa_count = Siswa::count();
        $kelas_count = Kelas::count();

        $today = Carbon::today()->firstOfMonth();
        $end_date = $today->addDays(31);
        $total_transaksi = Pembayaran::Select(Pembayaran::raw('SUM(jumlah_bayar) as a'))
            ->whereBetween('tgl_bayar',[$today, $end_date])->first();

        return view('dashboard', compact(['siswa_count','kelas_count','total_transaksi']));
   }

}
