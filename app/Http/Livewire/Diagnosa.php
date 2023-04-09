<?php

namespace App\Http\Livewire;

use App\Models\detailDiagnosa;
use App\Models\DetailPenyakit;
use App\Models\Diagnosa as ModelsDiagnosa;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Diagnosa extends Component
{

    public $jnsTanaman;
    public $bgnTanaman;
    public $gjlTanaman = [];

    public $showJNS = 'false';
    public $showBGN = 'false';
    public $showGJL = 'false';

    public function render()
    {


        return view('livewire.diagnosa', [
            // 'gejala' => DetailPenyakit::where('Buah', $this->jnsTanaman)->where('Bagian', $this->bgnTanaman)->get()
            'gejala' => DetailPenyakit::all()
            // 'gejala' => $gejala,
        ])
            ->extends('layouts.main', [
                'tittle' => ' ',
            ])
            ->section('page');
    }

    public function ResetISI($id)
    {
        $this->gjlTanaman[$id] = [];
    }
    public function showBagian($id)
    {
        $this->showBGN = 'true';
        $this->ResetISI($id);
    }
    public function showGejala($id)
    {
        $this->showGJL = 'true';
        $this->ResetISI($id);
    }


    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {

        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        // $this->account = '';
        // $this->username = '';
    }

    public function store()
    {
        // $validatedDate = $this->validate([
        //         'account.0' => 'required',
        //         'username.0' => 'required',
        //         'account.*' => 'required',
        //         'username.*' => 'required',
        //     ],
        //     [
        //         'account.0.required' => 'Account field is required',
        //         'username.0.required' => 'Username field is required',
        //         'account.*.required' => 'Account field is required',
        //         'username.*.required' => 'Username field is required',
        //     ]
        // );
        // $user = Auth::user()->idUser;
        foreach ($this->jnsTanaman as $key => $value) {
            // $diagnosaa =  ModelsDiagnosa::create(['idUser' => $user, 'tanggal' => Carbon::now()]);
            $diagnosaa = new ModelsDiagnosa();
            $diagnosaa->idUser = Auth::user()->idUser;
            $diagnosaa->tanggal = Carbon::now();
            $diagnosaa->save();

            foreach ($this->gjlTanaman[$key] as $item) {
                detailDiagnosa::create([
                    'idDiagnosa' => $diagnosaa->id, 'idDetailPenyakit' => $item
                ]);
            }

            Laporan::create([
                'namaPengguna' => Auth::user()->namaPengguna,
                'tglDiagnosa'=> Carbon::now(),
                'penyakit' => $diagnosaa->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit,
                'obat' =>  $diagnosaa->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->namaObat,

            ]);
        }

        // $this->inputs = [];

        // $this->resetInputFields();
return redirect()->route('hasil-diagnosa',$diagnosaa->key);
        // session()->flash('message', 'Account Added Successfully.');
    }
}
