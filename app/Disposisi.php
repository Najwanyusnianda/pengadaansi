<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Disposisi extends Model
{
    //
    protected $fillable=['permintaan_id','pengirim_id','penerima_id','pp_id','isi'];

    public function getCreatedAtAttribute()
    {
    Carbon::setLocale('id');    
    return Carbon::parse($this->attributes['created_at'])->format('d, M Y H:i');
    }

    public function getUpdatedAtAttribute()
    {
    return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
