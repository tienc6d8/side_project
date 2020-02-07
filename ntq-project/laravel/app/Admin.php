<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admin';
    public $timestamps = false;

    public function info(){
        return $this->hasOne('App\Info','admin_id','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','admin_id','id');
    }

}
