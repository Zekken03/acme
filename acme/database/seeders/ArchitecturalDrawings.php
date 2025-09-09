<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArchitecturalDrawings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architectural_drawings')->updateOrInsert(
            ['name' => 'Plano Planta Baja'],
            [
                'drawing_id' => 1,
                'name' => 'Plano Planta Baja',
                'file_design' => '/drawings/dibujo1.pdf',
                'project_id' => 1,
                'create_date' => '2023-01-20',
            ]
        );
        
        DB::table('architectural_drawings')->updateOrInsert(
            ['name' => 'Plano Planta Alta'],
            [
                'drawing_id' => 2,
                'name' => 'Plano Planta Alta',
                'file_design' => '/drawings/dibujo2.pdf',
                'project_id' => 2,
                'create_date' => '2023-02-15',
            ]
        );
    }
}
