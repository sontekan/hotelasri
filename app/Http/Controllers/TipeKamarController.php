<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\TipeKamar;
use App\Models\FotoKamar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class TipeKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipekamar=TipeKamar::all();
        return view('pages.tipekamar.index',['tipekamar'=>$tipekamar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tipekamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $fasilitas=implode(',',$request->fasilitas);
        if ($request->file('banner')) {
            $ft=$request->file('banner')->store('banner');
        }

        $data=new TipeKamar; 
        $data->nama=$request->nama;
        $data->harga=$request->harga;
        $data->keterangan=$request->keterangan;
        $data->fasilitas=$fasilitas;
        $data->banner=$ft;
        $data->save();

        return redirect('tipekamar/create')->with('success','Data Tipe Kamar Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decryptedid = Crypt::decryptString($id);
        $data=TipeKamar::find($decryptedid);
        $foto=FotoKamar::where('tipekamar_id', '=', $decryptedid)->get();
        return view ('pages.tipekamar.show',['data'=>$data, 'foto'=>$foto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data=TipeKamar::find($id);
        return view('pages.tipekamar.edit',['data'=>$data]);
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
        $data=TipeKamar::find($id);
        $data->nama=$request->nama;
        $data->harga=$request->harga;
        $data->keterangan=$request->keterangan;
        $data->save();

        return redirect('tipekamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function add_galery()
    {
        $data=TipeKamar::all();
        return view('pages.tipekamar.addgalery',['tipekamar'=>$data]);
    }

    public function addgalery(Request $request){
        // dd($request->all());
        if($request->hasFile('foto')){
            foreach($request->file('foto') as $img){
                $imgPath=$img->store('galeri');
                $imgData=new FotoKamar;
                $imgData->tipekamar_id=$request->tk_id;
                $imgData->img_src=$imgPath;
                $imgData->save();
            }
        }
        
        return redirect('tipekamar/galery')->with('success','Galeri Kamar Berhasil Ditambahkan');
    }

    public function destroy(Request $request, $id)
    {
        $data=TipeKamar::where('id',$id)->first();
        Storage::delete($data->banner);

        TipeKamar::where('id',$id)->delete();
        return redirect('tipekamar')->with('success','Data Tipe Kamar Berhasil Dihapus');
    }

    public function destroy_galery($id)
    {
        $data=FotoKamar::where('id',$id)->first();
        Storage::delete($data->img_src);

       FotoKamar::where('id',$id)->delete();
       return response()->json(['bool'=>true]);
    }
}
