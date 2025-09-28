<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Architect extends Model
{
    protected $table = 'architects';
    
    protected $fillable = [
        'architect_id',
        'certificate',
        'info_id'
    ];

    // Relación con usuario (información personal)
    public function user()
    {
        return $this->belongsTo(User::class, 'info_id');
    }

    // Relación con proyectos
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
