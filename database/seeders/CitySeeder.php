<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cities')->insert([
            [
                'id'             => 1,
                'name'           => 'Elmansoura',
                'country_id'     => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'Doha',
                'country_id'     =>  2,
            ],
            [
                'id'             => 3,
                'name'           => 'Elrayad',
                'country_id'     => 3
            ],

        ]);
    }
}
