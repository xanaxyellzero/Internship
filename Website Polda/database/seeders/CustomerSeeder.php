<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customer = [
          [
               'image' =>'logo.png',
               'name' =>'POLRES DEMAK',
          ],
          [
               'image' =>'logo.png',
               'name' =>'DIT POLAIRUD',
          ],
          [
               'image' =>'logo.png',
               'name' =>'DIT RESKRIMSUS',
          ],
          [
               'image' =>'logo.png',
               'name' =>'POLRES PATI',
          ],
          [
               'image' =>'logo.png',
               'name' =>'POLRES BATANG',
          ],
          [
               'image' =>'logo.png',
               'name' =>'POLRES JEPARA',
          ],
          [
               'image' =>'logo.png',
               'name' =>'POLRES SEMARANG',
          ],
          [
               'image' =>'logo.png',
               'name' =>'POLRES KENDAL',
          ],

        ];

        DB::table('customers')->insert($customer);
    }
}
 