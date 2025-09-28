<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    // Especificamos el nombre de la tabla ya que no sigue la convención
    protected $table = 'architectural_drawings';
    
    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'drawing_id',
        'name',
        'file_design',
        'project_id',
        'create_date'
    ];
    
    // Relación con el modelo Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
