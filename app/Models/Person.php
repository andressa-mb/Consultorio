<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'name', 'surname', 'user_id', 'address_id', 'birthday', 'gender', 'telephone', 'cellphone', 'cpf', 'active'
    ];

    public function user(): HasOne {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function address(): BelongsTo {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function patient(): HasOne {
        return $this->hasOne(Patient::class);
    }

    public function responsable(): HasOne {
        return $this->hasOne(Responsable::class);
    }
}
