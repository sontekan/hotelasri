<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Support\Facades\Storage;

class Pemesanan extends Model
{
    use HasFactory;

    
    public function Kamar (){
        return $this->belongsTo(Kamar::class);
    }

    public function User (){
        return $this->belongsTo(User::class);
    }

    public function TipeKamar (){
        return $this->belongsTo(TipeKamar::class);
    }

    public function sendEmailSuccess ($payment){
         $viewData['email'] = $payment->email;
         $viewData['checkin'] = $payment->checkin;
         $viewData['checkout'] = $payment->checkin;
         $viewData['namapemesan'] = $payment->nama_pemesan;
         $viewData['order_id'] = $payment->order_id;
         $viewData['tamu'] = $payment->tamu;

         Mail::send('invoice.emailsuccess', $viewData, function ($message) use ($payment) {
             $message->from('noreplay@hotelasri.com', env('APP_NAME'));
             $message->to($payment->email);
             $message->subject('Pemesanan Kamar Berhasil');
         });
    }

    public function sendEmailPending ($payment){
        $viewData['email'] = $payment->email;
        $viewData['checkin'] = $payment->checkin;
        $viewData['checkout'] = $payment->checkin;
        $viewData['namapemesan'] = $payment->nama_pemesan;
        $viewData['order_id'] = $payment->order_id;
        $viewData['tamu'] = $payment->tamu;
        $viewData['transaction_status'] = $payment->transaction_status;

        Mail::send('invoice.emailpending', $viewData, function ($message) use ($payment) {
            $message->from('noreplay@hotelasri.com', env('APP_NAME'));
            $message->to($payment->email);
            $message->subject('Pemesanan Kamar Pending');
        });
   }

}
