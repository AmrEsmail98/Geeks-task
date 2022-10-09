<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'id'             => 1,
                'name'           => 'Elfardous',
                'city_id'        => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'Elfors',
                'country_id'     =>  2,
            ],
            [
                'id'             => 3,
                'name'           => 'madain',
                'country_id'     => 3
            ],

        ]);
    }
}
