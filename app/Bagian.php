<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['kode_bagian','kode_bagian_up','nama_bagian','user_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
