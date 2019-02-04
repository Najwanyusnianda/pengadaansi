<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    $this->call(BagianTableSeeder::class);
       $this->call(RoleTableSeeder::class);
       $this->call(KegiatanProgramTableSeeder::class);
       $this->call(ProgramTableSeeder::class);
       $this->call(PpkJabatanTableSeeder::class);

    }
}
