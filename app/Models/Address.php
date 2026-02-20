<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    protected $table = 'addresses';
    public $timestamps = false;

    protected $fillable = [
        'zipcode', 'street', 'number', 'complement', 'district', 'city', 'state', 'type'
    ];

    public function person(): HasOne {
        return $this->hasOne(Person::class, 'address_id', 'id');
    }
}
