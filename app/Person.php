<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $fillable = ['nama','nip','user_id','role_id','is_active'];
}
