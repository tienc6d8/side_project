<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table='info';
    public $timestamps = false;

    public function admin(){
        return $this->belongsTo('App\Admin','admin_id','id');
    }
}
