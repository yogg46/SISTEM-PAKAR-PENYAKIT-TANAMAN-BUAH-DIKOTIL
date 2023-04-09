<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasChat extends Model
{
    use HasFactory;
    protected $fillable = [
        'idChat',
        'balasan',
        'tglBalas',
        'sender'
    ];
    public function balasChatToChat()
    {
        return $this->belongsTo(Chat::class, 'idChat');
    }
}
