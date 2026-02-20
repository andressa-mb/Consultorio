<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppConfig extends Model
{
    protected $table = 'app_config';

    protected $fillable = [
        'primary_color', 'secondary_color', 'user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
