<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenyakit extends Model
{
    use HasFactory;
    protected $fillable = [
        'idPenyakit',
        'idGejala',
        'Buah',
        'Bagian'
    ];
    public function DetailPenyakitToGejala()
    {
        return $this->belongsTo(Gejala::class, 'idGejala', 'idGejala');
    }
    public function DetailPenyakitToPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'idPenyakit', 'idPenyakit');
    }
    public function RelasidetailPenyakit()
    {
        return $this->hasMany(detailDiagnosa::class, 'idDetailPenyakit');
    }
}
