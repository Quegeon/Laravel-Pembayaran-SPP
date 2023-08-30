<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'id_spp',
        'id_petugas',
        'keterangan',
        'tgl_bayar',
        'jumlah_bayar'
    ];

    public function Siswa () {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }

    public function SPP () {
        return $this->belongsTo(SPP::class, 'id_spp', 'id');
    }

    public function User () {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
}
