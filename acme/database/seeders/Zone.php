<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zone extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->updateOrInsert(
            ['zone_id' => 1], 
            [
                'zone_id' => '1',
                'name' => 'Zona Norte',
            ]
        );
        
        DB::table('zones')->updateOrInsert(
            ['zone_id' => 2], 
            [
                'zone_id' => '2',
                'name' => 'Zona Sur',
            ]
        );
    }
}
