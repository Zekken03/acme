<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    
    protected $fillable = [
        'project_id',
        'name',
        'description',
        'customer_id',
        'zone_id',
        'architect_id',
        'start_date',
        'delivery_date'
    ];

    protected $casts = [
        'start_date' => 'date',
        'delivery_date' => 'date'
    ];

    // Relación con cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relación con zona
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    // Relación con arquitecto
    public function architect()
    {
        return $this->belongsTo(Architect::class);
    }

    // Relación con planos arquitectónicos
    public function architecturalDrawings()
    {
        return $this->hasMany(ArchitecturalDrawing::class);
    }
}
