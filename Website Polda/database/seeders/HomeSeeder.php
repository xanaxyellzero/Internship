<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('homes')->insert([
            'title' => 'Polda Jawa Tengah',
            'text' => 'MELAYANI MASYARAKAT DENGAN TULUS DAN IKHLAS',
            'image' =>'logo.png',
        ]);
    }
}
