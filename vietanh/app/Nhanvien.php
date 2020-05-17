<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    public $table ="nhanviens";
    public function bangcong(){
        return $this->hasOne('App/bangcong');
    }
}
