<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    
    protected $fillable = [
        'customer_id',
        'rfc',
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
