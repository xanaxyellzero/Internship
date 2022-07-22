<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$galleries = [
        [
            'image' =>'berita1.jpg',
            'name' =>'Polda Jawa Tengah',
            'title' => 'Kapolres Pekalongan Kota Pimpin Apel Gelar Pasukan',
        ],
        [
            'image' =>'berita2.jpg',
            'name' =>'Polda Jawa Tengah',
            'title' => 'Polda Jateng Amankan Piala Presiden 2022 di Solo',
        ],
        ];

        DB::table('galleries')->insert($galleries);
	
    }
}
