<?php

namespace App\Models;

use App\Helpers\GeneralHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property $id
 * @property $parent_id
 * @property $firstname
 * @property $lastname
 * @property $cellphone
 * @property $email
 * @property $password
 * @property $status
 *
 * @property $roles
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'cellphone',
        'email',
        'password',
        'status',
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
        'email_verified_at'     => 'datetime',
        'cellphone_verified_at' => 'datetime',
    ];

    /**
     *
     * @return Attribute
     */
    protected function fullname(): Attribute
    {
        return Attribute::make(
            get: fn() => ucfirst($this->firstname) . ' ' . ucfirst($this->lastname),
        );
    }

    /**
     *
     * @return Attribute
     */
    protected function email(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value)
        );
    }

    /**
     *
     * @return Attribute
     */
    protected function cellphone(): Attribute
    {
        return Attribute::make(
            set: fn($value) => GeneralHelper::getOnlyNumbers($value)
        );
    }

}
