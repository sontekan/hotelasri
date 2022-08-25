<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    public function TipeKamar (){
        return $this->belongsTo(TipeKamar::class,'tipekamar_id');
    }
  
}
