<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Laporan;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;


class DashboardController extends Controller
{
    public function Dadmin()
    {
        // Retrieve diseases reported in the last 6 months
        $diseases = Diagnosa::where('created_at', '>=', Carbon::now()->subMonths(6))->get();

        // Group the diseases by month
        $data = [];
        foreach ($diseases as $disease) {
            $name = $disease->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit;
            if (!isset($data[$name])) {
                $data[$name] = [];
            }
            $month = $disease->created_at->format('M');
            if (!isset($data[$name][$month])) {
                $data[$name][$month] = 0;
            }
            $data[$name][$month]++;
        }


        $currentMonth = Carbon::now();
        $months = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = $currentMonth->subMonth();
            $months[] = $month->format('M');

            // If this is the last iteration, add the current month to the array
            if ($i == 0) {
                $months[] = Carbon::now()->format('M');
            }
        }


        $dataPenyakit = [];
        // Retrieve all diseases
        $penyakit =   Laporan::pluck('penyakit');
        foreach($penyakit as $key => $value){

            $jns = $value;
            $jumlah = Laporan::where('penyakit', $value)->count();
            if (!isset($dataPenyakit[$jns])) {
                $dataPenyakit[$jns] = $jumlah;
            }

        }



        // @dd($dataPenyakit);
        $dataPenyakit = collect($dataPenyakit);



        $dataobat = [];
        // Retrieve all diseases
        $obat =   Laporan::pluck('obat');
        foreach($obat as $key => $value){

            $jns = $value;
            $jumlah = Laporan::where('obat', $value)->count();
            if (!isset($dataobat[$jns])) {
                $dataobat[$jns] = $jumlah;
            }

        }
        $dataobat = collect($dataobat);



        // @dd($dataobat);
        $dataPenyakit = collect($dataPenyakit);
        // @dd($dataPenyakit);

        $dataUser = User::count();
        $dataPetani = User::where('userRole', 'user')->count();
        $dataPenyakit1 = Penyakit::count();
        $dataGejala = Gejala::count();

        $tittle = "Dashboard";
        return view('admin', [
            'tittle' => $tittle,
            'data' => $data,
            'months' => $months,
            'dataPenyakit'=> $dataPenyakit,
            'dataobat'=> $dataobat,
            'dataUser' => $dataUser,
            'dataPetani' => $dataPetani,
            'dataPenyakit1' => $dataPenyakit1,
            'dataGejala' => $dataGejala
        ]);
    }
    public function Duser()
    {
        $tittle = "Dashboard";

        return view('user', ['tittle' => $tittle]);
    }
    public function Dpemilik()
    {
        // $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        // ->where('created_at', '>', Carbon::today()->subDay(6))
        // ->groupBy('day_name','day')
        // ->orderBy('day')
        // ->get();

        //  $data = [];

        //  foreach($record as $row) {
        //     $data['label'][] = $row->day_name;
        //     $data['data'][] = (int) $row->count;
        //   }

        // $data['chart_data'] = json_encode($data);
        $tittle = "Dashboard";

        return view('pemilik', ['tittle' => "Dashboard"]);
    }
}
