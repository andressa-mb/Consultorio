<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Responsable extends Model
{
    protected $table = 'responsable';

    protected $fillable = [
        'patient_id', 'person_id', 'relationship'
    ];

    public function person(): BelongsTo {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }

    public function dependent(): BelongsTo {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

}

