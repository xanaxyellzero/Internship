<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('misis')->insert([
            'Image' => 'Lambang_Polda_Jateng2.png',
            'text' => 'Lambang Polda Jawa Tengah',
            'visi' => 'Menampilkan Polda Jawa Tengah yang Profesional, Bermoral, Modern sebagai Pelindung, Pengayom, dan Pelayan Masyarakat yang terpercaya dalam pemeliharaan Kemanan ketertiban Masyarakat dan Penegakkan Hukum.',
            'misi' => 'Meningkatkan Sumber Daya Manusia Kepolisian Daerah Jawa Tengah Untuk Tampil sebagai sosok Pengayom, Pelindung dan Pelayan Masyarakat;
            Melaksanakan Penegakkan Hukum secara Konsisten, Berkesinambungan dan Transparan untuk pemeliharaan Kamtibmas;
            Melaksanakan Pelayanan Optimal, yang dapat menimbulkan kepercayaan bagi Masyarakat dalam upaya meningkatkan kesadaran hukum;
            Menciptakan kondisi keamanan yang kondusif dengan meningkatkan peran serta masyarakat dan instansi terkait secara aktif;
            Mengedepankan dan Menjunjung Tinggi Hak Asasi Manusia dalam setiap melaksanakan tugas.
            '
        ]);
    }
}
