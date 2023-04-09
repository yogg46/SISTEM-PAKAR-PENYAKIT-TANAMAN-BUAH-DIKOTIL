<?php

namespace App\Http\Livewire\Chat;

use App\Models\Chat;
use App\Models\notif;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserChat extends Component
{
    public $isi;
    public function render()
    {
        $pesans = Chat::orWhere('sender_id', Auth::user()->idUser)->orWhere('receiver_id', Auth::user()->idUser)->orderBy('created_at', 'ASC')->get();
        return view('livewire.chat.user-chat', ['pesans' => $pesans])
            ->extends('layouts.main', [
                'tittle' => ' ',
            ])
            ->section('page');
    }
    public function kirim()
    {
        $this->validate([
            'isi' => 'required',
        ]);

        $admin = User::where('userRole', 'admin')->first();
        Chat::create([
            'idChat' => Str::random(8),
            'isi' => $this->isi,
            'sender_id' => Auth::user()->idUser,
            'receiver_id' => $admin->idUser,
            'tanggal' => Carbon::now('Asia/Jakarta'),
        ]);

        notif::create([
            'message'=>'Pesan Baru',
            'idUser'=> Auth::user()->idUser,
            'is_admin'=> 'Benar'
        ]);
        $this->isi = '';
    }
}
