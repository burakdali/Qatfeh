<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'blood_type',
        'location',
        'additional_phone_number',
        'whatsapp_link',
    ];
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
