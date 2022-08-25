<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index (){

    }

    public function store (Request $request){

        $data=new Kontak;
        $data->nama=$request->nama;
        $data->email=$request->email;
        $data->subjek=$request->subjek;
        $data->pesan=$request->pesan;
        $data->save();

        return redirect('/')->with('success', 'Terima Kasih Sudah Menghubungi Kami');
    }
}
