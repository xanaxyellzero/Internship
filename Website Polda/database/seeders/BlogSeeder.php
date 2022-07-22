<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$blogs = [
        [
            'image' =>'berita1.jpg',
            'author' =>'Stevano Titondea Prayoga Putra',
            'title' => 'Ops Patuh Candi 2022, Kapolres Pekalongan Kota Pimpin Apel Gelar Pasukan',
            'content' =>'<p>text berita</p>',
            'created_at' => '2022-05-20 11:11:57'
        ],
        [
            'image' =>'berita2.jpg',
            'author' =>'Caezar Brian Ridho Swandi',
            'title' => 'Polda Jateng Amankan Piala Presiden 2022 di Solo',
            'content' =>'<p>text berita</p>',
            'created_at' => '2022-05-21 11:11:57'
        ],
         [
            'image' =>'berita3.jpg',
            'author' =>'Stevano Titondea Prayoga Putra',
            'title' => 'Selama 14 Hari Kedepan, Polres Sukoharjo Gelar Operasi Patuh Candi 2022',
            'content' =>'<p>text berita</p>',
            'created_at' => '2022-05-22 11:11:57'
        ],
        ];

        DB::table('blogs')->insert($blogs);



    }
}
