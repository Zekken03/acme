<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zones';
    
    protected $fillable = [
        'zone_id',
        'name'
    ];

    // Relación con proyectos
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
