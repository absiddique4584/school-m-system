<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission_p_part extends Model
{
    protected $fillable=['admission_id','this_class','m_name','m_phone','f_name','f_phone','m_situation','address','p_address'];


        public function admission_p(){
             return $this->belongsTo(Admission::class,'admission_id','id');
        }
        public function admission_p_part(){
            return $this->belongsTo(Admission::class,'admission_id','id');
        }
        public function student_list(){
            return $this->belongsTo(Admission::class,'admission_id','id')->select('id','image','name');
        }

}
