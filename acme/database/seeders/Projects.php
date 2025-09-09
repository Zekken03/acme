<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Projects extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->updateOrInsert(
            ['project_id' => 1],
            [
                'project_id' => 1,
                'name' => 'Casa Habitación',
                'description' => 'Proyecto de casa habitación de dos niveles con diseño moderno y sostenible.',
                'customer_id' => 1,
                'zone_id' => 1,
                'architect_id' => 1,  
                'start_date' => '2023-01-15',
                'delivery_date' => '2023-12-15',
            ]
        );
        
        DB::table('projects')->updateOrInsert(
            ['project_id' => 2],
            [
                'project_id' => 2,
                'name' => 'Edificio de Oficinas',
                'description' => 'Diseño y construcción de un edificio de oficinas de cinco niveles con áreas verdes.',
                'customer_id' => 2,
                'zone_id' => 2,
                'architect_id' => 2, 
                'start_date' => '2023-03-01',
                'delivery_date' => '2024-03-01',
            ]
        );
    }
}
