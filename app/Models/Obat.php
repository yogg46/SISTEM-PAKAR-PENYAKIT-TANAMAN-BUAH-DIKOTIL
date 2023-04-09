<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // use AutoNumberTrait;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $count = static::count();
            $model->idObat = 'S-' . str_pad($count + 1, 2, '0', STR_PAD_LEFT);
        });

    }

    protected $primaryKey = 'idObat';
    // protected $primaryKey = 'idGejala';
    protected $fillable = [
        'idPenyakit',
        'idObat',
        'namaObat',
        'gambarObat',
        'cara',
        'jenis',
        'khasiat'
    ];

    protected $casts = [
        'idObat' => 'string',
    ];
    public function obatToPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'idPenyakit', 'idPenyakit');
    }
}
