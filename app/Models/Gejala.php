<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    // use AutoNumberTrait;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $count = static::count();
            $model->idGejala = 'G-' . str_pad($count + 1, 2, '0', STR_PAD_LEFT);
        });
        static::creating(function ($model) {
            $model->key = str_replace([' ','/', "'"], '-', strtolower($model->idGejala . ' ' . $model->namaGejala));
        });
    }
    // public function getAutoNumberOptions()
    // {
    //     return [
    //         'idGejala' => [
    //             'format' => 'G-?', // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 2 // The number of digits in an autonumber
    //         ]
    //     ];
    // }
    // protected $primayKey = 'idGejala';
    protected $fillable = [
        'idGejala',
        'namaGejala',
        'gambarGejala',
        'key'
    ];
    protected $primaryKey = 'idGejala';


    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'idGejala' => 'string',
    ];
    public function gejalaToDetailPenyakit()
    {
        return $this->hasMany(DetailPenyakit::class, 'idGejala', 'idGejala');
    }
}
