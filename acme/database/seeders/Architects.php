<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Architects extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architects')->updateOrInsert(
            ['info_id' => 3],
            [
                'architect_id' => 1,
                'certificate' => 'CERT2323ALEXWF232',
                'info_id' => 3,
            ]
        );
        
        DB::table('architects')->updateOrInsert(
            ['info_id' => 4],
            [
                'architect_id' => 2,
                'certificate' => 'LUISRE23244323WF232',
                'info_id' => 4,
            ]
        );
    }
}
