<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchitecturalDrawing extends Model
{
    protected $table = 'architectural_drawings';
    
    protected $fillable = [
        'drawing_id',
        'name',
        'file_design',
        'project_id',
        'create_date'
    ];

    protected $casts = [
        'create_date' => 'date'
    ];

    // Relación con proyecto
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
