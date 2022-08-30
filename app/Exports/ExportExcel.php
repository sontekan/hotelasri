<?php

namespace App\Exports;

use App\Models\Tipekamar;
use App\Models\Pemesanan;
use App\Models\Kamar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Excel;

class ExportExcel implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    function __construct($bulan, $tahun) {
        $this->bulan = $bulan;
        $this->tahun = $tahun;
 }

    public function view(): View
    {
        $pemesanan = Pemesanan::whereYear('updated_at', '=',  $this->tahun)
        ->whereMonth('updated_at', '=',   $this->bulan)
        ->get();
        return view('pages.dashboard.export',[
        'pemesanan'=>$pemesanan,
        'tipekamar'=>TipeKamar::all(),
        'kamar'=>Kamar::all(),
        ]);
    }
}
