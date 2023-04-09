<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notif extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'url',
        'idUser',
        'is_admin',
    ];

    public function userNotif()
    {
        return $this->belongsTo(User::class, 'idUser', 'idUSer');
    }

}
