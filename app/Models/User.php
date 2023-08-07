<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'email',
        'phone_number',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function doner(): HasOne
    {
        return $this->hasOne(Doner::class);
    }
    function seeker(): HasOne
    {
        return $this->hasOne(Seeker::class);
    }
    function userDetails(): HasOne
    {
        return $this->hasOne(UserDetails::class);
    }
    function transactionAsDoner(): HasMany
    {
        return $this->hasMany(Transactions::class, 'donor_id');
    }
    function transactionAsSeeker(): HasMany
    {
        return $this->hasMany(Transactions::class, 'seeker_id');
    }
}
