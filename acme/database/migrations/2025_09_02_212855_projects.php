<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('name');
            $table->text('description');
            $table->foreignId('customer_id')
                  ->constrained()
                  ->onDelete('cascade');
                  
            $table->foreignId('zone_id')
                  ->constrained('zones')
                  ->onDelete('restrict');
                  
            $table->foreignId('architect_id')
                  ->constrained()
                  ->onDelete('restrict');
                  
            $table->date('start_date');
            $table->date('delivery_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
