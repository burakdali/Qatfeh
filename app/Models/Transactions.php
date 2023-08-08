<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transactions extends Model
{
    use HasFactory;
    function seeker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seeker_id');
    }
    function donor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'donor_id');
    }
    protected $fillable = [
        'doner_id',
        'seeker_id',
        'scheduled_date',
        'donation_date',
        'is_done'
    ];
}
