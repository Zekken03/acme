<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ejecutar nuestro seeder personalizado
        $this->call([
            Users::class,
        ]);
        $this->call([
            Zone::class,
        ]);
        $this->call([
            Customers::class,
        ]);
        $this->call([
            Architects::class,
        ]);
        $this->call([
            Projects::class,
        ]); 
        $this->call([
            ArchitecturalDrawings::class,
        ]);
    }
}
