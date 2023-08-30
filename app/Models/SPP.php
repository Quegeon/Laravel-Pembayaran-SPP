<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',
        'tahun',
        'nominal'
    ];

    public function SPP () {
        return $this->hasMany(SPP::class, 'id_spp', 'id');
    }
}
