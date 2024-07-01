<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DsDivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ds_divisions')->insert([
            ['name' => 'Colombo 01', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 02', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 03', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 04', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 05', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 06', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 07', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 08', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 09', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Colombo 10', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
