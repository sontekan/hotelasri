<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\TipeKamar;
use Illuminate\Support\Facades\Crypt;

class KamarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar=Kamar::all();
        return view ('pages.kamar.index', ['kamar'=>$kamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipekamar=TipeKamar::all();
        return view ('pages.kamar.create', ['tipekamar'=>$tipekamar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Kamar;
        $data->no_kamar=$request->no_kamar;
        $data->tipekamar_id=$request->tp_id;
        $data->save();

        return redirect('kamar')->with('success', 'Data Kamar Berhasil Ditambahkan');
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
        $decryptedid = Crypt::decryptString($id);
        $kamar=Kamar::find($decryptedid);
        $tipekamar=TipeKamar::all();
        return view ('pages.kamar.edit', ['tipekamar'=>$tipekamar, 'kamar'=>$kamar]);
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
        $decryptedid = Crypt::decryptString($id);
        $data=Kamar::find($decryptedid);
        $data->no_kamar=$request->no_kamar;
        $data->tipekamar_id=$request->tp_id;
        $data->save();

        return redirect('kamar')->with('success', 'Data Kamar Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decryptedid = Crypt::decryptString($id);
        Kamar::where('id', $decryptedid)->delete();
        return redirect('kamar')->with('success', 'Data Kamar Berhasil Dihapus');
    }
}
