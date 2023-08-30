<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'kompetensi_keahlian'
    ];

    public function Kelas()
    {
        return $this->hasMany(Kelas::class, 'id_kelas', 'id');
    }
}
