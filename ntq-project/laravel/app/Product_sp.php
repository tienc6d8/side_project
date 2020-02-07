<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sp extends Model
{
    protected $table='product_sp';
    public $timestamps = false;

    public function info_sp(){
        return $this->hasMany('App\Info_sp','product_id','id');
    }

    public function nguoidung_sp(){
        return $this->hasMany('App\Nguoidung_sp','product_id','id');
    }
}
