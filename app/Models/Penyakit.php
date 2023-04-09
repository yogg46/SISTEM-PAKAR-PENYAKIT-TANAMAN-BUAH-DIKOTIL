<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $lastKey = static::max('idPenyakit'); // Get the highest key currently in the database
            $lastNumber = substr($lastKey, 2); // Extract the numeric part of the key
            $newNumber = intval($lastNumber) + 1; // Increment the numeric part
            $model->idPenyakit = 'P-0' . $newNumber; // Set the key attribute on the new model instance
        });
        static::creating(function ($model) {
            $model->key = str_replace([' ', "'"], '-', strtolower($model->idPenyakit . ' ' . $model->namaPenyakit));
        });
    }

    protected $primaryKey = 'idPenyakit';
    protected $fillable = [
        'idPenyakit',
        'namaPenyakit',
        'keterangan',
        'solusi',
        'gambar',
        'key'
    ];

    protected $casts = [
        'idPenyakit' => 'string',
    ];


    public function penyakitToDetailPenyakit()
    {
        return $this->hasMany(DetailPenyakit::class, 'idPenyakit', 'idPenyakit');
    }
    public function penyakitToObat()
    {
        return $this->hasMany(Obat::class, 'idPenyakit', 'idPenyakit');
    }
}
