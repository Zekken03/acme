<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->updateOrInsert(
            ['info_id' => 1],
            [
                'customer_id' => 1,
                'rfc' => 'RG23354654WF232',
                'info_id' => 1,
            ]
        );
        
        DB::table('customers')->updateOrInsert(
            ['info_id' => 2],
            [
                'customer_id' => 2,
                'rfc' => 'PRTGRE23244323WF232',
                'info_id' => 2,
            ]
        );
    }
}
