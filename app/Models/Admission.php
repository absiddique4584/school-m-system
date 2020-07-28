<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = ['name','p_school','s_phone','s_email','d_birth','p_birth','class','image'];


   //public function admission_two(){
  //     return $this->belongsTo(Admission::class,'id','admission_id');
   //}
}
