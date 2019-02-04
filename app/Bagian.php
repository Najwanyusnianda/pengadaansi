<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{

 
    protected $fillable =['kode_bagian','kode_bagian_up','nama_bagian','user_id'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

