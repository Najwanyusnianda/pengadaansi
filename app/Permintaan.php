<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    //
    protected $fillable=['nomor_form','kode_bagian','kode_kegiatan',
    'output','komponen','sub_komponen','grup_akun','judul',
    'anggaran','date_mulai','date_selesai','date_created_form','jenis_pengadaan'];
}
