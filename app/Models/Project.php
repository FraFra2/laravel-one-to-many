<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'languages',
        'type_id',
        'project_status',
        'start_date',
        'end_date',
        // Aggiungi qui gli altri campi che vuoi consentire per il mass assignment
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
    use HasFactory;
}
