<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'id'             => 1,
                'name'          => 'Egypt',
            ],
            [
                'id'             => 2,
                'name'          => 'Qater',
            ],
            [
                'id'             => 3,
                'name'          => 'Sudai',
            ],

        ]);
    }
}
