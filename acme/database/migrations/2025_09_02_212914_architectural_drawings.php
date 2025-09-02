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
        Schema::create('architectural_drawings', function (Blueprint $table) {
            $table->id();
            $table->integer('drawing_id');
            $table->string('name');
            $table->string('file_design');
            $table->foreignId('project_id')
                  ->constrained()
                  ->onDelete('cascade');
                  
            $table->date('create_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('architectural_drawings');
    }
};
