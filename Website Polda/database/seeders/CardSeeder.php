<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
        [
            'header' =>'1',
            'image' =>'borobudur.png',
            'text' =>'Borobudur',
            'title' => 'diartikan sebagai keagungan peninggalan sejarah, pun pula dimaksudkan akan hikmat kekuatan pembuatnya terdahul, sehingga dapat terwujud suatu bangunan yang megah dan kuat untuk pula diwarisi semangat juang tabah dan ulet.
',
        ],
        [
            'header' =>'2',
            'image' =>'logo.png',
            'text' =>'Polda Jawa Tengah',
            'title' => '"Sukses seringkali datang pada mereka yang berani bertindak, dan jarang menghampiri penakut yang tidak berani mengambil konsekuensi".
',
        ],
        [
            'header' =>'3',
            'image' =>'peta-jawa-tengah.png',
            'text' =>'Peta Jawa Tengah',
            'title' => 'Jawa Tengah adalah provinsi yang terletak di bagian tengah Pulau Jawa. Ibu kotanya adalah Semarang, berbatasan dengan Provinsi Jawa Barat di sebelah barat, Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara.
',
        ],
        ];

        DB::table('cards')->insert($cards);
    }
}
