<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama_perusahaan' => 'Polda Jawa Tengah',
            'emails' => 'bidti_jateng@polri.go.id',
            'locations' => 'Jl. Pahlawan No.1, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50142',
            'phone' => '-',
            'image' =>'Polda Jawa Tengah.jpeg',
            'text' =>'Melayani masyarakat dengan tulus dan ikhlas.',
            'title' => 'Polda Jawa Tengah
',
        ]);
    }
}
