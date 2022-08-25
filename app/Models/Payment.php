<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function User (){
        return $this->belongsTo(User::class, 'pemesan');
    }

    public function Pemesanan (){
        return $this->belongsTo(Pemesanan::class, 'payment_id');
    }

    public function Kamar (){
        return $this->belongsTo(Kamar::class);
    }
}
