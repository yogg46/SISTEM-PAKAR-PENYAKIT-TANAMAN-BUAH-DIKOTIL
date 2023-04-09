<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // use Sluggable;
    protected $primaryKey = 'idUser';
    protected static function boot()
    {
        parent::boot();


        static::creating(function ($model) {
            $model->idUser = str_replace([' ', "'"], '-', strtolower(($model->userRole == 'user' ? 'petani' : ($model->userRole == 'admin' ? 'admin' : 'pemilik')) . '-' . CarbonImmutable::now()->timestamp . Str::random(3) ));
        });
        static::creating(function ($model) {
            $model->key = str_replace([' ', "'"], '-', strtolower($model->idUser . ' ' . $model->namaPengguna));
        });
    }


    // public function sluggable(): array
    // {

    //     return [
    //         'key' => [
    //             'source' => 'fullname'
    //         ]
    //     ];
    // }
    // public function getFullnameAttribute(): string
    // {
    //     return $this->userRole . ' ' . $this->namaPengguna;
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idUser',
        'namaPengguna',
        'jenisKelamin',
        'username',
        'password',
        'alamat',
        'userRole',
        'gambar'
    ];
    // use AutoNumberTrait;
    // public function getAutoNumberOptions()
    // {
    //     // if ($this->userRole == 'admin' | 'pemilik') {
    //     //     $u = 'Admin';
    //     // } else {
    //     //     $u = 'Petani';
    //     // }
    //     // ;
    //     return [
    //         'idUser' => [
    //             'format' => $this->userRole . '-?',
    //             // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 2 // The number of digits in an autonumber
    //         ]
    //     ];
    // }
    public function userToChat()
    {
        return $this->hasMany(Chat::class, 'idUser');
    }
    public function userToKomentar()
    {
        return $this->hasMany(Komentar::class, 'idUser');
    }

    public function notif()
    {
        return $this->hasMany(notif::class, 'idUser','idUser');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'idUser' => 'string',
    ];
}
