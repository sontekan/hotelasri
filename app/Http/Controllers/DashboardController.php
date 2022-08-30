<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Pemesanan;
use App\Models\TipeKamar;
use App\Exports\ExportExcel;
use Excel;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $payment=Payment::all();
        $pemesanan=Pemesanan::all();
        $tipekamar=TipeKamar::all();
        $user = User::where('role', '=', 'member')->count();
        $kamar = Kamar::all()->count();
        $pemesanan2 = Pemesanan::all()->count();
        $paymentcount = Payment::where('transaction_status', '=', 'settlement')->count();
        return view('pages.dashboard.index',['data'=>$payment, 'user'=>$user, 'kamar'=>$kamar, 'pemesanan'=>$pemesanan2, 'paymentcount'=>$paymentcount, 'pemesanan2'=>$pemesanan, 'kamar'=>$kamar]);
        // return view('pages.dashboard.export',[
        //     'pemesanan'=>Pemesanan::all(),
        //      'tipekamar'=>TipeKamar::all(),
        //       'kamar'=>Kamar::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index2()
    {
        $payment=Payment::all();
        $user = User::where('role', '=', 'member')->count();
        $kamar = Kamar::all()->count();
        $pemesanan = Pemesanan::all()->count();
        $paymentcount = Payment::where('transaction_status', '=', 'settlement')->count();
        return view('pages.dashboard.index2',['data'=>$payment, 'user'=>$user, 'kamar'=>$kamar, 'pemesanan'=>$pemesanan, 'paymentcount'=>$paymentcount]);
        // return view('pages.dashboard.export',[
        //     'pemesanan'=>Pemesanan::all(),
        //      'tipekamar'=>TipeKamar::all(),
        //       'kamar'=>Kamar::all(),
        // ]);
    }

    public function export($bulan, $tahun){

        // dd([$bulan, $tahun]);
        // return Excel::download(new ExportExcel)->Seleksi($bulan, $tahun)->download('invoices.xlsx');
        return Excel::download(new ExportExcel($bulan, $tahun), 'Laporan Transaksi Bulan'.' '.$bulan. '.xlsx');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
