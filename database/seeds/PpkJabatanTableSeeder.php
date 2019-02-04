<?php

use Illuminate\Database\Seeder;
use App\PpkJabatan;

class PpkJabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ppk_jabatans')->delete();
        $json= File::get("database/data/ppk.json");
        $data=json_decode($json);
        foreach ($data as $obj) {
            PpkJabatan::create(array(
                
                'jabatan'=>$obj->jabatan,
                'kode'=>$obj->kode_ppk,
                'kode_program'=>$obj->kode_program
            ));
        }
    }
}
