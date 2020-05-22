<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phongban extends Model
{
    public $table = 'phongban'; 
    //protected $primarykey = 'phongban_id';

    public function getnhanvien(){
        return $this->hasMany(Nhanvien::class ,'nhanvien_id');
    }
    

}
