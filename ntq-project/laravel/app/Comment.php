<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public $timestamps = false;

    public function admin_commnent(){
        return $this->belongsTo('App\Admin','admin_id','id');
    }
}
