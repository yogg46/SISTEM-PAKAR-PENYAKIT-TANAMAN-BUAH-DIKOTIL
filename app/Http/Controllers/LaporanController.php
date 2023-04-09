<?php

namespace App\Http\Controllers;

use App\Models\BalasChat;
use App\Models\Chat;
use App\Models\Diagnosa;
use App\Models\Komentar;
use App\Models\notif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan()
    {
        $laporan = Diagnosa::with('DiagnosaToDetail.RelasidetailPenyakit')->get();
        return view('admin.dataLaporan.laporan', ['laporan' => $laporan]);
    }

    public function laporangejala()
    {
        $laporangejala = DB::table('laporans')->get();
        return view('admin.dataLaporan.laporangejala', ['laporangejala' => $laporangejala]);
    }

    public function laporanpenyakit()
    {
        $laporanpenyakit = DB::table('laporans')->get();
        return view('admin.dataLaporan.laporanpenyakit', ['laporanpenyakit' => $laporanpenyakit]);
    }

    public function laporanobat()
    {
        $laporanobat = DB::table('laporans')->get();
        return view('admin.dataLaporan.laporanobat', ['laporanobat' => $laporanobat]);
    }

    public function detaillaporan($id)
    {
        $laporan = DB::table('laporans')->where('id', $id)->get();
        return view('admin.dataLaporan.detaillaporan', ['dlaporan' => $laporan]);
    }

    public function chat()
    {
        $chat = Chat::where('is_admin', 'salah')->orderBy('created_at', 'DESC')->get();
        // $chat = DB::table('chats')
        // ->groupBy(['sender_id', 'idChat','isi','tanggal','receiver_id','is_admin','created_at','updated_at'])
        //         ->orderBy('tanggal', 'desc')
        //         ->get();
        return view('admin.dataLaporan.chat', ['chat' => $chat]);
    }

    public function komentar()
    {
        $komentar = Komentar::with('chatToUser')->orderBy('created_at', 'DESC')->get();
        return view('admin.dataLaporan.komentar', ['komentar' => $komentar]);
    }

    public function lihatlaporan()
    {
        return view('admin.dataLaporan.lihatlaporan');
    }

    public function lapgejala()
    {
        return view('admin.dataLaporan.laporangejala');
    }

    public function lappenyakit()
    {
        return view('admin.dataLaporan.laporanpenyakit');
    }

    public function lapobat()
    {
        return view('admin.dataLaporan.laporanobat');
    }



    public function balaschat($id)
    {
        $balaschat = Chat::where('idUser', $id)->get();
        return view('admin.dataLaporan.balaschat', ['balaschat' => $balaschat]);
    }


    public function komen(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:255',
        ]);

        // Create new rating instance
        $rating = new Komentar();
        $rating->idUSer = Auth::user()->idUser;
        $rating->username = Auth::user()->namaPengguna;
        $rating->nilai = $validatedData['rating'];
        $rating->saran = $validatedData['comment'];
        $rating->save();
        return redirect()->back()->with('success', 'Thank you for your rating and comment!');
    }

    public function showKomen()
    {

        $komen = Komentar::where('idUser', Auth::user()->idUser)->orderBy('created_at', 'DESC')->get();
        return view('petani.menuDiagnosa.komentaradmin', ['komen' => $komen]);
    }

    public function notiif(Request $request, $id)
    {
        if (Auth::user()->userRole == 'admin') {
            $notiff = notif::where('id', $id)->first();
            $sId = $notiff->idUser;
            $notiff->delete();
            return redirect()->route('balas-chat', $sId);
        } else {

            $notiff = notif::where('id', $id)->first();
            $notiff->delete();
            return redirect()->route('chat-ke-admin');
        }
    }
}
