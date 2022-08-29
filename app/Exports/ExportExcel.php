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
    public function view(): View
    {

        return view('pages.dashboard.export',[
            'pemesanan'=>Pemesanan::all(),
             'tipekamar'=>TipeKamar::all(),
              'kamar'=>Kamar::all(),
        ]);
    }
}
