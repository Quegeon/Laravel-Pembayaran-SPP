<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nis';

    protected $fillable = [
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp'
    ];

    public function Kelas () {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function Siswa () {
        return $this->hasMany(Siswa::class, 'nis', 'nis');
    }

}
