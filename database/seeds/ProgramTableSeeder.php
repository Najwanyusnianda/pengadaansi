<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('programs')->delete();
        $json= File::get("database/data/program.json");
        $data=json_decode($json);
        foreach ($data as $obj) {
            \App\Program::create(array(
                'nama_program'=>$obj->uraian_program,
                'kode_program'=>$obj->kode_program
            ));
        }
    }
}
