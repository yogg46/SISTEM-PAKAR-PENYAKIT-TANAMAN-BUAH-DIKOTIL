<?php

namespace App\Http\Controllers;

use App\Models\DetailPenyakit;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class dataAturanController extends Controller
{
    public function detailpenyakit()
    {
        $detailpenyakit = DetailPenyakit::all();
        return view('admin.dataAturan.detailpenyakit', ['detailpenyakit' => $detailpenyakit]);
    }
    public function editDetailPenyakit($id)
    {
        $editDetailPenyakit = DetailPenyakit::where('id', $id)->first();
        $Datagejala = Gejala::all();
        $Datapenyakit = Penyakit::all();
        return view('admin.dataAturan.editDetailPenyakit', ['editDetailPenyakit' => $editDetailPenyakit,
        'Datagejala'=>$Datagejala,
        'Datapenyakit'=>$Datapenyakit]);
    }

    public function tambahDetailPenyakit()
    {
        $Datagejala = Gejala::all();
        $Datapenyakit = Penyakit::all();
        return view('admin.dataAturan.tambahDetailPenyakit',[
            'Datagejala'=>$Datagejala,
            'Datapenyakit'=>$Datapenyakit,
        ]);
    }

    public function simpan(Request $request)
    {

        $this->validate($request, [
            'Buah' => 'required',
            'Bagian' => 'required',
            'idPenyakit' => 'required',
            'idGejala' => 'required',
        ], [

            'Buah.required' => 'Buah tidak boleh kosong.',

            'Bagian.required' => 'Bagian tidak boleh kosong.',

            'idPenyakit.required' => 'Penyakit tidak boleh kosong.',

            'idGejala.required' => 'Gejala tidak boleh kosong.',

        ]);


        DetailPenyakit::create([
            'Buah'=>$request->Buah,
            'Bagian'=>$request->Bagian,
            'idPenyakit'=>$request->idPenyakit,
            'idGejala'=>$request->idGejala,
        ]);
        Alert::success('Berhasil','Menambahkan Data');
        return redirect()->route('detail-penyakit')
                        ->with('success',' created successfully.');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'Buah' => 'required',
            'Bagian' => 'required',
            'idPenyakit' => 'required',
            'idGejala' => 'required',
        ], [

            'Buah.required' => 'Buah tidak boleh kosong.',

            'Bagian.required' => 'Bagian tidak boleh kosong.',

            'idPenyakit.required' => 'Penyakit tidak boleh kosong.',

            'idGejala.required' => 'Gejala tidak boleh kosong.',



        ]);

$dPenyakit = DetailPenyakit::where('id',$request->id)->first();

        $dPenyakit->update([
            'Buah'=>$request->Buah,
            'Bagian'=>$request->Bagian,
            'idPenyakit'=>$request->idPenyakit,
            'idGejala'=>$request->idGejala,
        ]);
        Alert::success('Berhasil','Mengubah Data');

        return redirect()->route('detail-penyakit')
        ->with('success',' created successfully.');
    }
    public function delete(Request $request,$id)
    {
        DetailPenyakit::find($id)->delete();

        Alert::success('Berhasil','Menghapus Data');

        return redirect()->route('detail-penyakit')
        ->with('success',' created successfully.');
    }
}
