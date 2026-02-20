<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'person_id', 'responsable'
    ];

    public function person(): BelongsTo {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }

    public function responsables(): HasMany {
        return $this->hasMany(Responsable::class);
    }
}
