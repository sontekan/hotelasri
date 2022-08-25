<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Pemesanan;
use App\Models\TipeKamar;
use App\Models\User;
use App\Models\Payment;
use App\Models\FotoKamar;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\If_;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan=Pemesanan::all();
        return view('pages.pemesanan.index',['pemesanan'=>$pemesanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamar=Kamar::all();
        return view('pages.pemesanan.create',['kamar'=>$kamar ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=new Pemesanan;
        $data->pemesan= isset( $request->pemesan) ? $request->pemesan : null;
        $data->tamu=$request->tamu;
        $data->checkin=$request->checkin;
        $data->checkout=$request->checkout;
        $data->kamar_id=$request->no_kamar;
        $data->jumlah_tamu=$request->jumlah_tamu;
        $data->status_pembayaran=$request->status_pembayaran;
        $data->extra_service=$request->fasilitas;
        $data->save();

        return redirect('pemesanan')->with('success','Pemesanan Berhasil Dilakukan');
    }

    public function store_online(Request $request)
    {
        
        $data=new Pemesanan;
        $data->pemesan= isset( $request->pemesan) ? $request->pemesan : null;
        $data->tamu=$request->tamu;
        $data->checkin=$request->checkin;
        $data->checkout=$request->checkout;
        $data->kamar_id=$request->no_kamar;
        $data->jumlah_tamu=$request->jumlah_tamu;
        $data->status_pembayaran=$request->status_pembayaran;
        $data->extra_service=$request->fasilitas;
        $data->save();

        $payment = Payment::where('id', $request->payment_id)->first();
        $payment->update([
            'kamar_id' => $data->kamar_id
        ]);

        return redirect('pemesanan/create')->with('success','Pemesanan Berhasil Dilakukan');
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
       
        Pemesanan::where('id',$id)->delete();
        return redirect('pemesanan');
    }

    function available_rooms(Request $request, $checkin, $checkout){

        $room=DB::SELECT("SELECT * FROM kamars WHERE id NOT IN (SELECT kamar_id FROM pemesanans WHERE ('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout) OR ('$checkin' <= checkin AND '$checkout' >= checkout))");
       
        $data=[];
        foreach($room as $row){
        $tipekamar=TipeKamar::find($row->tipekamar_id);
        $data[]=['room'=>$row,'tipekamar'=>$tipekamar];
        }
        return response()->json(['data' =>$data]);

        // return response()->json($room);

    }

    function cekkamar(Request $request){

        // $kamar=Kamar::all();
        return view('pages.booking.carikamar');

    }

    function kamar_tersedia(Request $request){

       
        $request->validate([
            'checkin'=>'required',
            'checkout'=>'required',
            'jumlah_tamu'=>'required',
        ]);

        $checkin=$request->checkin;
        $checkout=$request->checkout;
        $jumlah_tamu=$request->jumlah_tamu;
        
        $tipekamar=TipeKamar::all();

        $room=DB::SELECT("SELECT DISTINCT tipekamar_id FROM kamars WHERE id NOT IN (SELECT kamar_id FROM pemesanans WHERE ('$checkin' BETWEEN checkin AND checkout) OR ('$checkout' BETWEEN checkin AND checkout) OR ('$checkin' <= checkin AND '$checkout' >= checkout))");
        
        $data=[];
        foreach ($room as $row) {
            $tipekamar=TipeKamar::find($row->tipekamar_id);
            $data[]=['tipekamar'=>$tipekamar];
        }

        // $kamar = json_decode($data);
        //  return response()->json($data);
        // dd($data);
        return view('pages.booking.kamarsedia',['data'=>$data, 'checkin'=>$checkin, 'checkout'=>$checkout, 'jumlah_tamu'=>$jumlah_tamu]);
           
    }  

    public function pesan(request $request, $id){


            $decryptedid = Crypt::decryptString($id);
            $pesan=TipeKamar::find( $decryptedid );
            $checkin = $request->checkin;
            $checkout =$request->checkout; 
            $jumlah_tamu=$request->jumlah_tamu;
           
        return view('pages.booking.pesan', ['pesan'=>$pesan, 'checkin'=>$checkin, 'checkout'=>$checkout,  'jumlah_tamu'=>$jumlah_tamu]);
        // dd($data[0]);
        }
    
    public function payment (Request $request){

            $pemesan = $request->pemesan;
            $tamu = $request->tamu;
            $fasilitas = $request->fasilitas;
            $checkin = $request->checkin;
            $checkout = $request->checkout;
            $tipekamar = $request->nama;
            $harga = $request->harga;
            $jumlah_tamu = $request->jumlah_tamu;

            // $data[]=[
            //     'tamu' => $tamu,
            //     'fasilitas' => $fasilitas,
            //     'checkin' => $checkin,
            //     'checkout' => $checkout,
            //     'tipekamar' => $tipekamar,
            //     'harga' => $harga
            // ];

            // dd($data);
                \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
                \Midtrans\Config::$isProduction = false;
                \Midtrans\Config::$isSanitized = true;
                \Midtrans\Config::$is3ds = true;
             
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 10000,
                ),
                'item_details' => array(
                    [
                        'id'=> rand(),
                        'price' => $fasilitas,
                        'name' => 'Extra Bed',
                        'quantity' => 1
                    ],[
                        'id' => rand(),
                        'price' => $harga,
                        'name' => $tipekamar,
                        'quantity' => 1
                    ]
                ),
                'customer_details' => array(
                    'first_name' => $tamu,
                   
                ),
            );
             
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view ('pages.booking.payment',[
                'snap_token'=>$snapToken,
                'tamu' =>$tamu,
                'checkin' =>$checkin,
                'checkout' =>$checkout, 
                'fasilitas' =>$fasilitas,
                'harga'=>$harga, 
                'tipekamar'=>$tipekamar, 
                'total' =>$harga + $fasilitas,
            ]);
            }

        public function paymentpost (Request $request){
           $json = json_decode($request->json);
           $payment = new Payment;
           $payment->transaction_time = $json->transaction_time;
           $payment->transaction_status = $json->transaction_status;
           $payment->transaction_id = $json->transaction_id;
           $payment->status_message = $json->status_message;
           $payment->status_code = $json->status_code;
           $payment->payment_type = $json->payment_type;
           $payment->order_id = $json->order_id;
           $payment->merchant_id = isset($json->merchant_id) ?  $json->merchant_id : null;
           $payment->gross_amount = $json->gross_amount;
           $payment->fraud_status = $json->fraud_status;
           $payment->currency = isset( $json->currency) ? $json->currency : null;
           $payment->signature_key = isset ($json->signature_key) ? $json->signature_key : null;
           $payment->settlement_time =isset ($json->settlement_time) ? $json->settlement_time : null;
           $payment->pemesan = $request->pemesan;
           $payment->email = $request->email;
           $payment->tamu = $request->tamu;
           $payment->fasilitas = $request->fasilitas;
           $payment->harga = $request->harga;
           $payment->nama = $request->nama;
           $payment->nama_pemesan = $request->namapemesan;
           $payment->checkin = $request->checkin;
           $payment->checkout = $request->checkout;	
           $payment->jumlah_tamu = $request->jumlah_tamu;	
           $payment->save();

           
          if ($payment->transaction_status == 'settlement') {
            Pemesanan::sendEmailSuccess($payment);
            return redirect('booking/'. Crypt::encryptString($payment->id) .'/payment-success'); 
          } else {
            Pemesanan::sendEmailPending($payment);
            return redirect('booking/'. Crypt::encryptString($payment->id) .'/payment-pending');    
          }
          

        //   return redirect('booking/'. Crypt::encryptString($payment->id) .'/payment-success');  
        }


        public function payment_success(Request $request, $id)
    {
        $decryptedid = Crypt::decryptString($id);
        $data=Payment::find( $decryptedid );
        // dd($data);
        return view('invoice.invoice',['data'=>$data]);
    }

    public function payment_pending(Request $request, $id)
    {
        $decryptedid = Crypt::decryptString($id);
        $data=Payment::find( $decryptedid );
        // dd($data);
        return view('invoice.invoicepending',['data'=>$data]);
    }

    public function riwayat_transaksi(Request $request, $id){
        $decryptedid = Crypt::decryptString($id);
        $data=DB::SELECT("SELECT * FROM payments WHERE pemesan ='$decryptedid'");
        //  dd($data);

         return view('pages.booking.riwayat',['data'=>$data]);
    }

    public function cetak_invoice(){
            
        $pdf = Pdf::loadView('invoice.invoice', [
            'namapemesan' => $request->namapemesan,
            'order_id'=> $json->order_id,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'email' => $request->email,
            'gross_amount' => $json->gross_amount,
            'payment_type' => $json->payment_type,
            'fasilitas' => $request->fasilitas,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'transaction_time'=> $json->transaction_time,
           ]);
        //    $pdf->setPaper('A4', 'potrait');
        //    return $pdf->stream();
          Storage::put('public/storage/uploads/'.'-'.rand() .'-'.time(). '.'.'pdf', $pdf->output());
        //    return Pdf::loadFile(public_path().'\coba.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
    }

    public function list_payment(){
            
        $payment=Payment::all();
        return view('pages.booking.index',['data'=>$payment]);
    }

    public function reservasi_online($id){

        $decryptedid = Crypt::decryptString($id);
        $payment=Payment::find( $decryptedid );
        $kamar=Kamar::all();
        return view('pages.pemesanan.create2',['kamar'=>$kamar, 'payment'=>$payment ]);

      
        
    }
    
}
