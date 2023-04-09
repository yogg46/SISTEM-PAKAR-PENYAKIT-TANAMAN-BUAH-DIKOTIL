<?php

namespace App\Http\Livewire\Chat;

use App\Models\Chat;
use App\Models\notif;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminChat extends Component
{
    // public $pesans;
    public $user_id;
    public $isi;
    public function render()
    {


        return view('livewire.chat.admin-chat',[
        'pesans' => Chat::orWhere('sender_id', $this->user_id)->orWhere('receiver_id', $this->user_id)->orderBy('created_at', 'ASC')->get()

        ])->extends('layouts.main', [
            'tittle' => ' ',
        ])
            ->section('page');
    }

    public function mount($id)
    {
        $this->user_id = $id;
        // this.refresh(5); // Refresh every 5 seconds
        $this->dispatchBrowserEvent('scrollToBottom');
    }

    public function kirim()
    {
        $this->validate([
            'isi' => 'required',
        ]);

        // $admin = User::where('userRole', 'admin')->first();
        Chat::create([
            'idChat' => Str::random(8),
            'isi' => $this->isi,
            'sender_id' => Auth::user()->idUser,
            'receiver_id' => $this->user_id,
            'tanggal' => Carbon::now('Asia/Jakarta'),
            'is_admin' => 'Benar'
        ]);
        notif::create([
            'message'=>'Pesan Baru',
            'idUser'=> $this->user_id,
        ]);
        $this->dispatchBrowserEvent('scrollToBottom');
        $this->isi = '';
    }
}
