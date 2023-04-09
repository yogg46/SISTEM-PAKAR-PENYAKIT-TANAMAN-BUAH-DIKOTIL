<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();


        static::creating(function ($model) {
            $model->key = str_replace([' ', "'"], '-', strtolower( 'Diagnosa-' . CarbonImmutable::now()->timestamp.Str::random(10) . uniqid()));
        });

    }
    protected $fillable = [
        'idUser',
        'tanggal',
        // 'idDetailPenyakit'
    ];


    public function DiagnosaToDetail()
    {
        return $this->hasMany(detailDiagnosa::class, 'idDiagnosa');
    }
    public function DiagnosaToUser()
    {
        return $this->belongsTo(User::class, 'idUser','idUser');
    }


}
