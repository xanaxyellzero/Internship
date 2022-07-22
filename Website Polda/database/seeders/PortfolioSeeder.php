<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = [
        [
            'image' => 'kapolda.png',
            'name' => 'Drs. Ahmad Luthfi, S.St.Mk., S.H.',
            'title' => 'Kapolda Jawa Tengah',
            'created_at' => '2021-12-20 02:39:02'
        ],
        [
            'image' => 'wakapolda.png',
            'name' => 'Abiyoso Seno Aji, S.I.K',
            'title' => 'Wakapolda Jawa Tengah',
            'created_at' => '2022-01-05 06:59:18'
        ],
         [
            'image' => 'irwasda.png',
            'name' => 'Drs. Untung Sudarto	',
            'title' => 'Irwasda Polda Jawa Tengah',
            'created_at' => '2022-01-05 07:01:01'
        ],
        [
            'image' => 'karorena.jpeg',
            'name' => 'Handoyo, S.I.K., M.Si.',
            'title' => 'Karo Rena Polda Jawa Tengah',
            'created_at' => '2022-01-05 07:01:01'
        ],
        ];

        DB::table('portfolios')->insert($portfolios);
    }
}
