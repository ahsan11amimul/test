<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('halls')->insert([
            'name' => 'F.Rahman Hall',
        ]);
          DB::table('halls')->insert([
            'name' => 'Abc Hall',
        ]);
    }
}
