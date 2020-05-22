<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    public $table ="nhanvien";

    protected $primanykey = 'id';
    protected $guarded = [];

    public function phongban()
    {
        return $this->belongsTo(Phongban::class,'id');  
    }
 
}
